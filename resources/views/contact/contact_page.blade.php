@extends('layouts.app')
@section('content')

@include('includes.header')

@include('includes.inner_page_title', ['page_title'=>__('Contact Us')])

<div class="inner-page"> 
    <!-- About -->
    <div class="container">
        <div class="contact-wrap">
            <div class="title"> <span>{{__('We Are Here For Your Help')}}</span>
                <h2>{{__('GET IN TOUCH FAST')}}</h2>
                <p>
                    {{__('Stay in the grand hall. Embrace the present with vigor. Thrive on the edge of opportunity')}}
                    <br>
                    {{__('Strive for the best outcomes.')}}
                </p>
            </div>            
                <!-- Contact Info -->
                <div class="contact-now">
				<div class="row"> 
                    <div class="col-lg-4">
                        <div class="contact"> <span><i class="fa fa-home"></i></span>
                            <div class="information"> <strong>{{__('Address')}}:</strong>
                                <p>66/C Hizbullah Street, Kankeyanodai - 13, Arayampathy 30150, Sri Lanka</p>
                            </div>
                        </div>
                    </div>
                    <!-- Contact Info -->
                    <div class="col-lg-4">
                        <div class="contact"> <span><i class="fa fa-envelope"></i></span>
                            <div class="information"> <strong>{{__('Email Address')}}:</strong>
                                <p><a href="mailto:hello@witsberry.com">hello@witsberry.com</a></p>
                            </div>
                        </div>
                    </div>
                    <!-- Contact Info -->
                    <div class="col-lg-4">
                        <div class="contact"> <span><i class="fa fa-phone"></i></span>
                            <div class="information"> <strong>{{__('Phone')}}:</strong>
                                <p><a href="tel:+94 652059927">+94 652059927</a></p>
                        </div>
                    </div>
                    <!-- Contact Info --> 
                </div>
					<div class="row"> 
                <div class="col-lg-4"> 
                    <!-- Google Map -->
                    <div class="googlemap">
                         {{-- <iframe src="https://maps.google.it/maps?q={{urlencode(strip_tags($siteSetting->site_google_map))}}&output=embed" allowfullscreen></iframe> --}}
                    </div>
                </div>
                <!-- Contact form -->
                <div class="col-lg-8">
                    <div class="contact-form">
                        <div id="message"></div>
                        <form method="post" action="{{ route('contact.us')}}" name="contactform" id="contactform">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-md-6{{ $errors->has('full_name') ? ' has-error' : '' }}">                  
                                    {!! Form::text('full_name', null, array('id'=>'full_name', 'placeholder'=>__('Full Name'), 'required'=>'required', 'autofocus'=>'autofocus')) !!}                
                                    @if ($errors->has('full_name')) <span class="help-block"> <strong>{{ $errors->first('full_name') }}</strong> </span> @endif
                                </div>
                                <div class="col-md-6{{ $errors->has('email') ? ' has-error' : '' }}">                  
                                    {!! Form::text('email', null, array('id'=>'email', 'placeholder'=>__('Email'), 'required'=>'required')) !!}                
                                    @if ($errors->has('email')) <span class="help-block"> <strong>{{ $errors->first('email') }}</strong> </span> @endif
                                </div>
                                <div class="col-md-6{{ $errors->has('phone') ? ' has-error' : '' }}">                  
                                    {!! Form::text('phone', null, array('id'=>'phone', 'placeholder'=>__('Phone'))) !!}                
                                    @if ($errors->has('phone')) <span class="help-block"> <strong>{{ $errors->first('phone') }}</strong> </span> @endif
                                </div>
                                <div class="col-md-6{{ $errors->has('subject') ? ' has-error' : '' }}">                  
                                    {!! Form::text('subject', null, array('id'=>'subject', 'placeholder'=>__('Subject'), 'required'=>'required')) !!}                
                                    @if ($errors->has('subject')) <span class="help-block"> <strong>{{ $errors->first('subject') }}</strong> </span> @endif
                                </div>
                                <div class="col-md-12{{ $errors->has('message_txt') ? ' has-error' : '' }}">                  
                                    {!! Form::textarea('message_txt', null, array('id'=>'message_txt', 'placeholder'=>__('Message'), 'required'=>'required')) !!}                
                                    @if ($errors->has('message_txt')) <span class="help-block"> <strong>{{ $errors->first('message_txt') }}</strong> </span> @endif
                                </div>

                                <div class="col-md-12">
                                    <button title="" class="button" type="submit" id="submit">{{__('Submit Now')}}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
					 </div>
        </div>
    </div>
</div>
@include('includes.footer')
@endsection