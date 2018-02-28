<?php
/**
 * Created by PhpStorm.
 * User: omar.bautista
 * Date: 27/02/2018
 * Time: 5:06 PM
 */
$document = '';
$rowAnswers = '';
for ($i=4; $i <= $length+1; $i++) {
    if ($document != $matrix[$i][1]) {
        if($document != '') {
            foreach ($rowAnswers as $answer) {
                echo '<td>'.$answer.'</td>';
            }
            echo '</tr>';
        }
        $document = $matrix[$i][1];
        echo '<tr>';
        for ($j=1; $j <= $lenBasicHeaders; $j++) {
            echo '<td>'.utf8_encode($matrix[$i][$j]).'</td>';
        }
        $rowAnswers = array_fill_keys($questionHeaders, '');
    }
    $questionHeader = $matrix[$i][$lenBasicHeaders+1];
    if (isset($matrix[$i][$lenBasicHeaders+2])) {
        $rowAnswers[$questionHeader] = utf8_encode($matrix[$i][$lenBasicHeaders+2]);
    } else {
        $rowAnswers[$questionHeader] = '';
    }
}
foreach ($rowAnswers as $answer) {
    echo '<td>'.$answer.'</td>';
}
echo '</tr>';