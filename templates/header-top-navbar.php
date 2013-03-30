<header class="container">
	<div class="row masthead">
		<div class="span6">
		  <h3 class="muted">
		  	<a href="/">
		    	<img src="/assets/img/cook-siding-logo.png" alt="Cook Siding Supply, Inc.">
		  	</a>
		  </h3>
		</div><!-- /.span6 -->
		<div class="span6 text-right">
		  <p class="quick-question">
		  	<strong>Quick Question?</strong> 1-800-397-4545 or<br>
		  	<a href="<?php $permalink = get_permalink( 15 ); ?>">Request an Estimate</a>
		  </p>
		</div><!-- /.span4 -->
	</div><!-- /.masthead -->

  <div class="navbar">
    <div class="navbar-inner">
      <div class="container">

				<!-- .btn-navbar is used as the toggle for collapsed navbar content -->
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>

				<!-- Everything you want hidden at 940px or less, place within here -->
		    <nav class="nav-main nav-collapse" role="navigation">
		      <?php
		        if (has_nav_menu('primary_navigation')) :
		          wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav'));
		        endif;
		      ?>
		    </nav><!-- /.nav-collapse -->
      </div><!-- /.container -->
    </div><!-- /.navbar-inner -->
  </div><!-- /.navbar -->
</header><!-- /.container -->  
