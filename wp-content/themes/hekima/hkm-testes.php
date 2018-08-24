<?php
/**
 * Template Name: Template Teste
 */
?>


<div class='wrap'>
    <?php
    $varType = ['margin', 'padding'];
    $varTypeSide = ['top', 'right', 'bottom', 'left'];
    $varTypeNumber = [128, 88, 80, 74, 64, 48, 40, 32, 24, 20, 16, 8, 4, 2];


    $css = "";

    foreach ($varType as $type) {
        $css .= " ." . $type . "{";
        foreach ($varTypeNumber as $number) {
            $css .= " &-" . $number . "{";
            $css .= " " . $type . ":" . $number . "px; ";
            $css .= "}";
        }
        foreach ($varTypeSide as $side) {
            $css .= " &-" . $side . "{";
            foreach ($varTypeNumber as $number) {
                $css .= " &-" . $number . "{";
                $css .= $type . "-" . $side . ":" . $number . "px;";
                $css .= "}";
            }
            $css .= "}";
        }
        $css .= "}";
    }

    echo $css;


    echo "<br/><br/><br/>";

    $varType = ['flex-width'];
    $varTypeNumber = [];
    for ($i = 1; $i <= 100; $i++) {
        array_push($varTypeNumber, $i);

    }

    $flexWidth = "";

    foreach ($varType as $type) {
        $flexWidth .= " ." . $type . "{";
        foreach ($varTypeNumber as $number) {
            $flexWidth .= " &-" . $number . "{";
            $flexWidth .= " width:" . $number . "%; ";
            $flexWidth .= "}";
        }
        $flexWidth .= "}";
    }

    echo $flexWidth;


    ?>
</div>
