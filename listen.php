<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> 
<?php $thisPage="listen"; ?>
<?php $section="main"; ?>
<html class="no-js"> <!--<![endif]-->
    <?php include "phpincludes/head.php"; ?>
    
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        
    <?php include "phpincludes/nav.php"; ?>

    <div id="listen"></div>


    <div id="main">
        <div class="listen scene_element scene_element--fadein">
            <div class="arrow-nav">
                <div class="arrow-left"></div>
            </div>

            <div class="arrow-nav-right">
                <div class="arrow-right"></div>
            </div>

            <div class="section">
            <div id="vid-section">
<!-- 
                <div class="section-fixed">
                    <div class="col9">
                        <iframe width="640" height="480" src="//www.youtube.com/embed/LOLE1YE_oFQ\" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <div class="col3 sans-serif-p">
                        <div>
                          <span class="headline-p">Artist </span> 
                          Farley Jackmaster Funk, featuring Darryl Pandy
                        </div> 
                        <div>
                          <span class="headline-p">Song </span> Love Can't Turn Around
                        </div> 
                        <div>
                          <span class="headline-p">Year </span> 1986
                        </div>
                        <br>
                        <div>
                            &quotYour Love&quot was one of the first popular tracks in this new house genre. It was first played by Frankie Knuckles and quickly spread throughout the rest of the Chicago clubs. In 1984, it was only available to DJs as a copy of a tape, but was then released in 1986 as a 12” vinyl by Persona Records.
                        </div>
                    </div>
                </div>-->
            </div>


                
        </div>
    </div>  

    <script> 
    $('html, body').css({
        'overflow': 'hidden',
        'height': '100%'
    });

    $(".arrow-left").hover(function(){
       $(this).toggleClass("arrow-left-active");
    });

    $(".arrow-right").hover(function(){
       $(this).toggleClass("arrow-right-active");
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
