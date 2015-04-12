@extends('layouts.main')

{{-- Remove slider --}}
@section('slider')
@overwrite

@section('main-content')
    <section id="content" class="container clearfix">
        @include('layouts.partial.sidebar')
        <section id="main" class="three-fourths column-last">
            <div>
                <blockquote class="speech-bubble">
                    <div class="quote-content">
                        <p>Phasellus eget orci eu enim dignissim commodo. Pellentesque sit amet sem diam, ut posuere ligula. Aliquam quis libero dapibus ante rhoncus eleifend quis vitae erat. Quisque vel nisi nibh. Suspendisse ipsum lorem, fringilla sed vulputate egestas, malesuada vitae nulla. Donec a nulla massa, eget dapibus libero. Phasellus varius, felis ac ullamcorper aliquet.</p>
                        <span class="quote-arrow"></span>
                    </div>
                    <div class="quote-meta"><strong>John Doe</strong>, Web Designer<br>
                        <span class="company">SmartBiz</span>
                    </div>
                </blockquote>
            </div>
            
            <div>
                <blockquote class="speech-bubble">
                    <div class="quote-content">
                        <p>Aenean commodo tincidunt congue. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Phasellus a eros sit amet dolor vehicula imperdiet. Integer mollis sagittis odio a adipiscing. Phasellus cursus accumsan adipiscing. Curabitur feugiat varius elit a malesuada. Nullam euismod arcu in ante.</p>
                        <span class="quote-arrow"></span>
                    </div>
                    <div class="quote-meta"><strong>Jane Doe</strong>, Web Developer<br>
                        <span class="company">CreativeBrains</span>
                    </div>
                </blockquote>
            </div>
            
            <div>
                <blockquote class="speech-bubble">
                    <div class="quote-content">
                        <p>Etiam sodales nisl ac mi mollis mollis. Suspendisse vel ipsum eget ligula tempor porta. Mauris ac tortor sapien. Suspendisse arcu ligula, porttitor quis ullamcorper eget, eleifend non elit. Nulla aliquam, diam sed feugiat vestibulum, purus mauris volutpat felis, eget dapibus sem turpis in ligula. Fusce pharetra mollis massa et eleifend.</p>
                        <span class="quote-arrow"></span>
                    </div>
                    <div class="quote-meta"><strong>John Doe</strong>, CEO<br>
                        <span class="company">BitVenture</span>
                    </div>
                </blockquote>
            </div>
            
            <div>
                <blockquote class="speech-bubble">
                    <div class="quote-content">
                        <p>Phasellus eget orci eu enim dignissim commodo. Pellentesque sit amet sem diam, ut posuere ligula. Aliquam quis libero dapibus ante rhoncus eleifend quis vitae erat. Quisque vel nisi nibh. Suspendisse ipsum lorem, fringilla sed vulputate egestas, malesuada vitae nulla. Donec a nulla massa, eget dapibus libero. Phasellus varius, felis ac ullamcorper aliquet.</p>
                        <span class="quote-arrow"></span>
                    </div>
                    <div class="quote-meta"><strong>John Doe</strong>, Web Designer<br>
                        <span class="company">SmartBiz</span>
                    </div>
                </blockquote>
            </div> 
            
            <div>
                <blockquote class="speech-bubble">
                    <div class="quote-content">
                        <p>Aenean commodo tincidunt congue. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Phasellus a eros sit amet dolor vehicula imperdiet. Integer mollis sagittis odio a adipiscing. Phasellus cursus accumsan adipiscing. Curabitur feugiat varius elit a malesuada. Nullam euismod arcu in ante.</p>
                        <span class="quote-arrow"></span>
                    </div>
                    <div class="quote-meta"><strong>Jane Doe</strong>, Web Developer<br>
                        <span class="company">CreativeBrains</span>
                    </div>
                </blockquote>
            </div>
            
            <div>
                <blockquote class="speech-bubble">
                    <div class="quote-content">
                        <p>Etiam sodales nisl ac mi mollis mollis. Suspendisse vel ipsum eget ligula tempor porta. Mauris ac tortor sapien. Suspendisse arcu ligula, porttitor quis ullamcorper eget, eleifend non elit. Nulla aliquam, diam sed feugiat vestibulum, purus mauris volutpat felis, eget dapibus sem turpis in ligula. Fusce pharetra mollis massa et eleifend.</p>
                        <span class="quote-arrow"></span>
                    </div>
                    <div class="quote-meta"><strong>John Doe</strong>, CEO<br>
                        <span class="company">BitVenture</span>
                    </div>
                </blockquote>
            </div>
        </section>
    </section>
    
@stop