<?php

use Vigihdev\WpCliDbCommand\Command\{Db_Info_Command, Export_Data_Db_Command, Export_Structure_Db_Command, Import_Db_Command};

if (! class_exists('WP_CLI')) {
    return;
}

$autoloader = __DIR__ . '/vendor/autoload.php';
if (file_exists($autoloader)) {
    require_once $autoloader;
}

WP_CLI::add_command('db:info', new Db_Info_Command());
WP_CLI::add_command('db:export-data', new Export_Data_Db_Command());
WP_CLI::add_command('db:export-structure', new Export_Structure_Db_Command());
WP_CLI::add_command('db:import', new Import_Db_Command());
