<?php
    include("classes/template_class.php");
    include("classes/main_class.php");
    $template = new Template_class();
    $main = new Main_class();

?>
<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
         <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php $template->showTitle(); ?> - 12 uzdevumi</title>
        <?php Template_class::getJsLibs(); ?>
        <?php Template_class::getLibs(); ?>

        <script>
            $(document).ready(function(){
              showHideEx("#read1","#result1");
              showHideEx("#read2","#result2");
              showHideEx("#read3","#result3");
              showHideEx("#read4","#result4");
              showHideEx("#read5", "#result5");
              showHideEx("#read6", "#result6");
              showHideEx("#read7", "#result7");
              showHideEx("#read8", "#result8");
              showHideEx("#read9", "#result9");
              showHideEx("#read10", "#result10");
              showHideEx("#read11", "#result11");
              showHideEx("#read12", "#result12");
              //luck("aaaaa");
            });
        </script>

</head>
<body>
    <?php Template_class::getMenu(); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <h3>Uzdevums 1.</h3>
            <p>Noskaidrot, kura php versija ir uzlikta. </p>
            <button id="read1" class="btn btn-primary">Apskatīt rezultātu</button>
            <div id="result1">
                <h3>Rezultāts:</h3>
                <p><?php $main->getPhpVersion(); ?></p>
            </div>

            <h3>Uzdevums 2.</h3>
            <p>Izvadīt uz ekrāna tekstu. </p>
            <button id="read2" class="btn btn-primary">Apskatīt rezultātu</button>
            <div id="result2">
                <h3>Rezultāts:</h3>
                <p><?php $main->showText("Otrais uzdevums izpildīts"); ?></p>
            </div>

            <h3>Uzdevums 3.</h3>
            <p>Saskaitīt divus skaitļus. </p>
            <button id="read3" class="btn btn-primary">Apskatīt rezultātu</button>
            <div id="result3">
                <h3>Rezultāts:</h3>
                <form action="index.php" method="post">
                    <div class="form-group">
                        <label for="email">Skaitlis 1:</label>
                        <input type="text" class="form-control" name="number1"/>
                    </div>
                    <div class="form-group">
                        <label for="pwd">Skaitlis 2:</label>
                        <input type="text" class="form-control" name="number2"/>
                    </div>
                    <button type="submit" class="btn btn-default" name="sum">Aprēķināt summu</button>
                </form>
                <p><?php
                    if(isset($_POST['sum'])){
                        $main->sum($_POST['number1'],$_POST['number2'], "Šo skaitļu summa ir: ");
                    }
                    ?></p>
            </div>

            <h3>Uzdevums 4.</h3>
            <p>Uzrakstīt php skriptu, kas nosaka virknes garumu.Virknes garums vārdam. </p>
            <button id="read4" class="btn btn-primary">Apskatīt rezultātu:</button>
            <div id="result4">
                <h3>Rezultāts:</h3>
                <p><?php $main->showLength("Virkne","Virkens garums ir "); ?></p>
            </div>

            <h3>Uzdevums 5.</h3>
            <p> Dots teikums: „Es mācos programmēt PHP valodā.” Uzrakstīt php skriptu, kas
                nosaka, kurā pozīcijā atrodas mazais un lielais "p" burts. </p>
            <button id="read5" class="btn btn-primary">Apskatīt rezultātu</button>
            <div id="result5">
                <h3>Rezultāts:</h3>
                <p><?php $main->showPos("Mazais p burts atrodas pozīcijā"," p"); ?></p>
                <p><?php $main->showPos("Lielais P burts atrodas pozīcijā"," P"); ?></p>
            </div>

            <h3>Uzdevums 6.</h3>
            <p> Uzrakstīt php skriptu, kas izvada šādi noformatētu tekstu: „<strong>PHP ir php </strong><i>skriptu valoda
                    ar kuras </i> <u> palīdzību tiek veidoti </u><strong>MySql vaicājumi”.</strong>  </p>
            <button id="read6" class="btn btn-primary">Apskatīt rezultātu</button>
            <div id="result6">
                <h3>Rezultāts:</h3>
                <p><?php $main->showDesign(); ?></p>
            </div>

            <h3>Uzdevums 7.</h3>
            <p>Uzrakstīt php skriptu, kas izvada skaitļus no 1 līdz 100 rindā izmantojot gan while,
                gan for ciklus.</p>
            <button id="read7" class="btn btn-primary">Apskatīt rezultātu</button>
            <div id="result7">
                <h3>Rezultāts:</h3>
                <p>Foor loop:</p>
                <p><?php $main->showForLoop(); ?></p>
                <p>While loop:</p>
                <p><?php $main->showWhileLoop(); ?></p>
            </div>

            <h3>Uzdevums 8.</h3>
            <p>Uzrakstīt php skriptu, kas izvada skaitļus no 1 līdz 10 kollonā gan while, gan for
                ciklus.</p>
            <button id="read8" class="btn btn-primary">Apskatīt rezultātu</button>
            <div id="result8">
                <h3>Rezultāts:</h3>
                <p><?php $main->showColumn(); ?></p>
            </div>

            <h3>Uzdevums 9.</h3>
            <p>Uzrakstīt php skriptu, kas atspoguļo switch darbības principu gan skaitļiem, gan
                tekstam.</p>
            <button id="read9" class="btn btn-primary">Apskatīt rezultātu</button>
            <div id="result9">
                <h3>Rezultāts:</h3>
                <p><?php $main->showSwitch(4); ?></p>
                <p><?php $main->showSwitchII("mandarīns"); ?></p>
            </div>

            <h3>Uzdevums 10.</h3>
            <p>Uzrakstīt php skriptu, kas atspoguļo if..., elseif...., else konstrukciju.</p>
            <button id="read10" class="btn btn-primary">Apskatīt rezultātu</button>
            <div id="result10">
                <h3>Rezultāts:</h3>
                <p><?php $main->showIf("Sveiki"); ?></p>
            </div>

            <h3>Uzdevums 11.</h3>
            <p>Uzrakstīt php skriptu, kas uz ekrāna izvada alfabētu.</p>
            <button id="read11" class="btn btn-primary">Apskatīt rezultātu</button>
            <div id="result11">
                <h3>Rezultāts:</h3>
                <p><?php $main->showAlphabet(); ?></p>
            </div>

            <h3>Uzdevums 12.</h3>
            <p>Uzrakstīt php skriptu, kas uz ekrāna izvada ASCII tabulas simbolus un to
                kodus sākot no 127. līdz 64. Piemēram, 127 = •, 26 = ~, 125 = } u.c.</p>
            <button id="read12" class="btn btn-primary">Apskatīt rezultātu</button>
            <div id="result12">
                <h3>Rezultāts:</h3>
                <p><?php $main->showChar(); ?></p>
            </div>

        </div>
        <div class="col-md-2"></div>
    </div>
</div>


</body>
</html>
