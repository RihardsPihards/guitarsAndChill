<?php
class Main_class
{

    function getPhpVersion()
    {
        echo phpversion();
    }

    function showText($text)
    {
        echo $text;
    }

    function sum($number1, $number2, $msg)
    {
        $result = $number1 + $number2;
        echo $msg . " " . $number1 . "+" . $number2 . "=" . $result;
    }

    function showLength($string, $msg)
    {
        echo "<b>" . $msg . "</b>" . strlen($string);
    }

    function showPos($msg, $pos)
    {
        $text = "Es mācos programmēt PHP valodā";
        echo "<b>" . $msg . "</b>" . " " . strpos($text, $pos);
    }

    function showDesign()
    {
        echo "<p><strong>``PHP ir php </strong><i>skriptu valoda
                    ar kuras </i> <u> palīdzību tiek veidoti </u><strong>MySql vaicājumi”.</p>";
    }

    function showForLoop()
    {
        for ($i = 1; $i <= 100; $i = $i + 1) {
            print $i;
            echo " ";
        };
    }

    function showWhileLoop()
    {
        $x = 1;
        while ($x <= 100) {

            print $x;
            echo " ";
            $x++;
        }
    }

    function showColumn()
    {
        ?>

        <table>
            <?php
            for ($a = 1; $a <= 10; $a = $a + 1) {
                ?>
                <tr>
                    <td><?php echo $a; ?></td>
                    <td><?php echo $a; ?></td>
                    <td><?php echo $a; ?></td>
                </tr>

            <?php }; ?>


        </table>

        <?php

    }

    function showSwitch($myNum)
    {

        switch ($myNum) {
            case 1:
                echo "Jūsu meklētais skaitlis tika atrasts";
                break;
            case 2:
                echo "Jūsu meklētais skaitlis tika atrasts";
                break;
            case 3:
                echo "Jūsu meklētais skaitlis tika atrasts";
                break;
            default:
                echo "Neviens no skaitļiem netika atrasts";
        }
    }

    function showSwitchII($z) {
        switch ($z):
            case "mandarīns":
                echo "Jūsu auglis ir šajā sarakstā";
                break;
            case "apelsīns":
                echo "Jūsu auglis ir šajā sarakstā";
                break;
            default:
                echo "<p>Auglis $z sarakstā nav!</p>";
        endswitch;
    }

        function showIf($Hello){

            if (strlen($Hello) < 4) {
                echo "<p>Mainīgā Hello vērtība ir mazāka par 4</p>";
            } elseif (strlen($Hello) > 4) {
                echo "Mainīgā Hello vērtība ir lielāka par 4";
            } else {
                echo "brrrrrrrrrrrrrrrrrrrrrrrr";

            }
        }

        function showAlphabet(){
            $alfabets = range('A', 'Z');
            foreach ($alfabets as $letter) {
                print("<p>$letter\n</p>");
            }
        }

        function showChar(){
            for ($char = 127; $char >= 64; $char --) {
                echo  ("<strong>$char</strong> = ").chr("$char"); echo " ".", ";


            }
        }

}
?>
