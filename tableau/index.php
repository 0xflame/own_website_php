<?php

function rec($n){
    if ($n < 0)
        return -1;
    if ($n == 0)
        return 1;
    return $n*rec($n-1);
} 

function tab($nbcol, $nbran, $couleur, $modulo){
    $str = "<table border=\"1\">";
    $i = 0;
    $j = 0;

    while ($i++ < $nbran-1){
        $str .= "<tr height=\"25\">";
        while ($j++ < $nbcol-1) {
            if ($i % $modulo == 0)
                $str .= "<td width=\"10\" bgcolor=\"$couleur\"></td>";
            else
                $str .= "<td width=\"3\"></td>";
        }
        $j=0;
        $str .= "</tr>";
    }
    $str .= "</table>";
    return $str;
}

$num = rand(1, 8);

echo "la factorielle de $num est ".rec($num);
echo "<br>";
echo "mon tableau\n" .tab(5, 10, "ff00cc", 2);

?>