<?php

error_reporting(E_ALL);

// Kickstart the framework
$f3=require('php/f3/base.php');

if ( (float)PCRE_VERSION < 7.9 )
	trigger_error('PCRE version is out of date');

// Load configuration
$f3->set('DEBUG', 3);
$f3->set('UI', 'views/pets/');

// Custom plugin
$f3->set('file', new File());

// Conexão ao banco de dados
$f3->set('db', new DB\SQL('sqlite:db/pets.sqlite'));


/**
 * Define as rotas
 */
$f3->route('GET /services',
	function($f3, $segments)
	{
		$pagina = $f3->db->exec("select name, subtitle, text from pages where url = '{$segments[0]}' limit 1");
		$f3->set('pagina', reset($pagina));

		$services = $f3->db->exec("select name, description from services");
		$f3->set('services', $services);


		$f3->set('container', "{$segments[0]}.php");
		echo \View::instance()->render('base.php');
	}
);

$f3->route('GET /care',
	function($f3, $segments)
	{
		$pagina = $f3->db->exec("select name, subtitle, text from pages where url = '{$segments[0]}' limit 1");
		$f3->set('pagina', reset($pagina));

		$care = $f3->db->exec("select name, description from care");
		$f3->set('care', $care);


		$f3->set('container', "{$segments[0]}.php");
		echo \View::instance()->render('base.php');
	}
);

$f3->route('GET /home',
	function($f3, $segments)
	{
		$pagina = $f3->db->exec("select name, subtitle, text from pages where url = '{$segments[0]}' limit 1");
		$f3->set('pagina', reset($pagina));

		$banners = $f3->db->exec('select name, img from banners order by num');
		$f3->set('banners', $banners);

		$dogs = $f3->db->exec('select name, photo from adoption where animal_kind="dog" order by random() limit 3');
		$f3->set('dogs', $dogs);

		$cats = $f3->db->exec('select name, photo from adoption where animal_kind="cat" order by random() limit 3');
		$f3->set('cats', $cats);

		$f3->set('container', "{$segments[0]}.php");
		echo \View::instance()->render('base.php');
	}
);

$f3->route('GET /adoption',
	function($f3, $segments)
	{
		$pagina = $f3->db->exec("select name, subtitle, text from pages where url = '{$segments[0]}' limit 1");
		$f3->set('pagina', reset($pagina));

		$adoption = $f3->db->exec('select name, photo from adoption order by id desc');
		$f3->set('adoption', $adoption);


		$f3->set('container', "{$segments[0]}.php");
		echo \View::instance()->render('base.php');
	}
);

$f3->route('GET /contact',
	function($f3, $segments)
	{
		$pagina = $f3->db->exec("select name, subtitle, text from pages where url = '{$segments[0]}' limit 1");
		$f3->set('pagina', reset($pagina));


		$f3->set('container', "{$segments[0]}.php");
		echo \View::instance()->render('base.php');
	}
);


/**
 * Itens com falhar de SQL Injection
 */
$f3->route('GET /services/@name',
	function($f3, $segments)
	{
		$servico = $f3->db->exec("select name, text from services where name = ? LIMIT 1", $segments['name']);
		$f3->set('servico', reset($servico));

		$f3->set('container', "services.description.php");
		echo \View::instance()->render('base.php');
	}
);

$f3->route('GET /care/@name',
	function($f3, $segments)
	{
		$cuidado = $f3->db->exec("select name, text from care where name = ? LIMIT 1", $segments['name']);
		$f3->set('cuidado', reset($cuidado));

		$f3->set('container', "care.description.php");
		echo \View::instance()->render('base.php');
	}
);


/**
 * Formulário
 */
$f3->route('POST /contact/send',
	function ($f3, $segments)
	{
		$file = hash('adler32', $_SERVER['REMOTE_ADDR']);
		$folder = 'uploads/contact/';

		if ( !is_dir($folder) )
			mkdir($folder);

		unset($_POST['send']);

		$h = fopen($folder . $file, 'a+');
		fwrite($h, print_r($_POST, 1));
		fclose($h);

		echo 'Message sent successfuly';
	}
);


/**
 * Formulário
 */
$f3->route('POST /contact/procedure',
	function ($f3, $segments)
	{
		if ( !isset($_POST['code']) )
		{
			header('Location: /contact');
		}

		$procedure = $f3->db->exec("select name from pets where id = '{$_POST['code']}' and ready = 1 LIMIT 1");

		if ( !empty($procedure) )
		{
			echo substr($procedure[0]['name'], 0, 32) . "\nJob finished.";
		}
		else
		{
			echo "Hmm... not yet.\nSend us your request... ;)";
		}
	}
);


/**
 * Custom error
 */
$f3->set('ONERROR',
	function($f3)
	{
		echo \View::instance()->render('errors/error.html');
	}
);


/**
 * Ativa a aplicação
 */
$f3->run();








/*


$f3->db->exec("insert into requests values ('{$_SERVER['REMOTE_ADDR']}', '{$_SERVER['REQUEST_TIME']}')");

$access_log = $f3->db->exec("select ip, timestamp from requests where ip = '{$_SERVER['REMOTE_ADDR']}' order by timestamp asc");

// if ( empty($access_log) )
// {
// 	$f3->db->exec("insert into requests values ('{$_SERVER['REMOTE_ADDR']}', '{$_SERVER['REQUEST_TIME']}')");

// 	include 'routes.php';
// }
// else
// {
if ( count($access_log) >= 10 )
{
	$access_log_first = reset($access_log);
	$access_log_last = end($access_log);

	if ( $access_log_first['timestamp'] - $access_log_last['timestamp'] < 10 )
	{
		$f3->db->exec("delete from requests where ip = '{$_SERVER['REMOTE_ADDR']}' and timestamp = '{$access_log_first['timestamp']}'");
	}
	else
	{
		
	}


	if ( $_SERVER['REQUEST_TIME'] - $access_log['timestamp'] > 15 )
	{
		$f3->db->exec("delete from requests where ip = '{$_SERVER['REMOTE_ADDR']}'");
		header('Location: ' . $_SERVER['REQUEST_URI']);
	}

	$f3->route('GET /@pagina',
		function($f3, $segments)
		{
			echo \View::instance()->render('errors/esperando.php');
		}
	);
// }
*/
