<?php

function aff($paquet) {
    $r = rand(1, 52);
    $i = 1;

    foreach ($paquet as $c=>$couleur) {
        foreach ($couleur as $clé=>$valeur) {
            if ($i == $r)
                echo "<strong>".$c." ".$clé."</strong><br>";
            else
                echo $c." ".$clé."<br>";
            $i++;
        }
        echo "<br>";
    }
}

function createTable() {   
    $i = 1;

    while ($i != 14) {
        if ($i == 1) {
            $paquet['coeur']["as"]="cards/ah.gif";
            $paquet['pique']["as"]="cards/as.gif";
            $paquet['carreau']["as"]="cards/ad.gif";
            $paquet['trèfle']["as"]="cards/ac.gif";
        }
        else if ($i == 10) {
            $paquet['coeur'][$i]="cards/th.gif";
            $paquet['pique'][$i]="cards/ts.gif";
            $paquet['carreau'][$i]="cards/td.gif";
            $paquet['trèfle'][$i]="cards/tc.gif";
        }
        else if ($i == 11) {
            $paquet['coeur']["valet"]="cards/jh.gif";
            $paquet['pique']["valet"]="cards/js.gif";
            $paquet['carreau']["valet"]="cards/jd.gif";
            $paquet['trèfle']["valet"]="cards/jc.gif";
        }
        else if ($i == 12) {
            $paquet['coeur']["reine"]="cards/qh.gif";
            $paquet['pique']["reine"]="cards/qs.gif";
            $paquet['carreau']["reine"]="cards/qd.gif";
            $paquet['trèfle']["reine"]="cards/qc.gif";
        }
        else if ($i == 13) {
            $paquet['coeur']["roi"]="cards/kh.gif";
            $paquet['pique']["roi"]="cards/ks.gif";
            $paquet['carreau']["roi"]="cards/kd.gif";
            $paquet['trèfle']["roi"]="cards/kc.gif";
        }
        else {
            $paquet['coeur'][$i]="cards/".$i."h.gif";
            $paquet['pique'][$i]="cards/".$i."s.gif";
            $paquet['carreau'][$i]="cards/".$i."d.gif";
            $paquet['trèfle'][$i]="cards/".$i."c.gif";
        }
        $i++;
    }
    return $paquet;
}

function arrange($paquet) {
    foreach ($paquet as $c=>$couleur){
        foreach ($couleur as $clé=>$valeur)
            $carte[$c." ".$clé] = $valeur;
    }
    return $carte;
}

function jeu($paquet) {
    $carte = arrange($paquet);
    $randkeys = array_rand($carte, 20);
    $i = 0;

    while ($i < count($randkeys)) {
        echo $randkeys[$i++]." ";
        if ($i % 4 == 0)
            echo "<br>";
    }
}

function jeu_image($paquet) {
    $carte = arrange($paquet);
    shuffle($carte);
    $randkeys = array_rand($carte, 20);
    $i = 0;

    while ($i < count($randkeys)) {
        $image = $carte[$randkeys[$i]];
        print "<img src=".$image." />";
        print $image;
        if (($i+1) % 5 == 0)
            echo "<br>";
        $i++;
    }
}

$carte = createTable();
//aff($carte);
jeu_image($carte);
?>