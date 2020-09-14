<?php
namespace Facebook\WebDriver; //Definição do namespace

use Facebook\WebDriver\Remote\DesiredCapabilities; //chamada à classe de drivers
use Facebook\WebDriver\Remote\RemoteWebDriver; //chamada à classe de WebDriver

Class FWDriver
{
    public function enviarMensagem($destinatarios, $mensagem)
	{
		require_once('vendor/autoload.php'); //realizando o autoload das classes pelo composer
		$url = 'https://web.whatsapp.com'; // definindo a url
		$host = 'http://localhost:4444/wd/hub'; // Host default
		$capabilities = DesiredCapabilities::chrome(); // escolhendo o driver como chrome
		$driver = RemoteWebDriver::create($host, $capabilities, 5000); // criando uma nova conexão com o driver

		$driver->get($url); // realizando uma requisição HTTP get na $url
		sleep(20);

		//$destinatarios = array('Bruno Guimarães (filho)');

		foreach($destinatarios as $destinatario){
			$destinatarios = $driver->findElement(WebDriverBy::xPath("//span[@title='$destinatario']"));
			sleep(3);
			$destinatarios->click();
		
			$msg = $driver->findElement(WebDriverBy::className("_3uMse"));
			sleep(3);
			$msg->click();
			$msg->sendKeys($mensagem);
		
			$botao_enviar = $driver->findElement(WebDriverBy::xPath("//span[@data-icon='send']"));
			sleep(3);
			$botao_enviar->click();
		}
	}
}