<?php
    function bdd(){
        try{
            $bdd = new PDO("mysql:dbname=ugamers;host:localhost", "root", "");
            $bdd->exec("SET NAMES UTF8");
        }
        catch (PDOException $e){
            echo 'Connection echouer'.$e->getMessage();
        }

        return $bdd;
    }
?>