<?php

namespace Facebook\WebDriver; //Definição do namespace
use Facebook\WebDriver\Remote\DesiredCapabilities; //chamada à classe de drivers
use Facebook\WebDriver\Remote\RemoteWebDriver; //chamada à classe de WebDriver

header("Content-type: text/html; charset=utf-8"); //definindo o cabeçalho para utf-8

require_once('vendor/autoload.php'); //realizando o autoload das classes pelo composer

$url = 'https://web.whatsapp.com'; // definindo a url

$host = 'http://localhost:4444/wd/hub'; // Host default
$capabilities = DesiredCapabilities::firefox(); // escolhendo o driver como firefox
$driver = RemoteWebDriver::create($host, $capabilities); // criando uma nova conexão com o driver

$driver->get($url); // realizando uma requisição HTTP get na $url
sleep(20);

$destinatarios = array('Bruno Guimarães (filho)');

foreach($destinatarios as $destinatario){
    $destinatarios = $driver->findElement(WebDriverBy::xPath("//span[@title='$destinatario']"));
    sleep(3);
    $destinatarios->click();

    $chat_box = $driver->findElement(WebDriverBy::className("_3uMse"));
    sleep(3);
    $chat_box->click();
    echo 'clicou';
    $chat_box->sendKeys("Teste *Firefox*!!");
    echo 'digitou';
    
    $botao_enviar = $driver->findElement(WebDriverBy::xPath("//span[@data-icon='send']"));
    sleep(3);
    $botao_enviar->click();
    echo 'enviou';
}