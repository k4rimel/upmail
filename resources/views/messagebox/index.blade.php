@extends('layout')

@section('content')
<div class="row">
				<h2 class="headline hide-on-small-only">Send whatever you want to your mailbox anywhere, at any time. No registration. No hassle.</h2>
</div>
<div class="row">
	<form action="{{ route('message.upload') }}" class="main-form" method="post" enctype="multipart/form-data">
		<div class="inner-form-wrapper z-depth-5 col l6 offset-l3 m10 offset-m1 s12">
          	<div class="switch col s12 m10 offset-m1 l8 offset-l2 form-row">
          	</div>
       <!--    	<div class="switch col s12 m10 offset-m1 l6 offset-l3 form-row">
          	  <label id="main-radio-button">
          	    Send Email
          	    <input type="checkbox" class="getset-switch">
          	    <span class="lever"></span>
          	    Get Data
          	  </label>
          	</div> -->
	        <div class="input-field col s12 m10 offset-m1 l8  offset-l2 form-row">
	          	<i class="mdi-communication-email prefix"></i>
	          	<input id="icon_prefix" type="email" class="validate" name="mail" required>
          		
	          <label for="icon_prefix">Email</label>
	        </div>
	        <div class="email-data">
		        <div class="input-field col s12 m10 offset-m1 l8  offset-l2 form-row">
	          		<textarea id="textarea1" name="message" class="materialize-textarea"></textarea>
                	<label for="textarea1">Message</label>
	        	</div>
	        	
	        	<div class="file-field input-field col s12 m10 offset-m1 l8  offset-l2 form-row">
        	      <input class="file-path validate" type="text"/>
        	      <div class="btn grey">
        	        <span>File</span>
        	        <input name="files[]" type="file"/>
        	      </div>
        	    </div>
				<div class="col s12 m10 offset-m1 l8  offset-l2 form-row hidden">
	        	    <div class="progress grey lighten-5">
	        	          <div class="determinate" style="width: 70%"></div>
        	      	</div>
	      		</div>
	        </div>
    	 	<div class="col s12 m10 offset-m1 l8  offset-l2 form-row">
    	 		<button class="btn waves-effect waves-light btn-large btn-send-email light-blue accent-3" type="submit" name="action">Submit
        	        <i class="mdi-content-send right"></i>
    	      	</button>
	      	</div>
      	</div>
		</form>
	</div>
@stop