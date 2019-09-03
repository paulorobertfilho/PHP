<?php

/**
 * CORE PHP without Framework For Web Artisans
 *
 * @package  General Tekh Web Application
 * @author   Tekh Developers <support@tekhdev.com>
 */

/*
|--------------------------------------------------------------------------
| Create The Application
|--------------------------------------------------------------------------
|
| The first thing we will do is include our web application connection
| in other to reference the web and server root.
|
*/

require_once 'connection.php';

/*
|--------------------------------------------------------------------------
| initialize session and error reporting
|--------------------------------------------------------------------------
|
| error reporting comes first and session is second
|
*/

session_errorReport(false, true);

/*
|--------------------------------------------------------------------------
| Error and initialization
|--------------------------------------------------------------------------
|
| We are requiring the response code and also the error handler code at 
| at this very top in other for all below application to access the 
| constants defined function.
|
*/

require_once SRV_ROOT.'models/error_handler.php';
require_once SRV_ROOT.'models/init.php';

/*
|--------------------------------------------------------------------------
| Load functions
|--------------------------------------------------------------------------
|
*/

require_once SRV_ROOT.'models/function.php';

