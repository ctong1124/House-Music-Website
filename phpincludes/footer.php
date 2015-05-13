

<div class="section"> 


  <?php if ($thisPage=="basics") echo "<a href=\"../index.php\">"; 
        if ($thisPage=="early1980s") echo "<a href=\"basics.php\">";
        if ($thisPage=="detroit") echo "<a href=\"early1980s.php\">";
        if ($thisPage=="uk") echo "<a href=\"detroit.php\"> ";
        if ($thisPage=="1990s") echo "<a href=\"uk.php\">";
        if ($thisPage=="2000s") echo "<a href=\"1990s.php\">";
        ?>
    <div class="col6 prevpage">
      <h6>back to</h6>
      <h2>
      <?php if ($thisPage=="basics") echo "home"; 
        if ($thisPage=="early1980s") echo "basics";
        if ($thisPage=="detroit") echo "early 1980s";
        if ($thisPage=="uk") echo "late 1980s: detroit ";
        if ($thisPage=="1990s") echo "late 1980s: uk";
        if ($thisPage=="2000s") echo "1990s";
        ?>
      </h2>
    </div>
    </a>


  <?php if ($thisPage=="basics") echo "<a href=\"early1980s.php\">"; 
    if ($thisPage=="early1980s") echo "<a href=\"detroit.php\">";
    if ($thisPage=="detroit") echo "<a href=\"uk.php\">";
    if ($thisPage=="uk") echo "<a href=\"1990s.php\">";
    if ($thisPage=="1990s") echo "<a href=\"2000s.php\">";
    if ($thisPage=="2000s") echo "<a href=\"2010s.php\">";
    ?>
    <div class="col6 nextpage">
      <h6>continue to</h6>
      <h2>
      <?php if ($thisPage=="basics") echo " early 1980s  "; 
        if ($thisPage=="early1980s") echo " late 1980s: detroit   ";
        if ($thisPage=="detroit") echo " late 1980s: uk  ";
        if ($thisPage=="uk") echo " 1990s  ";
        if ($thisPage=="1990s") echo "2000s  ";
        if ($thisPage=="2000s") echo " 2010s  ";
        ?>
      </h2>
    </div>
  </a>
</div>



