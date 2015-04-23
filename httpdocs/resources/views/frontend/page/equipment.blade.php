@extends('layouts.main')

{{-- Remove slider --}}
@section('slider')
@overwrite

@section('main-content')
    <section id="content" class="container clearfix">
    	
        <!-- begin project -->
        <section>
            <!-- begin project media -->
            <div class="three-fourths">
            	<!-- begin entry slider -->
                <div class="entry-slider">
                    <div id="flexslider-portfolio-item" class="flex-container">
                        <div class="flexslider">
                            <ul class="slides">
                                <li><a class="lightbox" rel="computer-room" href="/default/images/entries/full-size/computer-room.jpg" title="Image Title"><span class="overlay zoom"></span><img src="/default/images/entries/700x445/computer-room-700x445.png" alt=""></a></li>
                    			<li><a class="lightbox" rel="computer-room" href="/default/images/entries/full-size/network.jpg" title="Image Title"><span class="overlay zoom"></span><img src="/default/images/entries/700x445/network-700x445.png" alt=""></a></li>
                    			<li><a class="lightbox" rel="computer-room" href="/default/images/entries/full-size/digital-tablet.jpg" title="Image Title"><span class="overlay zoom"></span><img src="/default/images/entries/700x445/digital-tablet-700x445.png" alt=""></a></li>
                            </ul>
                        </div>
                    </div>
                </div>	
                <!-- end entry slider -->
            </div>
            <!-- end project media -->
            
            <!-- begin project description -->
            <div class="one-fourth column-last">
                <h3>Overview</h3>
                <p>Pellentesque quis consectetur massa. Etiam quis dolor nisi, posuere suscipit justo. Aliquam erat volutpat. Phasellus mattis libero et orci elementum.</p>
                
                <h3>Customer</h3>
                <p>&mdash; SmartBiz</p>
                
                <h3>Year</h3>
                <p>&mdash; 2013</p>
                
                <h3>Technology</h3>
                <ul class="check">
                    <li>User Interface Design</li>
                    <li>HTML/CSS</li>
                    <li>Programming</li>
                </ul>
                <a href="#" class="button">Visit Website</a>
            </div>
            <!-- end project description -->
            <div class="clear"></div>
        </section>
        <!-- end project -->
    </section>
@stop
