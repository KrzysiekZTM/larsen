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

function SortAndDisplayJobOffers($array, $sortBy){
    $sort = array();
    $output = array();
    $outputHTML = "";

    foreach($array as $key => $value){
        $sort[$key] = $value[$sortBy];
    }
    asort($sort);
    $output = array_keys($sort);

    foreach($output as $key => $value){
        $outputHTML .= "<li>"; //List item
        $outputHTML .= "<h5>";
        $outputHTML .= $array[$value]['job'];
        $outputHTML .= "</h5>";
        $outputHTML .= "<p>";
        $outputHTML .= $array[$value]['text'];
        $outputHTML .= "</p>";
        $outputHTML .= "</li>";
    }

    return $outputHTML;
}