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
        
        <hr>
        
        <!-- begin related projects -->
        <section>
            <h2>Related Projects</h2> 
            <!-- begin project carousel -->
            <ul class="project-carousel project-list">
            	<!-- begin row 1 -->
                <li class="entry">
                    <a class="entry-image lightbox" href="/default/images/entries/full-size/digital-tablet.jpg" title="Project Title"><span class="overlay zoom"></span><img src="/default/images/entries/220x140/digital-tablet-220x140.png" alt=""></a>
                    <a class="entry-meta" href="portfolio-item-image.html">
                        <h4 class="entry-title">Digital Tablet</h4>
                        <div class="entry-content">
                            <p>Image with lightbox</p>
                        </div>
                    </a>
                </li>
                
                <li class="entry">
                    <a class="entry-image lightbox" rel="business-development" href="/default/images/entries/full-size/business-development.jpg" title="Project Title"><span class="overlay zoom"></span><img src="/default/images/entries/220x140/business-development-220x140.png" alt=""></a>
                    <a class="entry-image lightbox invisible" rel="business-development" href="/default/images/entries/full-size/digital-tablet.jpg" title="Project Title"><span class="overlay zoom"></span><img src="/default/images/entries/220x140/digital-tablet-220x140.png" alt=""></a>
                    <a class="entry-image lightbox invisible" rel="business-development" href="/default/images/entries/full-size/computer-room.jpg" title="Project Title"><span class="overlay zoom"></span><img src="/default/images/entries/220x140/computer-room-220x140.png" alt=""></a>
                    <a class="entry-meta" href="portfolio-item-slider.html">
                        <h4 class="entry-title">Business Development</h4>
                        <div class="entry-content">
                            <p>Lightbox gallery</p>
                        </div>
                    </a>
                </li>
                
                <li class="entry">
                    <a class="entry-image lightbox" href="/default/images/entries/full-size/modern-skyscraper.jpg" title="Project Title"><span class="overlay zoom"></span><img src="/default/images/entries/220x140/modern-skyscraper-220x140.png" alt=""></a>
                    <a class="entry-meta" href="portfolio-item-image.html">
                        <h4 class="entry-title">Modern Skyscraper</h4>
                        <div class="entry-content">
                            <p>Image with lightbox</p>
                        </div>
                    </a>
                </li>
                
                <li class="entry">
                    <a class="entry-image lightbox" href="/default/images/entries/full-size/network.jpg" title="Project Title"><span class="overlay zoom"></span><img src="/default/images/entries/220x140/network-220x140.png" alt=""></a>
                    <a class="entry-meta" href="portfolio-item-image.html">
                        <h4 class="entry-title">Network</h4>
                        <div class="entry-content">
                            <p>Image with lightbox</p>
                        </div>
                    </a>
                </li>
                
                <li class="entry">
                    <a class="entry-image lightbox-video" href="http://player.vimeo.com/video/7809605?title=0&amp;byline=0&amp;portrait=0" title="Project Title"><span class="overlay zoom"></span><img src="/default/images/entries/220x140/the-third-and-the-seventh-220x140.png" alt=""></a>
                    <a class="entry-meta" href="portfolio-item-video.html">
                        <h4 class="entry-title">The Third &amp; the Seventh</h4>
                        <div class="entry-content">
                            <p>Video with lightbox (Vimeo)</p>
                        </div>
                    </a>
                </li>
                
                <li class="entry">
                    <a class="entry-image lightbox-video" href="http://www.youtube.com/embed/LzTMRjufvqk?autoplay=0" title="Project Title"><span class="overlay zoom"></span><img src="/default/images/entries/220x140/we-feed-the-network-220x140.png" alt=""></a>
                    <a class="entry-meta" href="portfolio-item-video.html">
                        <h4 class="entry-title">We Feed the Network</h4>
                        <div class="entry-content">
                            <p>Video with lightbox (YouTube)</p>
                        </div>
                    </a>
                </li>
            </ul>
            <!-- end project carousel -->
        </section>
        <!-- end related projects -->
    </section>
@stop
