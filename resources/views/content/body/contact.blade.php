@extends('content.layout')


	@section('body_left')
		
	<section  class="section pb-1" >

 

    <div class="row">

        <!--Grid column-->
        <div class="col-lg-12 mb-4">
        @if ($errors->any())
        	<ul class="alert alert-danger">
        		@foreach ($errors->all() as $error)
        			<li>{{ $error }}</li>
        		@endforeach
        	</ul>
        @endif

            <!--Form with header-->
            <div style="background:rgba(229, 228, 226,0.8);border-radius: 10px">

                <div class="card-body">
                    <!--Header-->
                   
                    <!--Body-->
                    <div  style="padding-left: 10%;padding-right: 10%;">
                    <p style="margin-top: 2%">Pour plus d'informations ,Veuillez nous contacter</p>
                    <br>
                    	@include('emails.flash')
                    	<form action="contact" method="POST" >
                    	{{ csrf_field() }}
		                    <div class="md-form">
		                        <i class="fa fa-user prefix blue-text"></i>
		                        <input type="text" id="nom" name="nom" class="form-control" placeholder="Votre nom" required="true" value="{{ old('nom') }}">
		                        
		                    </div>

		                    <div class="md-form">
		                        <i class="fa fa-envelope prefix "></i>
		                        <input type="text" id="email" name="email" class="form-control"  placeholder="Votre email" required="true" value="{{ old('email') }}">
		                       
		                    </div>

		                    <div class="md-form">
		                        <i class="fa fa-tag prefix "></i>
		                        <input type="text" id="sujet" name="sujet"  class="form-control" placeholder="Sujet" required="true" value="{{ old('sujet') }}">
		                       
		                    </div>

		                    <div class="md-form">
		                        <i class="fa fa-pencil prefix "></i>
		                        <textarea type="text" id="message" name="message" class="md-textarea" placeholder="Message" required="true" minlength="10" value="{{ old('message') }}" style="height: 150px">{{ old('message') }}</textarea>
		                       
		                    </div>

		                    <div class="text-center">
		                    	<input type="submit" name="submit" value="Envoyer" class="btn btn-primary">

		                    </div>
	                    </form>
                    </div>
                </div>
            </div>
            <!--Form with header-->
        </div>
        <!--Grid column-->
    </div>

	<div class="row" style="margin-top: -7%;margin-bottom: -10%">
		 <!--Grid column-->
	        <div id="contact" class="col-lg-12" style="height:400px">

	            <!--Google map-->
	            <div id="map-container" class="z-depth-1-half map-container" style="height: 100%"> ></div>

	           
	        </div>
	       <!--Grid column-->


	</div>
 
  </section>


  		<script src="https://maps.google.com/maps/api/js?key=AIzaSyCNA9i-UiBgupiKDRWq0KHZSecesXzFig0"></script>
   	<script src="js/google_map_marker.js"></script> 
	<!--Section: Contact v.1-->
		@stop
	
 	 
