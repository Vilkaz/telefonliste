<?php
/**
 * Created by IntelliJ IDEA.
 * User: Vilkas
 * Date: 29/11/2016
 * Time: 17:28
 */

$data = $_POST["data"];
$json = json_encode($data);
file_put_contents("data.json",$json);
var_dump($json);