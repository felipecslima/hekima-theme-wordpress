<?php
/**
 * Template Name: Template Teste
 */
?>


<div class='wrap'>
    <?php
    $varType = ['margin', 'padding'];
    $varTypeSide = ['top', 'right', 'bottom', 'left'];
    $varTypeNumber = [128, 88, 80, 74, 64, 48, 40, 32, 20, 16, 8, 4, 2];


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

    ?>
</div>
