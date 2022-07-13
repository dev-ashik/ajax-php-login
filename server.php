<?php
include("mysql_connect.php");

    if(isset($_GET["name"]) && isset($_GET["tele"])) {
        $name = $_GET["name"];
        $tele = $_GET["tele"];

        if($name != "" && $tele != "") {
            $result = $dbh->query("select * from user_info where name = '$name' AND tele='$tele' ");

            $found = "no";

            while($row=$result->fetch()){
                $found = "yes";
            }

            echo $found;
        }else {
            echo "please write your Name and Telephone number";
        }
    };

    if(isset($_POST["name"]) && isset($_POST["tele"])) {
        $name = $_POST["name"];
        $tele = $_POST["tele"];

        if($name != "" && $tele != "") {
            $result = $dbh->query("INSERT INTO `user_info`(`name`, `tele`) VALUES ('$name','$tele')");

            $dataInsert = "successful";

            while($row=$result->fetch()){
                $dataInsert = "failed";
            }

            echo $dataInsert;
        }
        else {
            echo "please write your Name and Telephone number";
        }
    };


    
    
    
?>