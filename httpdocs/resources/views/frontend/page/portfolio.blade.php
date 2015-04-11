@extends('layouts.main')

{{-- Remove slider --}}
@section('slider')
@overwrite

@section('main-content')
    <!-- begin content -->
    <section id="content" class="container clearfix">
 
        <!-- begin clients -->
        <section>
            <h2>Our Clients</h2>
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

        <hr>
        <section>
            <h2>Our Team</h2>
            
            <div class="team-member one-fourth">
                <img class="photo" src="/default/images/team/team-member-1.png" alt="Team Member">
                <div class="content">
                    <h3 class="name">John Doe</h3>
                    <span class="job-title">Director and Founder</span>
                    <ul class="social-links">
                        <li class="twitter"><a href="#" title="Twitter" target="_blank">Twitter</a></li>
                        <li class="facebook"><a href="#" title="Facebook" target="_blank">Facebook</a></li>
                        <li class="google-plus"><a href="#" title="Google+" target="_blank">Google+</a></li>
                        <li class="linkedin"><a href="#" title="LinkedIn" target="_blank">LinkedIn</a></li>
                        <li class="skype"><a href="#" title="Skype" target="_blank">Skype</a></li>
                        <li class="mail"><a href="#" title="Mail" target="_blank">Mail</a></li>
                    </ul>
                    <p>Cras pellentesque suscipit iaculis. Nulla lobortis, risus sed consequat pretium, ligula tellus luctus ipsum, non egestas elit enim et orci. Sed blandit ligula.</p>
                </div>
            </div>
            
            <div class="team-member one-fourth">
                <img class="photo" src="/default/images/team/team-member-2.png" alt="Team Member">
                <div class="content">
                    <h3 class="name">Jane Doe</h3>
                    <span class="job-title">Web Designer</span>
                    <ul class="social-links">
                        <li class="twitter"><a href="#" title="Twitter" target="_blank">Twitter</a></li>
                        <li class="facebook"><a href="#" title="Facebook" target="_blank">Facebook</a></li>
                        <li class="google-plus"><a href="#" title="Google+" target="_blank">Google+</a></li>
                        <li class="linkedin"><a href="#" title="LinkedIn" target="_blank">LinkedIn</a></li>
                        <li class="skype"><a href="#" title="Skype" target="_blank">Skype</a></li>
                        <li class="mail"><a href="#" title="Mail" target="_blank">Mail</a></li>
                    </ul>
                    <p>Cras pellentesque suscipit iaculis. Nulla lobortis, risus sed consequat pretium, ligula tellus luctus ipsum, non egestas elit enim et orci. Sed blandit ligula.</p>
                </div>
            </div>
            
            <div class="team-member one-fourth">
                <img class="photo" src="/default/images/team/team-member-3.png" alt="Team Member">
                <div class="content">
                    <h3 class="name">John Doe</h3>
                    <span class="job-title">Web Developer</span>
                    <ul class="social-links">
                        <li class="twitter"><a href="#" title="Twitter" target="_blank">Twitter</a></li>
                        <li class="facebook"><a href="#" title="Facebook" target="_blank">Facebook</a></li>
                        <li class="google-plus"><a href="#" title="Google+" target="_blank">Google+</a></li>
                        <li class="linkedin"><a href="#" title="LinkedIn" target="_blank">LinkedIn</a></li>
                        <li class="skype"><a href="#" title="Skype" target="_blank">Skype</a></li>
                        <li class="mail"><a href="#" title="Mail" target="_blank">Mail</a></li>
                    </ul>
                    <p>Cras pellentesque suscipit iaculis. Nulla lobortis, risus sed consequat pretium, ligula tellus luctus ipsum, non egestas elit enim et orci. Sed blandit ligula.</p>
                </div>
            </div>
            
            <div class="team-member one-fourth column-last">
                <img class="photo" src="/default/images/team/team-member-4.png" alt="Team Member">
                <div class="content">
                    <h3 class="name">Jane Doe</h3>
                    <span class="job-title">Account Manager</span>
                    <ul class="social-links">
                        <li class="twitter"><a href="#" title="Twitter" target="_blank">Twitter</a></li>
                        <li class="facebook"><a href="#" title="Facebook" target="_blank">Facebook</a></li>
                        <li class="google-plus"><a href="#" title="Google+" target="_blank">Google+</a></li>
                        <li class="linkedin"><a href="#" title="LinkedIn" target="_blank">LinkedIn</a></li>
                        <li class="skype"><a href="#" title="Skype" target="_blank">Skype</a></li>
                        <li class="mail"><a href="#" title="Mail" target="_blank">Mail</a></li>
                    </ul>
                    <p>Cras pellentesque suscipit iaculis. Nulla lobortis, risus sed consequat pretium, ligula tellus luctus ipsum, non egestas elit enim et orci. Sed blandit ligula.</p>
                </div>
            </div>
            <div class="clear"></div>
        </section>
        <!-- end our team -->

    </section>
    <!-- end content -->  
@stop
