<?php

/*
|--------------------------------------------------------------------------
| General Error Response - Error Pass Into Arrays
|--------------------------------------------------------------------------
|
| Custom functions for error response handlers
|
*/

function checkError(&$array,$variable,$message){  
    if (trim($variable)==="") {
        array_push($array,$message);
    }
}


/*
|--------------------------------------------------------------------------
| Json Error Response - Echoed Already
|--------------------------------------------------------------------------
|
| Custom functions for Json Error Response
|
*/

function echoJson($response,$message){
   echo json_encode(["response"=>$response,"message"=>$message]); 
}

/*
|--------------------------------------------------------------------------
| Obstart Function
|--------------------------------------------------------------------------
|
| Use Before Any Json Response (prefer being at the top of php page)
|
*/

function obStart(){
    ignore_user_abort();
    set_time_limit(0);
    ob_start();    
}


/*
|--------------------------------------------------------------------------
| Obflush Function
|--------------------------------------------------------------------------
|
| Use Just After Json Echo Response
|
*/

function obFlush(){       
    header("Connection: close");
    header("Content-Length: ".  ob_get_length());
    ob_end_flush();
    ob_flush();
    flush();
    session_write_close();
}

/*
|--------------------------------------------------------------------------
| PHP ver 
|--------------------------------------------------------------------------
|
| Check PHP Version
|
*/

function phpVer(){       
    return phpversion();
}