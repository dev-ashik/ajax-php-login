<?php
    $host="localhost";
    $port="3306";
    $dbname="task";
    $user="root";
    $sn="";

    $dbh = new PDO("mysql: host=$host; port=$port; dbname=$dbname", "$user", "$sn");
?>