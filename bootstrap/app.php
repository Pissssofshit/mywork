<?php

/*
|--------------------------------------------------------------------------
| Create The Application
|--------------------------------------------------------------------------
|
| The first thing we will do is create a new Laravel application instance
| which serves as the "glue" for all the components of Laravel, and is
| the IoC container for the system binding all of the various parts.
|
*/
//require 'vendor/autoload.php';
use \LeanCloud\Client;
// 参数依次为 AppId, AppKey, MasterKey
Client::initialize("Ijo7J97Lu8xQbEn4g2ENMXje-gzGzoHsz", "SzmavvPfPE8bERMG8c5PdHEc", "X4wckDrl71e60FFHj6PuGdPz");
Client::setServerUrl("https://ijo7j97l.api.lncld.net"); // 0.7.0 及以上版本支持
Client::setDebug(true);

$app = new Illuminate\Foundation\Application(
    realpath(__DIR__.'/../')
);


$envmark_file = realpath(__DIR__.'/../') . "/envmark.txt";
if (file_exists($envmark_file)) {
	$envmark = trim(file_get_contents($envmark_file));
	$envend = ".env.development";
	switch ($envmark){
		case "production":
			$envend = ".env";
			break;
		case "test":
			$envend = ".envtest";
			break;
		case "development":
			$envend = ".envdevelopment";
			break;
		case "pre":
			$envend = ".envpre";
			break;
		default:
			$envend = ".envdevelopment";
			break;
	}

	if (empty($_POST)) {
		ob_start();
		echo "<div style='color:red'>Current Runtime Enviroment: < $envmark >; Load Config File: < $envend ></div>";
	}
	$app->loadEnvironmentFrom($envend);
}

/*
|--------------------------------------------------------------------------
| Bind Important Interfaces
|--------------------------------------------------------------------------
|
| Next, we need to bind some important interfaces into the container so
| we will be able to resolve them when needed. The kernels serve the
| incoming requests to this application from both the web and CLI.
|
*/

$app->singleton(
    Illuminate\Contracts\Http\Kernel::class,
    App\Http\Kernel::class
);

$app->singleton(
    Illuminate\Contracts\Console\Kernel::class,
    App\Console\Kernel::class
);

$app->singleton(
    Illuminate\Contracts\Debug\ExceptionHandler::class,
    App\Exceptions\Handler::class
);

/*
|--------------------------------------------------------------------------
| Return The Application
|--------------------------------------------------------------------------
|
| This script returns the application instance. The instance is given to
| the calling script so we can separate the building of the instances
| from the actual running of the application and sending responses.
|
*/

return $app;
