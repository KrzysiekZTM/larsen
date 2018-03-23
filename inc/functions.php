<?php

function displayLanguages($languagesArray){
    $languageHTML ="";
    foreach($languagesArray as $language){
        $languageHTML .= "<li class='language-item'><img class='language-img' src='img/flags/".$language['img'].".png'><span>".$language['name']."</span></li>";
    }
    return $languageHTML;
}

function displayMobileLanguages($languagesArray){
    $languageHTML = "";
    foreach($languagesArray as $language){
        $languageHTML .= "<img src='img/flags/".$language['img']."-mobile.png'></img>";
    }
    return $languageHTML;
}