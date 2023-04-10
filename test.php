<?php

require_once 'vendor/autoload.php';
require_once 'app/config/database.php';

use Illuminate\Database\Capsule\Manager as Capsule;

try {
    Capsule::connection()->getPdo();
    echo "Conexión exitosa a la base de datos.";
} catch (\Exception $e) {
    die("No se pudo conectar a la base de datos: " . $e->getMessage());
}

?>