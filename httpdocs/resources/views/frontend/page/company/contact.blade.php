@extends('layouts.main')

{{-- Remove slider --}}
@section('slider')
@overwrite

@section('main-content')
    <section id="content" class="container clearfix">
        
        @include('layouts.partial.sidebar')
        
        <section id="main" class="three-fourths column-last">
            <section class="three-fourths">
                <p>We would be glad to have feedback from you. Drop us a line, whether it is a comment, a question, a work proposition or just a hello. You can use either the form below or the contact details on the right.</p>
                <div id="contact-notification-box-success" class="notification-box notification-box-success" style="display: none;">
                    <p>Your message has been successfully sent. We will get back to you as soon as possible.</p>
                    <a href="#" class="notification-close notification-close-success">x</a>
                </div>
                
                <div id="contact-notification-box-error" class="notification-box notification-box-error " style="display: none;">
                    <p>Your message couldn't be sent because a server error occurred. Please try again.</p>
                    <a href="#" class="notification-close notification-close-error">x</a>
                </div>
                <form id="contact-form" class="content-form" method="post" action="#">
                    <p>
                        <label for="name">Name:<span class="note">*</span></label>
                        <input id="name" type="text" name="name" class="required">
                    </p>
                    <p>
                        <label for="email">Email:<span class="note">*</span></label>
                        <input id="email" type="email" name="email" class="required">
                    </p>
                    <p>
                        <label for="url">Website:</label>
                        <input id="url" type="url" name="url">
                    </p>
                    <p>
                        <label for="subject">Subject:<span class="note">*</span></label>
                        <input id="subject" type="text" name="subject" class="required">
                    </p>
                    <p>
                        <label for="message">Message:<span class="note">*</span></label>
                        <textarea id="message" cols="68" rows="8" name="message" class="required"></textarea>
                    </p>
                    <p>
                        <input id="submit" class="button" type="submit" name="submit" value="Send Message">
                    </p>
                </form>
                <p><span class="note">*</span> Required fields</p>
            </section>

            <!-- begin google map --> 
            <section>
                <div id="map"
                    data-address="40 Broadway, London"
                    data-zoom="17"
                    style="width: 100%; height: 400px;">
                </div>
            </section>
            <!-- end google map -->
        </section>
    </section>
    
@stop