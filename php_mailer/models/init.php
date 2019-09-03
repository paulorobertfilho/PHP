<?php

/*
|--------------------------------------------------------------------------
| Json & Error Response Code init
|--------------------------------------------------------------------------
|
| Defined contants for Json & Error response code
|
*/

function initErrorResponse() {
    define("ERROR_RESPONSE", 0);
    define("RESPONSE_WARNING", 1);
    define("RESPONSE_SUCCESS", 0);
}

/*
|--------------------------------------------------------------------------
| Email Templates Headings init
|--------------------------------------------------------------------------
|
| Defined contants for email heading
|
*/

function initEmailHeadings() {
    //Email Headings
    define("SUBJECT", "Course Completed");
}

/*
|--------------------------------------------------------------------------
| IIFE
|--------------------------------------------------------------------------
|
| Imediately invoked function (Start now)
|
*/

call_user_func(function () {
    initErrorResponse();
    initEmailHeadings();
});

/*
|--------------------------------------------------------------------------
| AJAX Call
|--------------------------------------------------------------------------
|
| Imediately invoked function
|
*/


function ajaxConfig(){
    global $domain;
    
    $ext = ".php";
    $res_warning = RESPONSE_WARNING;
    $res_success = RESPONSE_SUCCESS;

    echo "
    <script>
        var DOMAIN = '$domain';
        var HANDLER = '$domain/controllers/';
        var ENV= '$ext';

        var ERROR_WARNING = $res_warning; 
        var RESPONSE_SUCCESS = $res_success;
    </script>
    ";
}