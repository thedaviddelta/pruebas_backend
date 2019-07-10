<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST,GET,OPTIONS');
header('Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept');
header('Content-Type: application/json');

$caps = file("capitales.txt", FILE_IGNORE_NEW_LINES);

/*
$json = "[";
$first = true;
foreach($caps as $c){
    if (substr($c, 0, strlen($_POST['sort'])) === $_POST['sort']) {
        if ($first) 
            $first = false;
        else
            $json .= ",";
        $json .= str_replace("\r\n", "", $c);
    }
}
$json .= "]";
*/

$json = array_filter($caps, function($c){
    return substr($c, 0, strlen($_POST['sort'])) === $_POST['sort'];
});

$json = array_values($json);
echo json_encode($json);
?>