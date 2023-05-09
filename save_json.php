<?php
$data_json = $_POST['jsonData'];
//save data to json file data.json
file_put_contents('data.json', $data_json);
?>