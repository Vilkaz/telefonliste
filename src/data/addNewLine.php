<?php
/**
 * Created by IntelliJ IDEA.
 * User: Vilkas
 * Date: 30/11/2016
 * Time: 11:37
 */

$oldData = json_encode(file_get_contents("data.json"));
$emptyAdress = json_decode(" \"adresse\": {
    \"Kind\": \"\",
    \"Festnetz\": \"\",
    \"Mobile\": \"\",
    \"Adresse\": \"\",
    \"E-mail\": \"\",
    \"sonstiges\": \"\"
  }" );

