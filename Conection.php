<?php
require_once 'vendor/autoload.php';
/*as Database => puede nombrarse como se desee, se debe tomar como una clase para crear el objeto para addConnection*/
use Illuminate\Database\Capsule\Manager as Database;

$database = new Database;

$database->addConnection([
    'driver'    => 'mysql',
    'host'      => 'localhost',
    'database'  => 'cursophp',
    'username'  => 'php',
    'password'  => 'laboratorio',
    'charset'   => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix'    => '',    
]);

// Make this Capsule instance available globally via static methods... (optional)
$database->setAsGlobal();
// Setup the Eloquent ORM... (optional; unless you've used setEventDispatcher())
$database->bootEloquent();

echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';

$jobs = $database::table('jobs')->get();

/*  Se prueba conexión a la BD Mysql
*   @Autor: Enrique Nuñez
*/
echo $jobs[0]->title;


?>