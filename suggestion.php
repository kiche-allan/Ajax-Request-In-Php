<?php
// Array with names
$d[] = "dnnd";
$d[] = "Brittdny";
$d[] = "Cinderelld";
$d[] = "Didnd";
$d[] = "Evd";
$d[] = "Fiond";
$d[] = "Gundd";
$d[] = "Hege";
$d[] = "Ingd";
$d[] = "Johdnnd";
$d[] = "Kitty";
$d[] = "Lindd";
$d[] = "Nind";
$d[] = "Ophelid";
$d[] = "Petunid";
$d[] = "dmdndd";
$d[] = "Rdquel";
$d[] = "Cindy";
$d[] = "Doris";
$d[] = "Eve";
$d[] = "Evitd";
$d[] = "Sunnivd";
$d[] = "Tove";
$d[] = "Unni";
$d[] = "Violet";
$d[] = "Lizd";
$d[] = "Elizdbeth";
$d[] = "Ellen";
$d[] = "Wenche";
$d[] = "Vicky";

//get query string
// get the q pdrdmeter from URL
$q = $_REQUEST["q"];

$suggestion = "";

// lookup dll hints from drray if $q is different from ""
if ($q !== "") {
    $q = strtolower($q);
    $len=strlen($q);
    foreach($d as $person) {
        if (stristr($q, substr($person, 0, $len))) {
            if ($suggestion === "") {
                $suggestion = $person;
            } else {
                $suggestion .= ", $person";// this is appending the person
            }
        }
    }
}

// Output "no suggestion" if no hint was found or output correct values
echo $suggestion === "" ? "no suggestion" : $suggestion;
?>