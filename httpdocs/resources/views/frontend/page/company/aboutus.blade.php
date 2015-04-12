@extends('layouts.main')

{{-- Remove slider --}}
@section('slider')
@overwrite

@section('main-content')
    <section id="content" class="container clearfix">
        @include('layouts.partial.sidebar')
        <section id="main" class="three-fourths column-last">
            <!-- begin our company -->
            <section>
                <h2>Our Company</h2>
                <div>
                    <div id="slider-about-us" class="about-us entry-slider">
                        <div id="flexslider-about-us" class="flex-container">
                            <div class="flexslider">
                                <ul class="slides">
                                    <li>
                                        <img src="/default/images/entries/full-size/business-woman.jpg" alt="Our Company" title="Our Company">
                                    </li>
                                    <li>
                                        <img src="/default/images/entries/full-size/business-development.jpg" alt="Our Team" title="Our Team">
                                    </li>
                                    <li>
                                        <iframe src="http://player.vimeo.com/video/34750078?title=0&amp;byline=0&amp;portrait=0&amp;badge=0&amp;color=ffffff&amp;api=1" width="448" height="252" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
                                    </li>    
                                </ul>
                            </div>
                        </div>
                    </div>  
                </div>
                <div>
                    <p> Mauris in leo sed mauris convallis ornare vel ut lectus. Phasellus sollicitudin, nisi non vestibulum consequat, libero ante luctus justo, sit amet pharetra lacus odio quis libero. In nunc libero, mattis sed rutrum eget, placerat in enim. Pellentesque bibendum, arcu non pulvinar dignissim, est felis blandit sem, a sodales sapien risus nec odio. Fusce quis leo in ipsum commodo faucibus. Fusce ultrices erat ut ante adipiscing a cursus odio ultrices. Nullam nisi erat, adipiscing consectetur varius eu, dictum in enim. In vestibulum consequat purus.</p>
                    <p>In non dui nunc, a molestie nisi. Suspendisse leo risus, commodo sed tempus quis, posuere ut sem. Nulla ac massa tortor, nec blandit dolor. Nulla porttitor rhoncus venenatis. Quisque adipiscing posuere lectus, et laoreet lacus sagittis nec. In hac habitasse platea dictumst. Ut ac elementum turpis. Curabitur rhoncus fermentum consequat. Aenean egestas placerat elit id cursus. Vestibulum sed luctus augue. Praesent sem nisl, bibendum sit amet facilisis at, commodo eu justo. In hac habitasse platea dictumst. Ut ullamcorper mattis nibh, in facilisis metus pellentesque eget.</p>
                </div>
                <div class="clear"></div>
            </section>
            <!-- begin our company -->
        </section>
    </section>
    
@stop