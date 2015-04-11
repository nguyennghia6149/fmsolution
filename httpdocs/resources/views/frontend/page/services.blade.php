@extends('layouts.main')

{{-- Remove slider --}}
@section('slider')
@overwrite

@section('main-content')
    <!-- begin content -->
    <section id="content" class="container clearfix services">
        <!-- begin services -->
        <div class="iconbox-wrap clearfix">
            <div class="one-half service-box">
                <div id="design" class="iconbox applications">
                    <div class="wrapImg">
                        <img src="/default/images/fmsolution/industry5.jpg" alt="services1">
                    </div>
                    <h3 class="iconbox-title">Design</h3>
                    <p>Sed tincidunt imperdiet sollicitudin. Maecenas luctus ipsum ut ante interdum ornare in at tortor. Mauris eros metus, rhoncus vitae dictum.</p>
                </div>
            </div>
            <div class="one-half service-box">
                <div id="development" class="iconbox cog">
                    <div class="wrapImg">
                        <img src="/default/images/fmsolution/industry6.jpg" alt="services1">
                    </div>
                    <h3 class="iconbox-title">Development</h3>
                    <p>Aenean feugiat interdum ligula, eget facilisis nunc ornare eu. Etiam vestibulum ultricies hendrerit. Praesent porttitor leo a erat ornare dictum.</p>
                </div>
            </div>
            <div class="one-half service-box">
                <div id="mobile" class="iconbox iphone">
                    <div class="wrapImg">
                        <img src="/default/images/fmsolution/machine6.jpg" alt="services1">
                    </div>
                    <h3 class="iconbox-title">Mobile</h3>
                    <p>Donec tristique fermentum lectus, eu tincidunt lacus vestibulum non. Nam nibh velit, dapibus ac imperdiet vitae, pellentesque ac ante.</p>
                </div>
            </div>
            <div class="one-half service-box">
                <div id="strategy" class="iconbox chemical">
                    <div class="wrapImg">
                        <img src="/default/images/fmsolution/industry4.jpg" alt="services1">
                    </div>
                    <h3 class="iconbox-title">Strategy</h3>
                    <p>Mauris eros metus, rhoncus vitae dictum ac, viverra nec turpis. Donec quis lacinia arcu. Cum sociis natoque penatibus et magnis dis parturient.</p>
                </div>
            </div>
        </div>
        <!-- end services -->
    </section>
    <!-- end content -->
@stop
