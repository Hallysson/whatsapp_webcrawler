<?php
    require 'environment.php';

    $config = array();

    if(ENVIRONMENT == 'development'){
        define("BASE_URL", "http://localhost/whatsapp_webcrawler/");

        $config['dbname'] = 'whatsapp';
        $config['host'] = 'localhost';
        $config['dbuser'] = 'postgres';
        $config['dbpass'] = 'postgres';
    }else{
        define("BASE_URL", "http://localhost/whatsapp_webcrawler/");

        $config['dbname'] = 'whatsapp';
        $config['host'] = 'localhost';
        $config['dbuser'] = 'postgres';
        $config['dbpass'] = 'postgres';
    }

    global $db;

    try{
        $db = new PDO("pgsql:dbname=".$config['dbname'].";host=".$config['host'],$config['dbuser'],$config['dbpass']);
    } catch(PDOException $e){
        echo "ERRO: ".$e->getMessage();
        exit;
    }