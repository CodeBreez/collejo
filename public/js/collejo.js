var collejo = {
    spinnertpl: function() {
        return $('<span class="spinner-wrap"><span class="spinner"></span></span>');
    },
    msgtpl: function(type, msg, duration) {
        return $('<div class="alert alert-' + type + ' ' + (duration !== false ? 'alert-dismissible' : '') + '" role="alert">' +
            (duration !== false ? '<button type="button" class="close" data-dismiss="alert" aria-label="Close">' +
                '<span aria-hidden="true">&times;</span></button>' : '') + msg + '</div>');
    },
    msg: function(type, msg, duration) {
        var alertWrap = $('<div id="alert-wrap"></div>');
        var alertContainer = $('<div class="alert-container"></div>');

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
        var alert = this.msgtpl(type, msg, duration);

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
    },
    lockForm: function(form) {
        $(form).find('button[type="submit"]').attr('disabled', true).append(collejo.spinnertpl());
    },
    unlockForm: function(form) {
        $(form).find('button[type="submit"]').attr('disabled', false).find('.spinner-wrap').remove();
    }
}

$.ajaxSetup({
    headers: {
        'X-CSRF-Token': $('meta[name="token"]').attr('content')
    }
});

$(document).ajaxComplete(function(event, xhr, settings) {

    var code, status, timeout, response = 0;

    try {
        response = $.parseJSON(xhr.responseText);
    } catch (e) {
        console.log(e)
    }

    status = (response == 0) ? xhr.status : response;

    if (status == 403 || status == 401) {
        collejo.msg('danger', 'You are not authorized to perform this action', 1000);
    }

    if (status != 0 && status != null) {
        var code = status.code != undefined ? status.code : 0;
        if (code == 0) {
            if (response.data != undefined && response.data.redir != undefined) {
                if (response.message != null) {
                    collejo.msg(response.success ? 'success' : 'warning', response.message + '. redirecting&hellip;', 1000);
                    timeout = 0;
                }
                setTimeout(function() {
                    window.location = response.data.redir;
                }, timeout);
            }

            if (response.message != undefined && response.message != null && response.message.length > 0 && response.data.redir == undefined) {
                collejo.msg(response.success ? 'success' : 'warning', response.message, 3000);
            }

            if (response.data != undefined && response.data.errors != undefined) {
                var msg = '<strong>Validation failed</strong> Please correct them and try again <br/>';
                $.each(response.data.errors, function(field, err) {
                    $.each(err, function(i, e) {
                        msg = msg + e + '<br/>';
                    });
                });

                collejo.msg('warning', msg, 5000);
            }
        }
    }

    $(window).resize();
});

$(document).on('click', '.c-ajaxlink', function(e) {
    e.preventDefault();

    var link = $(this);
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
});