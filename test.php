<?php

require_once("vendor\autoload.php");


use Symfony\Component\DomCrawler\Crawler;

$adress = 'http://www.tut.by/';




$ch = curl_init($adress);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HEADER, 0);
$result = curl_exec($ch);
curl_close($ch);

//print($result);



$crawler = new Crawler($result);



//var_dump($crawler->filter('#pageLogo')->attr('src'));

$linkToLogo = $crawler->filter('#pageLogo')->attr('src');


echo "<img src='$linkToLogo' />";

