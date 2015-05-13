<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> 
<?php $thisPage="basics"; ?>
<?php $section="timeline"; ?>
<html class="no-js"> <!--<![endif]-->
    <?php include "../phpincludes/head.php"; ?>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        


        <?php include("../phpincludes/nav.php"); ?>

         
      <div id="main">
        <div class="basics scene_element scene_element--fadeinup">
          <div class="section-fixed pad-medium-top "> 
            <div class="col12 subsec-header">
              <h6>BASICS</h6>
              <h3>what is house?</h3>
            </div>
          </div>
          <div class="section pad-medium-bot">
            <div class="section-fixed">
              <p>House is a genre of electronic music with its roots in disco 
                and funk and intertwined with many other electronic music genres. </p>
              <p>At its most basic definition, house is characterized by repetitive 
                4/4 beats with accents on the second and third beat and hi-hats on the 
                offbeats.</p>
            </div>
          </div>

          <div class="section pad-medium-bot">
            <div class="ex-icons housebeat">
              <div class="col3">
              </div>
              <div class="col6">
                <audio id="housebeat" src="../audio/housebeat.mp3" type="audio/mp3"></audio>
                <div class="icon-title headline-p">HOUSE BEAT</div>
                <img src="../imgs/beat.png" class="circ-background">
                <img class="play-icon" id="housebeat" src="../imgs/speakeronred.png" >
              </div>
              <div class="col3">
              </div>
            </div>
          </div>


          <div class="section pad-large-bot">
              <div class="ex-icons beat-comps">
              <div class="col4">
                  <audio id="kick" src="../audio/kick.mp3" type="audio/mp3"></audio>
                  <div class="icon-title headline-p">KICK</div>
                  <img src="../imgs/kick.png" class="circ-background">

                  
                  <div class="icon-info">
                    <div class="sans-serif-p">K</div>
                  </div>

              </div>
              <div class="col4">
                  <audio id="hihat" src="../audio/hihat.mp3" type="audio/mp3"></audio>
                  <div class="icon-title headline-p">HI-HAT</div>
                  <img src="../imgs/hihat.png" class="circ-background" >
                  
                  <div class="icon-info">
                    <div class="sans-serif-p">H</div>
                  </div>

              </div>

              
              <div class="col4">
                  <audio id="clap" src="../audio/clap.mp3" type="audio/mp3"></audio>
                  <div class="icon-title headline-p">CLAP</div>
                  <img src="../imgs/clap.png" class="circ-background" >
                  
                  <div class="icon-info">
                    <div class="sans-serif-p">C</div>
                  </div>

              </div>
            </div>
          </div>
          

          <div class="section"> 
            <div class="section-fixed">
              <div class="col12 subsec-header">
                <h6>BASICS</h6>
                <h3>PREDECESSORS</h3>
                <h5>The beginning of electronic music </h5>
              </div>
            </div>
          </div>
          <div class="section pad-small-bottom">
            <div class="section-fixed">
              <p>
                House music had its roots in old funk, soul, R&B and disco records. Only until the
                popularization of synthesizers and drum machines did disco songs begin become
                completely electronic and aimed towards DJs. Only then did this new electronic music and the new itch 
                to dance and move turn into a phenomenon called House music. 
              </p>
              <p>
                The Roland TB-303 bass synthesizer and Roland TR-808 drum machine were commonly used
                in early House tracks along with synths (like the Korg Poly-61) and minimal vocals or 
                or vocal samples.
              </p>
            </div>
          </div>

          <div class="section pad-medium">
            <div class="ex-icons gear">
            <div class="col4">
                <audio id="roland303bassline" src="../audio/rolandtb303bassline.ogg" type="audio/ogg"></audio>
                <img src="../imgs/roland303bassline.png" class="circ-background" >
                <img class="play-icon" id="roland303bassline" src="../imgs/speakeronred.png" >
                <div class="icon-title sans-serif-p">Roland TB-303 Bass Synth</div>
                <div class="icon-info">
                  <p><span class="hanging quote">&ldquo;</span>The TB-303 (short for "Transistor Bass") was originally marketed to guitarists
                   for bass accompaniment while practicing alone. Production lasted approximately 18 months, 
                   resulting in only 10,000 units. It was not until the mid- to late-1980s that DJs and 
                   electronic musicians in Chicago found a use for the machine in the context of the 
                   newly developing house music genre. <span class="quote">&rdquo;</span></p>
                   <div class="sans-serif-p">
                    -via <a href="http://en.wikipedia.org/wiki/Roland_TB-303" target="blank">Wikipedia</a>
                  </div>
                </div>

            </div>
            <div class="col4 ">
                <audio id="roland808" src="../audio/rolandtr808drum.ogg" type="audio/ogg"></audio>
                <img src="../imgs/roland808drum.png" class="circ-background" >
                <img class="play-icon" id="roland808drum" src="../imgs/speakeronred.png" >
                <div class="icon-title sans-serif-p">Roland TR-808 Rhythm Composer</div>
                <div class="icon-info">
                  <p><span class="hanging quote">&ldquo;</span>The Roland TR-808 Rhythm Composer 
                    (a.k.a. the "808") was one of the first programmable drum machines ("TR" standing for 
                    Transistor Rhythm) <br> <br>
                    "Raga Bhairavi" from Charanjit Singh's Ten Ragas to a Disco Beat (1982). Using the TR-808 
                    along with the TB-303, it resembled later acid house music.<span class="quote">&rdquo;</span></p>
                   <div class="sans-serif-p">
                    -via <a href="http://en.wikipedia.org/wiki/Roland_TR-808" target="blank">Wikipedia</a>
                  </div>
                </div>

            </div>
            <div class="col4">
              <audio id="korgpoly61" src="../audio/korgpoly61.mp3" type="audio/mp3"></audio>
              <img src="../imgs/korgpoly61.png" class="circ-background">
              <img class="play-icon" id="korgpoly61" src="../imgs/speakeronred.png" >
              <div class="icon-title sans-serif-p">Korg Poly-61</div>
              <div class="icon-info">
                <p><span class="hanging quote">&ldquo;</span>The KORG Poly-61 is a programmable 
                  polyphonic synthesizer released by Korg in 1982, as a successor to the Polysix. 
                  It was notable for being Korg's first "knobless" synthesizer - featuring a push 
                  button interface for programming, dispensing from the Polysix's knobs 
                  and switches.<span class="quote">&rdquo;</span></p>
                 <div class="sans-serif-p">
                  -via <a href="http://en.wikipedia.org/wiki/Korg_Poly-61" target="blank">Wikipedia</a>
                </div>
              </div>
            </div>
          </div>
          </div>
        
        <?php include("../phpincludes/footer.php"); ?>
      </div>

      
    </div>

    <script> 
      function playAudio() {
          $('#roland303bassline').get(0).play();
          $(this).one("click", pauseAudio);
      }

      function pauseAudio() {
          $('#roland303bassline').get(0).pause();
          $(this).one("click", playAudio);
      }
      $(".play-icon#roland303bassline").one("click", playAudio);

      $(".ex-icons img.circ-background").hover(function() {
        $(this).toggleClass("circ-background-hover");
      });

      $(".ex-icons img.circ-background").click(function(){
        $(this).toggleClass("circ-background-playing");
      });
      
      $(".gear img.circ-background").click(function(){
        $(this).siblings(".icon-info").toggle("fast");
      });

      $(".play-icon").click(function(){
        $(this).toggleClass("play-icon-playing");
      });



      function playAudio2() {
          $('#roland808').get(0).play();
          $(this).one("click", pauseAudio2);
      }

      function pauseAudio2() {
          $('#roland808').get(0).pause();
          $(this).one("click", playAudio2);
      }
      $(".play-icon#roland808drum").one("click", playAudio2);

      function playAudio3() {
          $('#korgpoly61').get(0).play();
          $(this).one("click", pauseAudio3);
      }

      function pauseAudio3() {
          $('#korgpoly61').get(0).pause();
          $(this).one("click", playAudio3);
      }
      $(".play-icon#korgpoly61").one("click", playAudio3);



      function playAudio4() {
          $('#housebeat').get(0).play();
          $(this).one("click", pauseAudio4);
      }

      function pauseAudio4() {
          $('#housebeat').get(0).pause();
          $(this).one("click", playAudio4);
      }
      $(".play-icon#housebeat").one("click", playAudio4);


      $(document).keydown(function(e){
          if (e.keyCode == 75) { 
             $('#kick').get(0).play();
             return false;
          }
          if (e.keyCode == 72) { 
             $('#hihat').get(0).play();
             return false;
          }
          if (e.keyCode == 67) { 
             $('#clap').get(0).play();
             return false;
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
