<?php 
    //creating a dot environment class to use in db_connect.php file
    //code from: (https://www.sourcecodester.com/tutorial/php/16035/load-environment-variables-env-file-using-php-tutorial)
    //get the .env file path
    $env_file_path = realpath(__DIR__."/.env");
    //ensure that the file exists and has no restrictive permissions

?>