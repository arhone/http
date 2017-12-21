<?php

include 'HttpInterface.php';
include 'Http.php';
include 'RequestInterface.php';
include 'Request.php';
include 'ResponseInterface.php';
include 'Response.php';

$Request  = new \arhone\http\Request($_SERVER, $_GET, $_POST, $_COOKIE, $_FILES);
$Request->test = 'asd';
$Response = new \arhone\http\Response();
$Http     = new \arhone\http\Http(clone $Request, clone $Response);

function middle1 (\arhone\http\HttpInterface $Http) {
    $Http2 = $Http(clone $Http->Request, clone $Http->Response);

    //file_put_contents('php://memory', 'PHP');
    echo file_get_contents('php://memory'); exit;

    return $Http2;
}
$Http = middle1($Http);

var_dump($Http->Request->test);exit;