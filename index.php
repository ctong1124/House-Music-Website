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

        <div class="index">
        <!-- <div class="section">  -->

        <div class="section intro"> 
          <div class="record"></div>
          <div class="col12">
            <audio id="yourlove" src="audio/yourlove.mp3" type="audio/mp3"></audio>
            <img class="play-icon" id="yourlove" src="imgs/speakeron.png">
            <div class="headline scene_element_long scene_element--fadein">
              <h4>a guide to</h4>
              <h1>HOUSE MUSIC</h1>
            </div>
          </div>
        </div>

          <!-- <div class="section intro"> 
            <div class="col12">
              <audio id="yourlove" src="audio/yourlove.mp3" type="audio/mp3"></audio>
              <img class="play-icon" id="yourlove" src="imgs/speakeron.png">
              <div class="headline scene_element_long scene_element--fadein">
                <h4>a guide to</h4>
                <h1>HOUSE MUSIC</h1>
              </div>
            </div>
          </div> -->
          <div class="part2">
          <div class="full-quote">
              <h3> <span class="hanging">&ldquo;</span>it’s not just a sound. it’s not just a music. 
                it’s a culture. just like the track said
                 <span style="font-family: 'Lato', sans-serif;font-weight: 400;font-style:italic;">
                  it’s a spritual thing, man.</span>&rdquo; </h3>
              <h5> -DJ Pierre </h5>
              <a href="http://youtu.be/L7JHqtMuuAI?t=5m50s" target="blank">
                <div class="headline-p source"> SOURCE </div>
              </a>
          </div>
          <div class="section pad-large">
            <div class="section-fixed">
            <p>This is a look at what makes this simple sound so popular, 
              its journey from its humble beginnings to 
              where it is today and, of course, the people who made it all possible. <p>
            </div>
          </div> 

          <div class="section"> 
            <div class="nextpage">
              <h6> continue to</h6>
              <a href="timeline/basics.php"><h2>basics</h2></a>
            </div>
          </div> 
            
        </div>
      </div>

      <!--<script src="js/intro.js"></script>-->

      <script> 

      jQuery(document).ready(function($){
        function playAudio() {
            $('#yourlove').get(0).play();
            $('.play-icon').one("click", pauseAudio);
        }

        function pauseAudio() {
            $('#yourlove').get(0).pause();
            $(this).one("click", playAudio);
        }

        playAudio();

        

      $(".play-icon").click(function(){
        if($(this).attr('src') == "imgs/speakeroff.png") {
          $(this).attr('src',"imgs/speakeron.png");
          return false;
        }
        if($(this).attr('src') == "imgs/speakeron.png") {
          $(this).attr('src',"imgs/speakeroff.png");
          return false;
        }
        
      });
        
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
