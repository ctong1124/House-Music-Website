<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> 
<?php $thisPage="home"; ?>
<?php $section="main"; ?>
<html class="no-js"> <!--<![endif]-->
    <?php include "phpincludes/head.php"; ?>


    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        



        <?php include "phpincludes/nav.php"; ?>

      <div id="main">
        <div class="index scene_element_long scene_element--up">
        <div class="section"> 

          <div class="full-quote">
            <!--<div class="section-fixed">-->
              <h3> <span class="hanging">&ldquo;</span>it’s not just a sound. it’s not just a music. 
                it’s a culture. just like the track said
                 <span style="font-family: 'Lato', sans-serif;font-weight: 400;font-style:italic;">
                  it’s a spritual thing, man.</span>&rdquo; </h3>
                  <h5> -DJ Pierre </h5>
           <!--  </div> -->
          </div>
          <div class="section pad-large">
            <div class="section-fixed">
            <p>This is a look at what makes this simple sound so popular, 
              its journey from its humble beginnings to 
              where it is today and, of course, the people who made it all possible. <p>
            </div>
          </div> 

          <!-- <h1> RALEWAY BIG HEADLINE </h1> 
          <h2> RALEWAY BIG HEADLINE </h2> 
          <h3> RAleway same as h4 size </h3> 
          <h4> Lato headline </h4> 
          <h5> lato subhead </h5> 
          <h6> small lato</h6> 
          <p> Filler text yeah eyah yeah yeah filler yeah  </p>  

          <div class="section"> 
            <div class="col5 example"><p>5 Example Content</p></div>
            <div class="col7 example"><p>7 Example Content</p></div>
          </div> -->

          <div class="section"> 
            <div class="nextpage-only">
              <h6> continue to</h6>
              <a href="timeline/basics.php"><h2>basics</h2></a>
            </div>
          </div> 
            
        </div>
      </div>
    </div>

      <script>
      $( document ).ready(function() {
        console.log("poop");
        height = $( window ).height();
        console.log(height);
        $(".index .section .intro").css('height', height);
      });
      </script>




        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X');ga('send','pageview');
        </script>
    </body>
</html>
