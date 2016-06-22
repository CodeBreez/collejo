@extends('collejo::layouts.dash')

@section('title', 'New Student')

@section('content')

<section class="section">

<h2>New Student</h2>

<div class="row">
	
    <div class="col-xs-2">
      	<ul class="nav nav-tabs tabs-left">
        	<li class="active"><a href="#">Home</a></li>
            <li><a href="#profile-v">Profile</a></li>
            <li><a href="#messages-v">Messages</a></li>
            <li><a href="#settings-v">Settings</a></li>
      	</ul>
    </div>

    <div class="col-xs-10">
      	<div class="tab-content">
            <div class="tab-pane">Home Tab.</div>
      	</div>
    </div>

</div>

</section>

@endsection