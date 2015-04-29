<?php use Roots\Sage\Nav\NavWalker; ?>

<?php if ( is_page_template('team-member-inner-template.php') ) { ?>
<header>
  <!-- Fixed navbar -->
    <nav class="navbar navbar-default">
      <div class="container">


        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo get_option('home'); ?>"><img src="/app/uploads/MFH_LOGO_COLOUR_WHITE_TEXT_HR.png"></a>
        </div>
        <div class="nagigation"><div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="login menu-become-a-team-member">Back to <a href="http://melbournefamilyhub.com.au">melbournefamilyhub.com.au</a></li>
            <li class="orange menu-become-a-team-member"><a href="http://wordpresscms.dev/become-a-team-member-today/apply-to-be-a-tm/"><i class="fa fa-check-square-o"></i></i> Apply Now!</a></li>
            </ul>
          <ul class="nav navbar-nav navbar-right navbar bottom">
            <form class="form-inline">
  <div class="form-group">
    <label class="sr-only"> find</label>
    <p class="form-control-static"><i class="fa fa-search"></i> Find a:</p>
  </div>
  <div class="form-group">

    <label for="inputPassword2" class="sr-only">service</label>
    <select class="form-control">
  
  <option>Nanny</option>
  <option>2Homework Helper</option>
  <option>Babysitter</option>
  <option>Tutor</option>
</select>
    </div>
  
</form>
            
          </ul>
          <ul class="nav navbar-nav navbar-right navbar bottom-lower">
            <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'walker' => new NavWalker(), 'menu_class' => 'nav navbar-nav']);
      endif;
      ?>
          </ul></div>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
</header>
<?php } else { ?>
<header>
  <!-- Fixed navbar -->
    <nav class="navbar navbar-default">
      <div class="container">


        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo get_option('home'); ?>"><img src="/app/uploads/MFH_LOGO_COLOUR_WHITE_TEXT_HR.png"></a>
        </div>
        <div class="nagigation"><div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="login menu-become-a-team-member"><?php
    if (is_user_logged_in()) {
        $user = wp_get_current_user();
        echo __('Welcome back') . ' ' . $user->display_name . '!';
    } else { ?>
        </i><a href="/dashboard/user-registration/" class="simplemodal-register" ><?php echo __('<i class="fa fa-key"></i></i> Register'); ?></a>
        &nbsp;&nbsp;
    <?php } ?>
    &nbsp;&nbsp;<i class="fa fa-sign-out">&nbsp;&nbsp;</i><?php wp_loginout( $_SERVER['REQUEST_URI'] ); ?></li>
            <li class="orange menu-become-a-team-member"><a href="http://wordpresscms.dev/become-a-team-member-today/"><i class="fa fa-users"></i> Become a team member</a></li>
            </ul>
          <ul class="nav navbar-nav navbar-right navbar bottom">
            <form class="form-inline">
  <div class="form-group">
    <label class="sr-only"> find</label>
    <p class="form-control-static"><i class="fa fa-search"></i> Find a:</p>
  </div>
  <div class="form-group">

    <label for="inputPassword2" class="sr-only">service</label>
    <select class="form-control">
  
  <option>Nanny</option>
  <option>2Homework Helper</option>
  <option>Babysitter</option>
  <option>Tutor</option>
</select>
    </div>
  
</form>
            
          </ul>
          <ul class="nav navbar-nav navbar-right navbar bottom-lower">
            <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'walker' => new NavWalker(), 'menu_class' => 'nav navbar-nav']);
      endif;
      ?>
          </ul></div>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
</header>
<?php } ?>







