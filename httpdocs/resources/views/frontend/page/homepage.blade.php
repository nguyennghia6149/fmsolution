@extends('layouts.main')

{{-- Remove Breakcumb --}}
@section('breakcumb')
@overwrite

@section('main-content')
    <section id="content" class="container clearfix">
        <!-- begin intro -->
        <section class="intro">
            <h1>Hi, we're <strong>Exquiso</strong>. We turn ideas into <strong>exquisite things</strong>.</h1>
        </section>
        <!-- end intro -->
        
        <hr>
        
        <!-- begin services -->
        <section>
            <div class="iconbox-wrap clearfix">
                <div class="one-fourth">
                    <div class="iconbox applications">
                        <a href="services.html#design">
                            <h3 class="iconbox-title"><span class="iconbox-icon"></span>Design</h3>
                            <p>Sed tincidunt imperdiet sollicitudin. Maecenas luctus ipsum ut ante interdum ornare in at tortor. Mauris eros metus, rhoncus vitae dictum.</p>
                        </a>
                    </div>
                </div>
                
                <div class="one-fourth">
                    <div class="iconbox cog">
                        <a href="services.html#development">
                            <h3 class="iconbox-title"><span class="iconbox-icon"></span>Development</h3>
                            <p>Aenean feugiat interdum ligula, eget facilisis nunc ornare eu. Etiam vestibulum ultricies hendrerit. Praesent porttitor leo a erat ornare dictum.</p>
                        </a>
                    </div>
                </div>
                
                <div class="one-fourth">
                    <div class="iconbox iphone">
                        <a href="services.html#mobile">
                            <h3 class="iconbox-title"><span class="iconbox-icon"></span>Mobile</h3>
                            <p>Donec tristique fermentum lectus, eu tincidunt lacus vestibulum non. Nam nibh velit, dapibus ac imperdiet vitae, pellentesque ac ante.</p>
                        </a>
                    </div>
                </div>
                
                <div class="one-fourth">
                    <div class="iconbox chemical">
                        <a href="services.html#strategy">
                            <h3 class="iconbox-title"><span class="iconbox-icon"></span>Strategy</h3>
                            <p>Mauris eros metus, rhoncus vitae dictum ac, viverra nec turpis. Donec quis lacinia arcu. Cum sociis natoque penatibus et magnis dis parturient.</p>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- end services -->
        
        <hr>
        
        <!-- begin latest posts -->
        <section class="one-half">
            <h3>Recent News</h3>
            <!-- begin post carousel -->
            <ul class="post-carousel">
                <!-- begin first column -->
                <li>
                    <div class="entry">
                        <div class="entry-date">
                            <div class="entry-day">15</div>
                            <div class="entry-month">Jan</div>   
                        </div>
                        <div class="entry-body">
                            <h4 class="entry-title"><a href="blog-post-image.html">Responsive Web Design Techniques, Tools and Strategies</a></h4>
                            <div class="entry-content">
                                <p>Aliquam quis libero dapibus ante rhoncus eleifend quis vitae erat. Quisque vel nisi nibh. Suspendisse ipsum lorem integer nec interdum massa. Sed ornare rutrum sem, vitae imperdiet risus ullamcorper &hellip;</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="entry">
                        <div class="entry-date">
                            <div class="entry-day">10</div>
                            <div class="entry-month">Dec</div>   
                        </div>
                        <div class="entry-body">
                            <h4 class="entry-title"><a href="blog-post-slider.html">Designing For Device Orientation: From Portrait To Landscape</a></h4>
                            <div class="entry-content">
                                <p>Phasellus varius, felis ac ullamcorper aliquet, justo nunc laoreet turpis, eget pharetra nulla arcu sed purus curabitur hendrerit bibendum erat, id sollicitudin arcu adipiscing eget. Nullam in nibh eget sapien &hellip;</p>
                            </div>
                        </div>
                    </div>
                </li>
                <!-- end first column -->
                
                <!-- begin second column -->
                <li>
                    <div class="entry">
                        <div class="entry-date">
                            <div class="entry-day">4</div>
                            <div class="entry-month">Oct</div>   
                        </div>
                        <div class="entry-body">
                            <h4 class="entry-title"><a href="blog-post-no-media.html">The Creative Way to Maximize Design Ideas with Type</a></h4>
                            <div class="entry-content">
                                <p>Phasellus varius, felis ac ullamcorper aliquet, justo nunc laoreet turpis, eget pharetra nulla arcu sed purus curabitur hendrerit bibendum erat, id sollicitudin arcu adipiscing eget. Nullam in nibh eget sapien &hellip;</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="entry">
                        <div class="entry-date">
                            <div class="entry-day">27</div>
                            <div class="entry-month">Nov</div>   
                        </div>
                        <div class="entry-body">
                            <h4 class="entry-title"><a href="blog-post-video.html">Useful Talks and Videos from Web Design Conferences</a></h4>
                            <div class="entry-content">
                                <p>Aliquam quis libero dapibus ante rhoncus eleifend quis vitae erat. Quisque vel nisi nibh. Suspendisse ipsum lorem integer nec interdum massa. Sed ornare rutrum sem, vitae imperdiet risus ullamcorper &hellip;</p>
                            </div>
                        </div>
                    </div>
                </li>
                <!-- end second column -->
            </ul>
            <!-- end post carousel -->
            
            <a class="button generic" href="blog.html">Learn More</a>
        </section>
        <!-- end latest posts -->
        
        <!-- begin testimonials -->
        <section class="one-half column-last">
            <h3>Client Testimonials</h3>
            <!-- begin testimonial carousel -->
            <ul class="testimonial-carousel">
                <li>
                    <blockquote class="speech-bubble">
                        <div class="quote-content">
                            <p>Phasellus vitae est purus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Sed eu nunc augue, placerat facilisis justo. Etiam at mauris convallis mauris feugiat blandit. Suspendisse potenti. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae. Mauris fermentum lacinia elit eu pulvinar. Nulla facilisi. Donec lacus mi, egestas ut mattis sed, lobortis quis ligula.</p>
                            <span class="quote-arrow"></span>
                        </div>
                        <div class="quote-meta"><strong>John Doe</strong>, Web Designer<br>
                            <span class="company">SmartBiz</span>
                        </div>
                    </blockquote>
                </li>
                <li>
                    <blockquote class="speech-bubble">
                        <div class="quote-content">
                            <p>Aenean cursus ultricies rhoncus. Morbi consectetur tortor eu leo fringilla eu suscipit felis fermentum. Sed hendrerit justo id est commodo ut fermentum elit semper. Integer sit amet felis odio, eu elementum nisl. Donec venenatis pretium nulla id ullamcorper. Morbi semper tincidunt sem non cursus. Quisque id ante ut massa cursus luctus. Quisque magna turpis, pellentesque eu feugiat id, posuere at ligula. Nam convallis auctor diam ac condimentum.</p>
                            <span class="quote-arrow"></span>
                        </div>
                        <div class="quote-meta"><strong>Jane Doe</strong>, Web Developer<br>
                            <span class="company">CreativeBrains</span>
                        </div>
                    </blockquote>
                </li>
                <li>
                    <blockquote class="speech-bubble">
                        <div class="quote-content">
                            <p>Etiam at mauris convallis mauris feugiat blandit. Suspendisse potenti. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Mauris fermentum lacinia elit eu pulvinar. Nulla facilisi. Donec lacus mi, egestas ut mattis sed, lobortis quis ligula. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae. Nam suscipit rutrum velit et adipiscing. Vestibulum consequat porta porta.</p>
                            <span class="quote-arrow"></span>
                        </div>
                        <div class="quote-meta"><strong>John Doe</strong>, CEO<br>
                            <span class="company">BitVenture</span>
                        </div>
                    </blockquote>
                </li>
            </ul>
            <!-- end testimonial carousel -->
            <a class="button generic" href="testimonials.html">Learn More</a>
        </section>
        <!-- end testimonials -->
        
        <hr>
        
        <!-- begin latest projects -->
        <section>
            <h3>Latest Projects</h3>
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
                    <a class="entry-image lightbox" rel="computer-room" href="/default/images/entries/full-size/computer-room.jpg" title="Project Title"><span class="overlay zoom"></span><img src="/default/images/entries/220x140/computer-room-220x140.png" alt=""></a>  
                    <a class="entry-image lightbox invisible" rel="computer-room" href="/default/images/entries/full-size/network.jpg" title="Project Title"><span class="overlay zoom"></span><img src="/default/images/entries/220x140/network-220x140.png" alt=""></a>
                    <a class="entry-image lightbox invisible" rel="computer-room" href="/default/images/entries/full-size/digital-tablet.jpg" title="Project Title"><span class="overlay zoom"></span><img src="/default/images/entries/220x140/digital-tablet-220x140.png" alt=""></a>
                    <a class="entry-meta" href="portfolio-item-slider.html">
                        <h4 class="entry-title">Computer Room</h4>
                        <div class="entry-content">
                            <p>Lightbox gallery</p>
                        </div>
                    </a>
                </li>
                <!-- begin row 2 -->
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
        <!-- end latest projects -->
        
        <hr>
        
        <!-- begin clients -->
        <section>
            <h3>Our Clients</h3>
            <div class="client-wrap">
                <ul class="clients clearfix">
                    <li><a href="#"><img src="/default/images/client-logos/themeforest.png" alt="ThemeForest" title="ThemeForest"></a></li>
                    <li><a href="#"><img src="/default/images/client-logos/photodune.png" alt="PhotoDune" title="PhotoDune"></a></li>
                    <li><a href="#"><img src="/default/images/client-logos/audiojungle.png" alt="AudioJungle" title="AudioJungle"></a></li>
                    <li><a href="#"><img src="/default/images/client-logos/codecanyon.png" alt="CodeCanyon" title="CodeCanyon"></a></li>
                    <li><a href="#"><img src="/default/images/client-logos/graphicriver.png" alt="GraphicRiver" title="GraphicRiver"></a></li>
                </ul>
            </div>
        </section>
        <!-- end clients -->   
    </section>
@stop
