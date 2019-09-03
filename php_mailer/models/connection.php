<?php

/*
|--------------------------------------------------------------------------
| Create Web Root Application
|--------------------------------------------------------------------------
|
| The first thing we will do is create the dir to this file path
| which serves as the "domain and doc root".
|
*/

$thisFile = str_replace("\\", "/", __FILE__);
$docRoot = $_SERVER["DOCUMENT_ROOT"];

/*
|--------------------------------------------------------------------------
| Creating a web and server root realpath 
|--------------------------------------------------------------------------
|
| Next, we need to get the file dir and also the doc root dir for linking
| our abs web files.
|
*/

$webRoot = str_replace([$docRoot,"models/connection.php"], "", $thisFile);
$srvRoot = str_replace("models/connection.php", "", $thisFile);

/*
|--------------------------------------------------------------------------
| Defining our constants for both web and server
|--------------------------------------------------------------------------
|
| Here we need to define a contants to hold both the server and webroot
| for our entire project, in other to use this constants inside and out
| fof a function or classes.
|
*/

define("WEB_ROOT",$webRoot);
define("SRV_ROOT",$srvRoot);

/*
|--------------------------------------------------------------------------
| HTTP Server connecton request
|--------------------------------------------------------------------------
|
| Here we will create a function to get our absolute weblink address 
| so we can use as our domain and detect http protocol type.
|
*/

function serverConnect(){
    if (isset($_SERVER["HTTPS"]) && $_SERVER["HTTPS"] === "on") {
        $serverURL = "https://".$_SERVER["HTTP_HOST"].WEB_ROOT;
    }
    else{
        $serverURL = "http://".$_SERVER["HTTP_HOST"].WEB_ROOT;
    }
    
    return substr($serverURL, -1) === "/" ? rtrim($serverURL,"/") : $serverURL;
}

/*
|--------------------------------------------------------------------------
| Session and Error reporting
|--------------------------------------------------------------------------
|
| custom session and error reporting
|
*/

function session_errorReport($session, $error_reporting) {
    if ($session) {
        session_start();
    }
    
    if ($error_reporting) {
        error_reporting();
    }
    else{
        error_reporting(0);
    }
}

/*
|--------------------------------------------------------------------------
| Returning the domain and pass into a global var $domain
|--------------------------------------------------------------------------
|
| We're returning the https connection and placed into a global var
| to be used allover the entire project.
|
*/

global $domain;
$domain = serverConnect();

global $siteName;
$siteName = 'Tekh Devlopers';







