<?php
class Template_class{
    var $company = "RVT";


    static function getLibs(){
        echo '
        <link href="css/lightbox.css" rel="stylesheet">
        <link href="css/bootstrap.min.css" rel=	"stylesheet">
        <link href="css/style.css" rel="stylesheet" type="text/css">
        ';
    }

    static function getJsLibs(){
        echo '
            <script src="js/lightbox-plus-jquery.js"></script>
            <script src="js/bootstrap.min.js"></script>
            <script type="text/javascript" src="js/jquery-3.1.1.js"></script>
            <script type="text/javascript" src="js/myFunctions.js"></script>
            <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
            
        ';
    }

    function showTitle(){
        echo $this->company;
    }


    static function getMenu(){
        echo '
        <nav class="navbar navbar-inverse" style="background-color: blueviolet;">
        <div class="container">

            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mainNavBar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="http://php.net/" class="navbar-brand"><i>PHP</i></a>
            </div>

            <div class="collapse navbar-collapse" id="mainNavBar">
                <ul class="nav navbar-nav">
                     <li class="izvele"><a href="tests.php" style="color: blanchedalmond; font-size: 16px">Jquery</a></li>
                     <li class="izvele"><a href="index.php" style="color: blanchedalmond; font-size: 16px">Uzdevumu lapa</a></li>
                    
                </ul>
            </div>
        </div>
    </nav>';
    }

}


?>