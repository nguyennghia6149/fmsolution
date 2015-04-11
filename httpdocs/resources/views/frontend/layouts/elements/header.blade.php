<header id="header" class="container clearfix">
	<!-- begin logo -->
    <h1 id="logo">
    	<img class="logo" src="/default/images/logo.png">
    </h1>
    <!-- end logo -->
    
    <!-- begin navigation wrapper -->
    <div class="nav-wrap clearfix">
	    <!-- begin search form -->
	    <form id="search-form" action="http://www.ixtendo.com/themes/exquiso-html/search.php" method="get">
	        <input id="s" type="text" name="s" placeholder="Search &hellip;" style="display: none;">
	        <input id="search-submit" type="submit" name="search-submit" value="Search">
	    </form>
	    <!-- end search form -->

	    @include('layouts.partial.menu')
    </div>
    <!-- end navigation wrapper -->
</header>
