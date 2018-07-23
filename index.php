<?php
//Ex1
$age = 20;

if ($age >= 18)
{
    echo "vous êtes majeur !<br/>";
}else{
    echo "Vous êtes mineurs! <br/>";
}

//Ex2
$isEasy = true;
if($isEasy == 1){
    echo "C'est Facile <br>";
}else{
    echo "C'est Difficile <br/>";
}

//Ex3
$age = 43;
$gender = "Femme";

function ageEtGender ($age, $gender) {
    if($gender == "Homme" AND $age >= 18){
        echo "vous êtes un Homme Majeur! <br/>";
    }else if($gender == "Homme" AND $age < 18){
        echo "vous êtes un Homme Mineur! <br/>";
    }else if($gender == "Femme" AND $age >= 18){
        echo "vous êtes une Femme Majeur! <br/>";
    }else if($gender == "Femme" AND $age < 18){
        echo "vous êtes une Femme Mineur!<br/>";
    }
}
ageEtGender($age, $gender);

//Ex4
$magnitude = 6;
switch ($magnitude) 
{ 
    case 1: 
        echo "Micro-séisme impossible à ressentir.";
    break;
    
    case 2: 
        echo "Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.";
    break;
    
    case 3:
        echo "Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.";
    break;
    
    case 4: 
        echo "Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.";
    break;
    
    case 5:
        echo "Séisme capable d'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes.";
    break;
    
    case 6:
        echo "Fort séisme capable d'engendrer des destructions majeures sur une large distance (180 km) autour de l'épicentre.";
    break;
    
    case 7:
        echo "Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.";
    break; 
    
    case 8:
    echo "Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.";
    break;
    

    default:
        echo "Séisme capable de tout détruire sur une très vaste zone.";
}

//Ex5
//echo ($gender != 'Homme') ? 'C\'est une développeuse !!!' : 'C\'est un développeur !!!';
if($gender != 'Homme'){
    echo "C'est une développeuse !!! <br/>";
}else{
    echo "C'est un développeur !!! <br/>";
}

//EX6
// echo ($age >= 18) ? 'Tu es majeur' : 'Tu n\'es pas majeur';
if($age >= 18) {
    echo "Tu es majeur! <br/>";
}else{
    echo "Tu n'es pas majeur!<br/>";
}

//Ex7
// echo ($isOk == false) ? 'c\'est pas bon !!!' : 'c\'est ok !!';
$isOk = false;
if($isOk){
    echo "c'est pas bon !!!<br/>";
}else{
    echo "c'est ok!! <br/>";
}

//EX8
// echo ($isOk) ? 'c'est ok !!' : 'c'est pas bon !!!';
$isOk = true;
if($isOk){
    echo "c'est ok!! <br/>";
   
}else{
    echo "c'est pas bon !!!<br/>";
    
}



