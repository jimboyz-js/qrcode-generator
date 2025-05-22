<?php

$file_path = "properties.jimboy";
function parsingFile($file_path){
    //$properties = []; // older 5.4 version of PHP
    $properties = array();

    $handle = fopen($file_path, 'r');
    if($handle){
        while(($line = fgets($handle)) !== false){
            $line = trim($line);

            if(empty($line) || $line[0] === '#'){
                continue;
            }

            $parts = explode('=', $line, 2);
            if(count($parts) === 2){
                $key = trim($parts[0]);
                $value = trim($parts[1]);
                $properties[$key] = $value;
            }
        }

        fclose($handle);
    }

    return $properties;
}

$properties = parsingFile($file_path);

$host = isset($properties['jimboyz.app.serverhost']) ? $properties['jimboyz.app.serverhost'] : null;
$username = isset($properties['jimboyz.app.username']) ? $properties['jimboyz.app.username'] : null;
$password = isset($properties['jimboyz.app.password']) ? $properties['jimboyz.app.password'] : null;
$database_name = isset($properties['jimboyz.app.name']) ? $properties['jimboyz.app.name'] : null;

//$host = $properties['app.serverhost'] ?? null;


$my_connection = new mysqli($host, $username, $password, $database_name, 3306);
if($my_connection->connect_error){
    die('Connection failed '.$my_connection->connect_error);
}  


//$properties = parsingFile($file_path);
//$app_name = $properties['app.name'] ?? null;// older 5.4 version of PHP
//$app_pass = $properties["app.pass"] ?? null;// older 5.4 version of PHP

//echo "App Name: " . $app_name . PHP_EOL;
//echo "App Password: " .$app_pass . PHP_EOL;

?>