<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$servername = 'localhost';
$username = 'root';
$password = '';
$port = 10060;
$dbname = 'ichiro';


$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);


$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
