<?php
namespace Facebook\WebDriver; //Definição do namespace

use Facebook\WebDriver\Remote\DesiredCapabilities; //chamada à classe de drivers
use Facebook\WebDriver\Remote\RemoteWebDriver; //chamada à classe de WebDriver

Class FWDriverFirefox
{
    public function enviarMensagem($destinatarios, $mensagem)
	{
		// Geckodriver:
		// java -Dwebdriver.gecko.driver="/opt/lampp/htdocs/whatsapp_webcrawler/geckodriver" -jar selenium-server-standalone-3.141.59.jar
		require_once('vendor/autoload.php'); //realizando o autoload das classes pelo composer
		$url = 'https://web.whatsapp.com'; // definindo a url
		$host = 'http://localhost:4444/wd/hub'; // Host default Geckodriver
		//$driver = RemoteWebDriver::create($host, DesiredCapabilities::firefox()); // Driver Firefox
		$capabilities = DesiredCapabilities::firefox(); // escolhendo o driver como Firefox
		//$capabilities->setCapability('acceptSslCerts', false); // Disable accepting SSL certificates
		//$capabilities->setCapability('moz:firefoxOptions', ['args' => ['-headless']]); // Run headless firefox
		$driver = RemoteWebDriver::create($host, $capabilities); // criando uma nova conexão com o driver

		$driver->get($url); // realizando uma requisição HTTP get na $url
		sleep(20);

		//$destinatarios = array('Bruno Guimarães (filho)');

		foreach($destinatarios as $destinatario){
			$destinatarios = $driver->findElement(WebDriverBy::xPath("//span[@title='$destinatario']"));
			sleep(2);
			$destinatarios->click();
		
			$msg = $driver->findElement(WebDriverBy::className("_3uMse"));
			sleep(1);
			$msg->click();
			$msg->sendKeys($mensagem);
		
			$botao_enviar = $driver->findElement(WebDriverBy::xPath("//span[@data-icon='send']"));
			sleep(1);
			$botao_enviar->click();
		}
	}
}