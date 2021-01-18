<?php
/**
 * elasticsearch 服务接口测试
 */

require_once "vendor/autoload.php";

use GuzzleHttp\Client;

$client = new Client();


$elasticSearchHost = 'http://127.0.0.1:9200';

// list
$res = $client->get($elasticSearchHost . '/_cat/indices?v');
var_dump($res->getBody()->getContents());

// create index
//$res1 = $client->put($elasticSearchHost . '/customer?pretty');
//var_dump($res1->getBody()->getContents());

// put something into index
//$res2 = $client->put($elasticSearchHost . '/customer/doc/1?pretty', [
//    'headers' => [
//        'Content-Type' => 'application/json',
//    ],
//    'body' => '{"name":"John Doe1"}',
//    'http_errors' => false,
//    ]);
//var_dump($res2->getBody()->getContents());


// see the document
//$res3 = $client->get($elasticSearchHost . '/customer/doc/1?pretty');
//var_dump($res3->getBody()->getContents());

// delete index
$res4 = $client->delete($elasticSearchHost . '/customer?pretty');
var_dump($res4->getBody()->getContents());

// see list again
$res5 = $client->get($elasticSearchHost . '/_cat/indices?v');
var_dump($res5->getBody()->getContents());

