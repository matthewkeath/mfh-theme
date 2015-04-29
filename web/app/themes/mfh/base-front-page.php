

<?php

use Roots\Sage\Config;
use Roots\Sage\Wrapper;

?>

<?php get_template_part('templates/head'); ?>
  <body <?php body_class(); ?> ng-app="ExampleApp">
    <!--[if lt IE 9]>
      <div class="alert alert-warning">
        <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'sage'); ?>
      </div>
    <![endif]-->
    <?php
      do_action('get_header');
      get_template_part('templates/header');
    ?>
    
    <div class="site-wrapper">

      <div class="site-wrapper-inner">

        <div class="cover-container">

          <div class="masthead clearfix">
            
          </div>

          <div class="inner cover">
            <form id="nl-form" class="nl-form" ng-controller="MainCtrl">
        Hello! I am looking for a 
        <nl-select value='answers.style' options='styles' placeholder='*choose' ></nl-select>

        in or close by to <nl-text value="answers.city" placeholder="choose" subline="{{ subline }}" name="city"></nl-text>
Thanks! xxx
        <div class="nl-submit-wrap"><span class="melb"><p>Melbourne only. Sorry!</p></span>
            <button class="nl-submit" type="submit">Start Searching</button>
        </div>
    </form>

    <blockquote>
  <p>Thanks Bonnie! You matched the perfect Nanny for us. She is like a part of the family now!</p>
  <footer> <cite title="Source Title">Alex</cite></footer>
</blockquote>
    
          </div>

          

        </div>

      </div>

    </div>
    
    <?php
      get_template_part('templates/footer');
      wp_footer();
    ?>



    <script>
        angular.module('ExampleApp', ['vr.directives.nlForm']).
        controller('MainCtrl', function ($scope) {
            $scope.foods = [
            'Indian',
            'French',
            'Japanese',
            'Italian'
            ];
      $scope.styles = [
        'choose',
        'Nanny',
          'Homework Helper',
          'Tutor',
          'Babysitter',
        
      ];
      $scope.times = [
        { value: 'any', label: 'anytime' },
        { value: '19:00', label: 'at 7 p.m.' },
        { value: '20:00', label: 'at 8 p.m.' },
        { value: '21:00', label: 'at 9 p.m.' }
      ];
      $scope.answers = {
        food: 'Japanese',
        style: 'hip',
        time: '19:00',
        city: ''
      };
      $scope.subline = "For example: <em>Malvern</em> or <em>Aramadale</em>";
        });
    </script>

<script type="text/javascript">
        $("[data-toggle=popover]").popover();
    </script>

  </body>
</html>
