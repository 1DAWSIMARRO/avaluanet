<?php
// $data = file_get_contents( "data" ); //$data is now the string '[1,2,3]';

// $data = json_decode( $data ); //$data is now a php array array(1,2,3)

// $data=json_decode($_POST['data']);
// echo $data;

$json = $_POST['data'];
print_r($_POST['data']);
$obj=json_decode($json, true);
echo $obj['NIA'];

?>