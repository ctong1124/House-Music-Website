<head>
        <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic|Noto+Serif:400,700,400italic,700italic|Raleway:800,900' rel='stylesheet' type='text/css'>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <link rel="stylesheet" 
            <?php if ($section=="main") echo " href=\"css/main.css\""; 
            if ($section=="timeline") echo " href=\"../css/main.css\"";?>>
        <link rel="stylesheet" 
            <?php if ($section=="main") echo " href=\"css/keyframes.css\""; 
            if ($section=="timeline") echo " href=\"../css/keyframes.css\"";?>>
        <link rel="stylesheet" 
            <?php if ($section=="main") echo " href=\"css/pageTransitions.css\""; 
            if ($section=="timeline") echo " href=\"../css/pageTransitions.css\"";?>>    
        <script <?php if ($section=="main") echo " src=\"js/vendor/modernizr-2.6.2.min.js\""; 
            if ($section=="timeline") echo " src=\"../js/vendor/modernizr-2.6.2.min.js\"";?>></script>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
        <script 
            <?php if ($section=="main") echo " src=\"js/plugins.js\""; 
            if ($section=="timeline") echo " src=\"../js/plugins.js\"";?>></script>
        <script 
            <?php if ($section=="main") echo " src=\"js/main.js\""; 
            if (
                    $section=="timeline") echo " src=\"../js/main.js\"";?>></script>
        <script <?php if ($section=="main") echo " src=\"js/jquery.smoothState.js\""; 
            if ($section=="timeline") echo " src=\"../js/jquery.smoothState.js\"";?>></script>
        <script 
            <?php if ($section=="main") echo " src=\"js/functions.js\""; 
            if ($section=="timeline") echo " src=\"../js/functions.js\"";?>></script>

        <script <?php if ($section=="main") echo " src=\"js/nav.js\""; 
            if ($section=="timeline") echo " src=\"../js/nav.js\"";?>></script>
        <script <?php if ($section=="main") echo " src=\"js/music.js\""; 
            if ($section=="timeline") echo " src=\"../js/music.js\"";?>></script>
    </head>


