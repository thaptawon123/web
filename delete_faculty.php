<?php
require_once 'vendor/autoload.php';

use Illuminate\Container\Container;
use Illuminate\Events\Dispatcher;
use Illuminate\Database\Capsule\Manager as Capsule;

// Create a service container
$container = new Container();
$container->instance('events', new Dispatcher($container));

// Create a database manager instance
$db = new Capsule($container);

// Add your database connection
$db->addConnection([
    'driver'    => 'mysql',
    'host'      => 'localhost',
    'database'  => 'wed',
    'username'  => 'root',
    'password'  => '',
    'charset'   => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix'    => '',
]);

// Make this Capsule instance available globally via static methods
$db->setAsGlobal();

// Setup the Eloquent ORM
$db->bootEloquent();

// Delete all faculty records
$db->table('faculties')->truncate();

echo "All faculty records have been deleted.\n";