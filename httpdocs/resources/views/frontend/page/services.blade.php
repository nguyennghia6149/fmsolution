@extends('layouts.main')

{{-- Remove slider --}}
@section('slider')
@overwrite

@section('main-content')
    <section id="content" class="container clearfix">
    	<!-- begin images -->
        <section>
            <h2>Images</h2>
            <div class="one-fourth">
                <h3>Simple</h3>
                <div class="entry-image">
                    <img src="/default/images/entries/220x140/digital-tablet-220x140.png" alt="" title="Image Title">
                </div>
            </div>
            
            <div class="one-fourth">
                <h3>With Caption</h3>
                <div class="caption">
                    <div class="entry-image"><img src="/default/images/entries/220x140/business-development-220x140.png" alt="" title="Image Title"></div>
                    <p class="caption-text">Caption Text</p>
                </div>
            </div>
            
            <div class="one-fourth">
                <h3>With Lightbox</h3>
                <a class="entry-image lightbox" href="/default/images/entries/full-size/modern-skyscraper.jpg" title="Image Title"><span class="overlay zoom"></span><img src="/default/images/entries/220x140/modern-skyscraper-220x140.png" alt=""></a>
            </div>
            
            <div class="one-fourth column-last">
                <h3>With Lightbox Gallery</h3>
                <div>
                    <a class="entry-image lightbox" rel="computer-room" href="/default/images/entries/full-size/computer-room.jpg" title="Project Title"><span class="overlay zoom"></span><img src="/default/images/entries/220x140/computer-room-220x140.png" alt=""></a>  
                    <a class="entry-image lightbox invisible" rel="computer-room" href="/default/images/entries/full-size/network.jpg" title="Project Title"><span class="overlay zoom"></span><img src="/default/images/entries/220x140/network-220x140.png" alt=""></a>
                    <a class="entry-image lightbox invisible" rel="computer-room" href="/default/images/entries/full-size/digital-tablet.jpg" title="Project Title"><span class="overlay zoom"></span><img src="/default/images/entries/220x140/digital-tablet-220x140.png" alt=""></a>
                </div>
            </div>
            <div class="clear"></div>
       
            <h3>Left-Aligned</h3>
            <div class="entry-image float-left"><img src="/default/images/entries/220x140/business-woman-220x140.png" alt="" title="Image Title"></div>
            <p>Vestibulum quis diam purus. Nulla id enim vel quam lacinia elementum. Phasellus a hendrerit enim. Suspendisse lacinia nulla lacinia tellus convallis non luctus tortor iaculis. Nam cursus augue sed lectus consequat non laoreet nulla sodales. Nunc sagittis sapien at urna mollis in porta sem mattis. Duis venenatis odio erat. Nullam nec commodo risus. Integer arcu eros, luctus in suscipit at, blandit in lectus. Quisque justo lorem, vulputate quis fermentum ac, cursus non leo.</p>
            <p>Fusce est eros, facilisis at sodales elementum, mollis eget erat. Vivamus vitae augue dolor, non accumsan ligula. Cras sed risus sed dolor scelerisque tempor. Duis vel lacus massa, sed vulputate sapien. Aenean at ligula risus. Quisque eget quam tellus. Sed tellus est, viverra eu feugiat ac, placerat nec tortor. Proin sodales nisi nec dolor aliquet id ornare odio eleifend. Pellentesque sem magna, rhoncus in sodales eget, tincidunt nec ante. Etiam ultricies pretium libero interdum accumsan. Proin facilisis tristique diam, eget consequat nunc euismod at. Quisque suscipit, justo id faucibus sollicitudin, purus lectus placerat massa, id euismod enim nibh faucibus nisi. In commodo lectus nec lorem eleifend pulvinar. Proin egestas condimentum est, ut dapibus urna mollis id.</p>
            
            <h3>Right-Aligned</h3>
            <div class="entry-image float-right"><img src="/default/images/entries/220x140/network-220x140.png" alt="" title="Image Title"></div>
            <p>Vestibulum quis diam purus. Nulla id enim vel quam lacinia elementum. Phasellus a hendrerit enim. Suspendisse lacinia nulla lacinia tellus convallis non luctus tortor iaculis. Nam cursus augue sed lectus consequat non laoreet nulla sodales. Nunc sagittis sapien at urna mollis in porta sem mattis. Duis venenatis odio erat. Nullam nec commodo risus. Integer arcu eros, luctus in suscipit at, blandit in lectus. Quisque justo lorem, vulputate quis fermentum ac, cursus non leo.</p>
            <p>Fusce est eros, facilisis at sodales elementum, mollis eget erat. Vivamus vitae augue dolor, non accumsan ligula. Cras sed risus sed dolor scelerisque tempor. Duis vel lacus massa, sed vulputate sapien. Aenean at ligula risus. Quisque eget quam tellus. Sed tellus est, viverra eu feugiat ac, placerat nec tortor. Proin sodales nisi nec dolor aliquet id ornare odio eleifend. Pellentesque sem magna, rhoncus in sodales eget, tincidunt nec ante. Etiam ultricies pretium libero interdum accumsan. Proin facilisis tristique diam, eget consequat nunc euismod at. Quisque suscipit, justo id faucibus sollicitudin, purus lectus placerat massa, id euismod enim nibh faucibus nisi. In commodo lectus nec lorem eleifend pulvinar. Proin egestas condimentum est, ut dapibus urna mollis id.</p>
        </section>
        <!-- end images -->	
        
        <hr>
        
        <!-- begin video -->
        <section>
            <h2>Video</h2>
            <div class="one-half">
            	<h3>Vimeo</h3>
                <div class="entry-video">
            		<iframe src="http://player.vimeo.com/video/7809605?title=0&amp;byline=0&amp;portrait=0&amp;badge=0&amp;color=ffffff" width="460" height="259" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
                </div>
            </div>
            <div class="one-half column-last">
            	<h3>YouTube</h3>
                <div class="entry-video">
                	<iframe width="460" height="259" src="http://www.youtube.com/embed/LzTMRjufvqk?rel=0" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
            <div class="clear"></div>
        </section>
        <!-- end video -->
    </section>
@stop
