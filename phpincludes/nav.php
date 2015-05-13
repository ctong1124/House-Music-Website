

<div class="section">
    <div class="col12">
        <div id="main" class="navbar">
            <div class="navbar-collapsed">
                <div class="nav-click">
                 <img <?php if ($section=="main") echo " src=\"imgs/menubutton.png\""; 
						if ($section=="timeline") echo " src=\"../imgs/menubutton.png\"";?>></a>
                 <h1>MENU</h1>
                 <!-- <h1 class="onpage"> 
                    <?php echo $thisPage?>
                </h1> -->
                </div>
            </div>
            <div class="navbar-basic"> 
                <li <?php if ($thisPage=="home") echo " class=\"current\""; ?>>
                	<a <?php if ($section=="main") echo " href=\"index.php\""; 
						if ($section=="timeline") echo " href=\"../index.php\"";?>>HOME</a></li>
                <li class="timeline" <?php if ($section=="timeline") echo " \"current\""; ?>>
                	<a href="#">TIMELINE</a></li>
                <li <?php if ($thisPage=="listen") echo " class=\"current\""; ?>>
					<a <?php if ($section=="main") echo " href=\"listen.php\""; 
						if ($section=="timeline") echo " href=\"../listen.php\"";?>>LISTEN</a></li>
                <li <?php if ($thisPage=="about") echo " class=\"current\""; ?>>
                	<a <?php if ($section=="main") echo " href=\"about.php\""; 
						if ($section=="timeline") echo " href=\"../about.php\"";?>>ABOUT</a></li>
            </div> 
            <ul class="navbar-timeline">
                <li>
                    <a <?php if ($thisPage=="basics") echo " class=\"current\""; 
                      if ($section=="main") echo " href=\"timeline/basics.php\""; 
						if ($section=="timeline") echo " href=\"basics.php\"";?>>
                        <div 
                            <?php if ($thisPage=="basics") echo " class=\"circle current\"";
                            else echo " class=\"circle\""; ?>>
                        </div>
                        <div class="timeline-section">BASICS</div></a>

                </li>
                <li>
                    <a <?php if ($thisPage=="early1980s") echo " class=\"current\"";
                    if ($section=="main") echo " href=\"timeline/early1980s.php\""; 
						if ($section=="timeline") echo " href=\"early1980s.php\"";?>>
                        <div 
                            <?php if ($thisPage=="early1980s") echo " class=\"circle current\"";
                            else echo " class=\"circle\""; ?>>
                        </div>
                        <div class="timeline-section">EARLY 1980S</div>
                    </a>
                </li>
                <li class="two-line">
                    <a <?php if ($thisPage=="detroit") echo " class=\"current\"";
                        if ($section=="main") echo " href=\"timeline/detroit.php\""; 
						if ($section=="timeline") echo " href=\"detroit.php\"";?>>
                        <div 
                            <?php if ($thisPage=="detroit") echo " class=\"circle current\"";
                                else echo " class=\"circle\""; ?>>
                        </div>
                        <div class="timeline-section">
                            <div>LATE 1980s:</div>
                            <div>DETROIT</div>
                        </div>
                    </a>
                </li>
                <li class="two-line">
                    <a <?php if ($thisPage=="uk") echo " class=\"current\"";
                        if ($section=="main") echo " href=\"timeline/uk.php\""; 
						if ($section=="timeline") echo " href=\"uk.php\"";?>>
                        <div 
                            <?php if ($thisPage=="uk") echo " class=\"circle current\"";
                                else echo " class=\"circle\""; ?>>
                        </div>
                        <div class="timeline-section">
                            <div>LATE 1980s:</div>
                            <div>UK</div>
                        </div>
                    </a>
                </li>
                <li>
                    <a <?php if ($thisPage=="1990s") echo " class=\"current\"";
                        if ($section=="main") echo " href=\"timeline/1990s.php\""; 
						if ($section=="timeline") echo " href=\"1990s.php\"";?>>
                        <div 
                            <?php if ($thisPage=="1990s") echo " class=\"circle current\"";
                                else echo " class=\"circle\""; ?>>
                        </div>
                        <div class="timeline-section">1990s</div>
                    </a>
                </li>
                <li>
                    <a <?php if ($thisPage=="2000s") echo " class=\"current\"";
                        if ($section=="main") echo " href=\"timeline/2000s.php\""; 
						if ($section=="timeline") echo " href=\"2000s.php\"";?>>
                        <div 
                            <?php if ($thisPage=="2000s") echo " class=\"circle current\"";
                                else echo " class=\"circle\""; ?>>
                        </div>
                        <div class="timeline-section">2000s</div>
                    </a>
                </li>
                <li class="timeline-end">
                    <a <?php if ($thisPage=="2010s") echo " class=\"current\"";
                        if ($section=="main") echo " href=\"timeline/2010s.php\""; 
						if ($section=="timeline") echo " href=\"2010s.php\"";?>>
                        <div 
                            <?php if ($thisPage=="2010s") echo " class=\"circle current\"";
                                    else echo " class=\"circle\""; ?>>
                        </div>
                        <div class="timeline-section">2010s</div>
                    </a>
                </li> 
            </ul>
        </div>
    </div>
</div>

<div id="dom-target-page" style="display: none;"><?php echo htmlspecialchars($thisPage); ?></div>
<div id="dom-target-section" style="display: none;"><?php echo htmlspecialchars($section); ?></div>



