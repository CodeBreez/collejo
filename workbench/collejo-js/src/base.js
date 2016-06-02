var Collejo = Collejo || {};

Collejo.ajaxComplete = function(event, xhr, settings) {

    var code, status, timeout, response = 0;

    try {
        response = $.parseJSON(xhr.responseText);
    } catch (e) {
        console.log(e)
    }

    status = (response == 0) ? xhr.status : response;

    if (status == 403 || status == 401) {
        this.alert('danger', 'You are not authorized to perform this action', 1000);
    }

    if (status != 0 && status != null) {
        var code = status.code != undefined ? status.code : 0;
        if (code == 0) {
            if (response.data != undefined && response.data.redir != undefined) {
                if (response.message != null) {
                    this.alert(response.success ? 'success' : 'warning', response.message + '. redirecting&hellip;', 1000);
                    timeout = 0;
                }
                setTimeout(function() {
                    window.location = response.data.redir;
                }, timeout);
            }

            if (response.message != undefined && response.message != null && response.message.length > 0 && response.data.redir == undefined) {
                this.alert(response.success ? 'success' : 'warning', response.message, 3000);
            }

            if (response.data != undefined && response.data.errors != undefined) {
                var msg = '<strong>Validation failed</strong> Please correct them and try again <br/>';
                $.each(response.data.errors, function(field, err) {
                    $.each(err, function(i, e) {
                        msg = msg + e + '<br/>';
                    });
                });

                this.alert('warning', msg, 5000);
            }
        }
    }

    $(window).resize();
}

$(function() {

    Collejo.templates.spinnerTemplate = function() {
        return $('<span class="spinner-wrap"><span class="spinner"></span></span>');
    }

    Collejo.templates.alertTemplate = function(type, message, duration) {
        return $('<div class="alert alert-' + type + ' ' + (duration !== false ? 'alert-dismissible' : '') + '" role="alert">' +
            (duration !== false ? '<button type="button" class="close" data-dismiss="alert" aria-label="Close">' +
                '<span aria-hidden="true">&times;</span></button>' : '') + message + '</div>');
    }

    Collejo.templates.alertWrap = function() {
        return $('<div id="alert-wrap"></div>');
    }

    Collejo.templates.alertContainer = function() {
        return $('<div class="alert-container"></div>');
    }

    Collejo.templates.ajaxLoader = function() {
        return null;
    }

    Collejo.alert = function(type, msg, duration) {
        var alertWrap = this.ui.templates.alertWrap;
        var alertContainer = this.ui.templates.alertContainer;

        alertWrap.css({
            position: 'fixed',
            top: 0,
            width: '100%',
            height: 0
        });

        alertContainer.css({
            width: '400px',
            margin: '0 auto'
        });

        alertWrap.append(alertContainer);
        var alert = this.ui.alertTemplate(type, msg, duration);

        if ($('#alert-wrap').length == 0) {
            $('body').append(alertWrap);
        }

        var alertContainer = $('#alert-wrap').find('.alert-container');

        if (duration === false) {
            alertContainer.empty();
        }

        alertContainer.append(alert);

        if (duration > 0) {
            window.setTimeout(function() {
                alert.fadeOut(function() {
                    alert.remove();
                });
            }, duration);
        }
    }

    Collejo.form.lock = function(form) {
        $(form).find('button[type="submit"]').attr('disabled', true).append(this.ui.spinnerTemplate());
    }

    Collejo.form.unlock = function(form) {
        $(form).find('button[type="submit"]').attr('disabled', false).find('.spinner-wrap').remove();
    }

    Collejo.link.ajax = function(link) {
        link.attr('disabled', true).append(collejo.spinnertpl());

        $.getJSON(link.attr('href'), function(response) {
            if (response.success) {
                if (link.data('target')) {
                    $('#' + link.data('target')).empty().append(response.data.html);
                } else {
                    link.replaceWith(response.data.html);
                }
            }
        });
    }

    Collejo.modal.open = function(link) {
        var id = link.data('modal-id') != null ? link.data('modal-id') : 'ajax-modal' + moment();
        var size = link.data('modal-size') != null ? ' modal-' + link.data('modal-size') + ' ' : '';

        var backdrop = link.data('modal-backdrop') != null ? link.data('modal-backdrop') : true;
        var keyboard = link.data('modal-keyboard') != null ? link.data('modal-keyboard') : true;

        var modal = $('<div id="' + id + '" class="modal fade loading" role="dialog" aria-labelledby="' + id + '" aria-hidden="true"><div class="modal-dialog' + size + '"></div></div>');

        var loader = this.templates.ajaxLoader;

        if (loader != null) {
            loader.appendTo(modal);
        }

        $('body').append(modal);

        modal.on('show.bs.modal', function() {
            $.ajax({
                url: link.attr('href'),
                type: 'get',
                success: function(response) {
                    if (response.success == undefined) {
                        modal.find('.modal-dialog').html(response);
                        modal.removeClass('loading');

                        if (loader != null) {
                            loader.remove();
                        }
                    }
                }
            });
        }).on('hidden.bs.modal', function() {
            $(this).remove();
        }).modal({
            backdrop: backdrop,
            keyboard: keyboard
        });
    }

    Collejo.modal.close = function(form) {
        $('body').find(form).closest('.modal').modal('hide').remove();
    }

    $(document).ajaxComplete(Collejo.core.ajaxComplete);

    $(document).on('click', '[data-toggle="ajax-link"]', function(e) {
        e.preventDefault();
        Collejo.link.ajax($(this));
    });

    $(document).on('click', '[data-toggle="ajax-modal"]', function(e) {
        e.preventDefault();
        Collejo.modal.open($(this));
    });

});

$.ajaxSetup({
    headers: {
        'X-CSRF-Token': $('meta[name="token"]').attr('content')
    }
});