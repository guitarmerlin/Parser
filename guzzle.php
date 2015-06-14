<?php

 require_once 'vendor/autoload.php';
use Symfony\Component\DomCrawler\Crawler;

 use Guzzle\Http\Client;
 use Guzzle\Http\EntityBody;
 use Guzzle\Http\Message\Request;
 use Guzzle\Http\Message\Response;

  /** @var $client Client */
 $client = new Client("http://holt.by/texnika-dlya-kuxni/myasorubki.html");

 $request = $client->get();
 $response = $request->send();
 $body = $response->getBody(true);
 
 //echo $body;
 
 $crawler = new Crawler($body);


//var_dump($crawler->filter('.browseProductImageContainer:first-child img')->first()->attr('src'));

$linkToLogo = $crawler->filter('.browseProductImageContainer:first-child img')->first()->attr('src');


echo "<img src='$linkToLogo' />";