<?php

namespace Facebook\WebDriver; //Definição do namespace
use Facebook\WebDriver\Remote\DesiredCapabilities; //chamada à classe de drivers
use Facebook\WebDriver\Remote\RemoteWebDriver; //chamada à classe de WebDriver

header("Content-type: text/html; charset=utf-8"); //definindo o cabeçalho para utf-8

require_once('vendor/autoload.php'); //realizando o autoload das classes pelo composer

$url = 'https://google.com'; // definindo a url como a do google

$host = 'http://localhost:4444/wd/hub'; // Host default
$capabilities = DesiredCapabilities::chrome(); // escolhendo o driver como chrome
$driver = RemoteWebDriver::create($host, $capabilities, 5000); // criando uma nova conexão com o driver

$driver->get($url); // realizando uma requisição HTTP get na $url

$pesquisa = $driver->findElement(     //método findElement encontra um elemento do html
    WebDriverBy::name('q')     //WebDriverBy::id definimos aqui o id do elemento
)->sendKeys('Previsão do Tempo'); //método sendKeys "digita" na barra de pesquisa

$pesquisa->sendKeys(array(WebDriverKeys::ENTER)); //método sendKeys enviando um ENTER na pesquisa