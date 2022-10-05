<?php 
    $total = 0;
    $nilai1 = 15;
    $nilai2 = 2;
    
    $nilai1Plus = $nilai1;
    $totalSemua = 0;

    for ($i=$nilai2; $i <= 4; $i++) {
        for ($j=$nilai2; $j <= 4; $j++) {
            echo $nilai1Plus . " + " . $i . " = " . ($nilai1Plus + $i) . "<br>";

            $total += $nilai1Plus + $i;
            $nilai1Plus = $nilai1Plus + 1;
        }
        
        echo 'Total : <b>' . $total . '</b><br>';
        $totalSemua += $total;
        $total = 0;

        if ($i == 3) {
            $nilai1Plus = $nilai1 + 2;
        } else {
            $nilai1Plus = $nilai1 + 1;
        }

        echo "<br>";
    }
    
    echo "Total = " . $totalSemua . "<br>";
?>