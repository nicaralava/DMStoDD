<?php
function DDtoDMS($dd)
{
    $d = intval(abs($dd));
    $m = intval(($dd - $d) * 60);
    $s = intval(($dd - $d - $m/60) * 3600);
    return array("deg"=>intval($d),"min"=>intval($m),"sec"=>intval($s));
}

function DMStoDD($deg,$min,$sec,$cardinaux,$coordonnee)
{
    $dd = $deg+($min/60)+($sec/3600);
    $_dd = -$dd;
    if ($coordonnee == 'lat'){
        if($cardinaux == 'N'){
            return $dd;
        }
        if($cardinaux == 'S'){
            return $_dd;
        }
    }
    if ($coordonnee == 'long'){
        if($cardinaux == 'E'){
            return $dd;
        }
        if($cardinaux == 'O'){
            return $_dd;
        }
    }
}