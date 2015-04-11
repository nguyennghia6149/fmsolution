@extends('layouts.main')

{{-- Remove slider --}}
@section('slider')
@overwrite

@section('main-content')
	<section id="content" class="container clearfix">
		<!-- begin main content -->
	    <section id="main" class="blog-entry-list three-fourths">
	    
	        <article class="entry clearfix">
	        	<a class="entry-image lightbox" href="/default/images/entries/full-size/modern-skyscraper.jpg" title="Post Title"><span class="overlay zoom"></span><img src="/default/images/entries/700x240/modern-skyscraper-700x240.png" alt=""></a>
	        	<div class="entry-date">
	                <div class="entry-day">15</div>
	                <div class="entry-month">Jan</div>   
	            </div>
	            <div class="entry-body">
	                <h2 class="entry-title">Responsive Web Design Techniques, Tools and Strategies</h2>
	                <div class="entry-meta">
	                	<span class="author"><a href="#">admin</a></span> 
	                    <span class="category"><a href="#">Photography</a>, <a href="#">Web Design</a></span>
	                    <span class="comments"><a href="#">4 Comments</a></span>
	                </div>
	                <div class="entry-content">
	                    <p>Aliquam quis libero dapibus ante rhoncus eleifend quis vitae erat. Quisque vel nisi nibh. Suspendisse ipsum lorem integer nec interdum massa. Sed ornare rutrum sem, vitae imperdiet risus ullamcorper non. Aliquam adipiscing iaculis lorem, luctus semper diam dignissim vitae. Phasellus vel enim vel purus vehicula sollicitudin. In hac habitasse platea dictumst. Aliquam lacinia euismod odio id pulvinar. Quisque sagittis malesuada lectus, bibendum tristique integer nec interdum massa. Sed ornare rutrum sem, vitae imperdiet risus ullamcorper non.</p>
	                    <blockquote class="simple">
	                        <div class="quote-content">
	                            <p>Integer nec interdum massa. Sed ornare rutrum sem, vitae imperdiet risus ullamcorper non. Aliquam adipiscing iaculis lorem, luctus semper diam dignissim vitae. Phasellus vel enim vel purus vehicula sollicitudin. In hac habitasse platea dictumst. Aliquam lacinia euismod odio id pulvinar. Quisque sagittis malesuada lectus, bibendum tristique turpis aliquam sed. Vivamus id volutpat metus. Praesent ac arcu purus, id commodo odio.</p>
	                        </div>	
	                        <div class="quote-meta">&mdash; Author</div>
	                    </blockquote>
	                    <p>Curabitur hendrerit bibendum erat, id sollicitudin arcu adipiscing eget. Nullam in nibh eget sapien placerat tincidunt nec ac dui. Ut lobortis, felis vel congue viverra, dui eros auctor lectus, sed sodales massa leo id sapien. Quisque nec tristique augue. Duis ut neque vitae velit rutrum gravida. Sed vel turpis nunc, non scelerisque nisi. Nulla id eros pretium neque condimentum laoreet.</p>
	                    <ol class="decimal indent">
	                        <li>Proin eleifend fermentum elit</li>
	                        <li>Vivamus cursus porta purus</li>
	                        <li>Proin at sagittis dolor</li>
	                        <li>Donec eu justo diam</li>
	                    </ol>
	                    <p>Fusce iaculis, lacus et consectetur condimentum, lorem erat vestibulum metus, vitae euismod odio risus et ipsum. Pellentesque nunc justo, mattis et sollicitudin non, malesuada quis est. Etiam gravida ultrices ipsum quis eleifend. Cras tristique lectus ut libero dictum semper. Nullam mauris lacus, convallis non ornare sit amet, pellentesque sit amet ante. Nulla accumsan adipiscing ultrices. Ut ac magna nec justo dapibus suscipit quis vel sapien. Donec in arcu tellus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer egestas augue non quam vehicula dictum. Nam orci eros, placerat laoreet pharetra lacinia, tempus ut odio. Pellentesque hendrerit risus eu libero sodales.</p>
	                </div>
	            </div>
	        </article>
	        
	        <hr>
	        
	        <section>
	        	<h3>Tags</h3>
	        	<ul class="tags clearfix">
	                <li><a href="#">HTML/CSS</a></li>
	                <li><a href="#">Photography</a></li>
	                <li><a href="#">Photoshop</a></li>
	                <li><a href="#">Web Design</a></li>
	            </ul>	
	        </section>
	        
	        <hr>
	        
	        <section>
	        	<h3>Related Posts</h3>
	            <ul class="square indent">
	                <li><a href="blog-post-slider.html">Designing For Device Orientation: From Portrait To Landscape</a></li>
	                <li><a href="blog-post-video.html">Useful Talks and Videos from Web Design Conferences</a></li>
	                <li><a href="blog-post-no-media.html">The Creative Way to Maximize Design Ideas with Type</a></li>
	            </ul>
	        </section>
		</section>
	</section>
@stop
