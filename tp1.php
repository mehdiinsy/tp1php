<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!--
//     $anneeScolaire = [ 
//         "Rentrée" => [5,9,2016], 
//     "Vacances Toussaint" => [ 
//         "début" => [22,10,2016], 
//         "fin" => [30,10,2016]
//         ], 
//     "Vacances Noël" =>[
//          "début" => [17,12,2016], 
//          "fin" => [2,1,2017] 
//         ],
//     "Vacances d'hiver" =>[ 
//         "début" => [11,2,2017], 
//         "fin" => [19,2,2017] 
//         ], 
//     "Vacances de printemps" =>[ 
//         "début" => [1,4,2017], 
//         "fin" => [9,4,2017] 
//         ], 
//     "Fin des cours" => [8,7,2017] 
// ];
// echo "<ul>";
// foreach($anneeScolaire as $k=>$v){
//     echo "<li> $k :";
//     if(count($v) == 3){
//         echo implode("/",$v) . "</li>";
//     }else{
//             echo " du " . implode("/",$v["début"]) . " au " . implode("/",$v["fin"]) . "</li>";   
//     }
// }
// echo "</ul>";
// =================================================================
//ex7

// $joueurs = [
//     ['nom' => 'Mehwish', 'score' => 150], 
//     ['nom' => 'Laurent', 'score' => 120], 
//     ['nom' => 'Ines', 'score' => 98], 
//     ['nom' => 'Sondes', 'score' => 153], 
//     ['nom' => 'Davide', 'score' => 118] 
// ]; 
// function meilleur_joueur($tab){
//     $max= 0;
//     $nom= '';
//     $t= [];
//     foreach($tab as $v){
//         if($max < $v['score']){
//             $max = $v['score'];
//             $nom = $v['nom'];
//         }
//     }
//     $t['nom'] = $nom;
//     $t['score'] = $max;
//     return $t;
// };
// print_r(meilleur_joueur($joueurs));
?>
-->
<!-- <form action="tp1.php" method="get">

<fieldset>
    <legend> taille pizza</legend>


<p><label><input type="radio" name="taille" value="small"/>small</label></p>
<p><label><input type="radio" name="taille" value="medium"/>medium</label></p>
<p><label><input type="radio" name="taille" value="large"/>large</label></p>
<input type="submit">
</fieldset>
<p> vous avez commandé une pizza
<?php if(isset($_REQUEST['taille'])){
    echo $_REQUEST['taille'];
}else{
    echo"<p>veuillez valider une taille de pizza</p>";
}
?>
</p>

</form> -->
<form action="tp1.php" method="get">
<fieldset>
    <legend> Pizza  composition</legend>
    <input  type="checkbox" name="compo[]" value="tomate"/>Tomate
    <input  type="checkbox" name="compo[]" value="fromage"/> Fromage
    <input  type="checkbox" name="compo[]" value="olive"/>olive <br>
    <input  type="checkbox" name="compo[]" value="champignon"/>Champignon
    <input  type="checkbox" name="compo[]" value="oeufs"/>oeufs
    <input  type="checkbox" name="compo[]" value="viande"/>viande
    <input type="submit">
</fieldset>
<p>Votre commande de pizza
    <?php if(isset($_REQUEST['compo'])){
        $c =count($_REQUEST['compo']);  
        echo"(";
        for ($i = 0 ; $i < $c; $i++){
            echo$_REQUEST['compo'][$i]." ";}
            echo")";
            }
            ?></p>
            </form>
            <form action="tp1.php" method="get">
            <fieldset>
    <legend> Pizza  composition</legend>
    <select name="base[]" id="" multiple>
    <option  type="checkbox" name="base[]" value="base tomate"/> base Tomate
    <option  type="checkbox" name="base[]" value="base creme fraiche"/> base creme fraiche
    </select>
    <input type="submit">
</fieldset>
    <p>base
    <?php if(isset($_REQUEST['base'])){
        $c =count($_REQUEST['base']);  
        echo"(";
        for ($i = 0 ; $i < $c; $i++){
            echo$_REQUEST['base'][$i]." ";}
            echo")";
            }
            ?></p>
</form>

<h3>pizza la carte</h3>

<form action="tp1.php" method="get">
            <fieldset>
    <legend> Pizza  composition</legend>
    <select name="carte[]" id="" multiple>
    <option  type="checkbox" name="carte[]" value="margarita"/> margarita
    <option  type="checkbox" name="carte[]" value="calzone"/> calzone
    <option  type="checkbox" name="carte[]" value="orientale"/> orientale
    <option  type="checkbox" name="carte[]" value="norvegienne"/> norvegienne
    <option  type="checkbox" name="carte[]" value="fermiere"/>fermiere 
    <option  type="checkbox" name="carte[]" value="regina"/> regina
    <option  type="checkbox" name="carte[]" value="buffalo"/> buffalo
    <option  type="checkbox" name="carte[]" value="raclette"/> raclette
    <option  type="checkbox" name="carte[]" value="4fromage"/> 4fromage
    <option  type="checkbox" name="carte[]" value="indienne"/> indienne
    <option  type="checkbox" name="carte[]" value="mexicaine"/> mexicaine
    <option  type="checkbox" name="carte[]" value="thon"/> thon
    <option  type="checkbox" name="carte[]" value="chevre miel"/> chevre miel
    <option  type="checkbox" name="carte[]" value="4saisons"/>4saisons
    <option  type="checkbox" name="carte[]" value="frenchy"/>frenchy
    </select>
    <input type="submit">
</fieldset>
    <p>base
    <?php if(isset($_REQUEST['carte'])){
        $c =count($_REQUEST['carte']);  
        echo"(";
        for ($i = 0 ; $i < $c; $i++){
            echo$_REQUEST['carte'][$i]." ";}
            echo")";
            }
            ?></p>
</form>

<form action="tp1.php" method="get">
<p><input  type="submit"  name="cal"  value="+"/></p>
<p><input  type="submit"  name="cal"  value="-"/></p>
<p><input  type="submit"  name="cal"  value="*"/></p>
<p><input  type="submit"  name="cal"  value="/"/></p>
<p><input  type="submit"  name="cal"  value="%"/></p>
<p><input  type="number"  name="x"/></p>
<p><input  type="number"  name="y"/></p>
<?php
$x=$_REQUEST['x'];
$y=$_REQUEST['y'];
switch ($_REQUEST['cal'])  {
      case"+": echo$x+$y; 
      break;
      case"-":  echo$x-$y;  
      break;
      case"*":  echo$x*$y;  
      break;
      case"/":  echo$x/$y;  
      break;
      case"%":  echo$x/$y;  
      break;
      }
      ?>
      </form>






</body>
</html>