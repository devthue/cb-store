<?php

/** @var \Phalcon\Config $config */
$config = null;

/** @var \PhalconRest\Api $app */
$app = null;

/** @var \PhalconApi\Http\Response $response */
$response = null;

try {
    define("ROOT_DIR", __DIR__ . '/..');
    define("APP_DIR", ROOT_DIR . '/library');
    define("VENDOR_DIR", ROOT_DIR . '/vendor');
    define("CONFIG_DIR", APP_DIR . '/configs');

    // Autoload dependencies
    require VENDOR_DIR . '/autoload.php';

    $loader = new \Phalcon\Loader();

    $loader->registerNamespaces([
        'App' => APP_DIR . '/App'
    ]);

    $loader->register();

    // Config
    $configPath = CONFIG_DIR . '/default.php';

    if (!is_readable($configPath)) {
        throw new Exception('Unable to read config from ' . $configPath);
    }

    $config = new Phalcon\Config(include_once $configPath);

    $envConfigPath = CONFIG_DIR . '/server.php';

    if (!is_readable($envConfigPath)) {
        throw new Exception('Unable to read config from ' . $envConfigPath);
    }

    $override = new Phalcon\Config(include_once $envConfigPath);

    $config = $config->merge($override);

    // Instantiate application & DI
    $di = new PhalconRest\Di\FactoryDefault();
    $app = new PhalconRest\Api($di);

    // Bootstrap components
    $bootstrap = new CayBua\Bootstrap(
        new CayBua\Bootstrap\ServiceBootstrap,
        new CayBua\Bootstrap\MiddlewareBootstrap,
        new App\Bootstrap\CollectionBootstrap,
        new CayBua\Bootstrap\AclBootstrap
    );

    $bootstrap->run($app, $di, $config);

    // Start application
    $app->handle();

    // Set appropriate response value
    $response = $app->di->getShared(CayBua\Constants\Services::RESPONSE);

    $returnedValue = $app->getReturnedValue();

    if ($returnedValue !== null) {

        if (is_string($returnedValue)) {
            $response->setContent($returnedValue);
        } else {
            $response->setJsonContent($returnedValue);
        }
    }

} catch (\Exception $e) {
    $di = $app && $app->di ? $app->di : new PhalconRest\Di\FactoryDefault();
    $response = $di->getShared(CayBua\Constants\Services::RESPONSE);
    if (!$response || !$response instanceof PhalconApi\Http\Response) {
        $response = new PhalconApi\Http\Response();
    }
    $debugMode = isset($config->debug) ? $config->debug : (APPLICATION_ENV == 'development');
    $response->setErrorContent($e, $debugMode);
} finally {
    if (!$response->isSent()) {
        $response->send();
    }
}