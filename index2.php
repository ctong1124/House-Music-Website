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

        <div class="index2">
        <div class="section"> 

          <div class="section intro"> 
            <!-- <div class="square"></div> -->
            <div class="record"></div>
            <div class="col12">
              <div class="headline scene_element_long scene_element--fadein">
                <h4>a guide to</h4>
                <h1>HOUSE MUSIC</h1>
              </div>
            </div>
          </div>

          
            
        </div>
      </div>

      <script>
      $( document ).ready(function() {
        height = $( window ).height();
        $(".index .section .intro").css('height', height);


        // var myVar=setInterval(function(){myTimer()},1000);

        // var d = 0;
        // var sp=0; 
        // function myTimer() {
        //     d++;


        //     if (d<6 && d<=4) {
        //        $(".index2 .section .record").css('-webkit-animation-duration', 16-sp*4);
        //        sp++;
              
        //     } else {
        //       $(".index2 .section .record").css('-webkit-animation-duration', '1s');
        //       $(".index2 .section .record").css('-webkit-animation-timing-function', 'linear');
        //     }

            // if (d<4){}
            // if(d==4) {
            //   $(".index2 .section .record").css('-webkit-animation-duration', '4s');
            //   console.log("d==4");
            // }
            // if(d==5) {
            //   $(".index2 .section .record").css('-webkit-animation-duration', '3s');
            //   console.log("d==5");
            // }
            // if(d==6) {
            //   $(".index2 .section .record").css('-webkit-animation-duration', '2s');
            //   console.log("d==6");
            // }
            // else {
            //   $(".index2 .section .record").css('-webkit-animation-duration', '2s');
            //   $(".index2 .section .record").css('-webkit-animation-timing-function', 'linear');
            //   console.log("else");
            // }

            
        }

        


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
