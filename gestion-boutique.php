<?php

$articles = ["Chausettes","T-shirts","Chaussures","Pantalons","Chemises"];
for($i = 0;$i < count($articles);$i ++){
    echo $articles[$i] . ' ';
}

echo PHP_EOL;

foreach($articles as $article){
    echo $article . ' ';
}

$stock = [10,5,8,3,12];

echo PHP_EOL;

for($j = 0;$j < count($articles);$j ++){
    echo $articles[$j] . ' ' . $stock[$j] . ',';
}

echo PHP_EOL;

$articledmd = readline("Saisir un index d'article : ");
$quantitedmd = readline("Saisir la quantité voulue : ");

echo PHP_EOL;

if($stock[$articledmd] >= $quantitedmd){
    $quantiteVendue = $stock[$articledmd] - $quantitedmd;
    $stock[$articledmd] = $quantiteVendue;
    echo "La vente est possible,stock suffisant ,il reste maintenant $stock[$articledmd] exemplaire de cet article.";
    }else{
        echo "La vente est impossible,stock insuffisant ,il reste seulement $stock[$articledmd] exemplaire de cet article.";
    }

echo PHP_EOL;

$indexReappro = readline("Saisir l'index de l'article à réapprovisionner : ");
$quantiteReappro = readline("Saisir la quantité à ajouter : ");

$stock[$indexReappro] = $stock[$indexReappro] + $quantiteReappro;

echo "Il y a $stock[$indexReappro] exemplaire en stock";

echo PHP_EOL;

for($k = 0;$k < count($articles);$k ++){
    if($stock[$k] == 0){
        echo "$articles[$k] est en rupture de stock".' ';
    }else{
        echo "$stock[$k] $articles[$k]".' ';
    }
}

$nbVente =[0,0,0,0,0];

if($articledmd == 0 || $articledmd == 1 || $articledmd == 2 || $articledmd == 3 || $articledmd == 4 ){
    $nbVente[$articledmd] = $nbVente[$articledmd] + $quantitedmd;
}

echo PHP_EOL;

for($l = 0;$l < count($articles);$l ++){
    echo $articles[$l] . ' ' . $nbVente[$l];
}

$suppArticle = readline("\nSaisir l'index de l'article à retirer de la boutique :");

unset($articles[$suppArticle]);
unset($stock[$suppArticle]);
$articles = array_values($articles);
$stock = array_values($stock);

for($m = 0;$m < count($articles);$m ++){
    echo $stock[$m].' '.$articles[$m].' ';
}













