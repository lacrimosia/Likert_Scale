<html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <title>Capitalism and Socialism - Likert Scale</title>
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="/css/animate.css">
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
</head>

<body>
    <!--<div class="intro">
        <button class="intro_Button">
            <h1><b>PRESS S</b> or Click here to START</h1>
        </button>
    </div>-->
    <div class="header">
        <div class="titles">
            <h5>Capitalism and Socialism - Likert Scale</h5>
        </div>
        <div class="menu">
            <button class="reload btn" title="Reload"><i class="fa fa-refresh"></i> Reload</button>
            <!-- refresh -->
            <button class="help btn" title="Help Menu"><i class="fa fa-question-circle"></i> Help</button>
            <!--help-->
        </div>
    </div>
    <div class="instructions">
        <div class="text">
            <p><b>Instructions:</b> <span class="i"></span></p>
        </div>
    </div>
    <div class="help_Menu">
        <div class="keyboard_Div animated fadeIn">
            <h1>Capitalism and Socialism - Likert Scale</h1>
            <p>Click or press the <b class="keyButtons">TAB</b> + <b class="keyButtons">SPACE</b> or <b class="keyButtons">TAB</b> + <b class="keyButtons">ENTER</b> keys to select traits that apply to you.</p>
            <ul>
                <li>
                    <b>Keyboard Shortcuts</b></li>
                <li>Start - <b class="keyButtons">S</b></li>
                <li>Navigate - <b class="keyButtons">TAB</b></li>
                <li>Unselect/Select Trait - <b class="keyButtons">SPACE</b> or <b class="keyButtons">ENTER</b></li>
                <li>Finish - <b class="keyButtons">F</b></li>
                <li>Reload - <b class="keyButtons">R</b></li>
                <li>Help - <b class="keyButtons">H</b></li>
            </ul>
            <button class="help_Button">
            START <i class="fa fa-arrow-right"></i>
        </button>
        </div>
    </div>
    @yield('content')
    <!--
    <div class="menuButtonBottom">
        <p class="selTraitEmerge"></p>
        <button class="finish btn">
            Finish <i class="fa fa-arrow-right"></i>
        </button>
    </div>
    -->
    <!-- Scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
    <script src="/js/lodash/lodash.js"></script>
    <script src="/js/scale.js"></script>
    <script src="/js/chart.js"></script>
</body>

</html>
