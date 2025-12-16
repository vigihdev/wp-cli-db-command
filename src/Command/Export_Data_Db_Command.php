<?php

declare(strict_types=1);

namespace Vigihdev\WpCliDbCommand\Command;

final class Export_Data_Db_Command extends Base_Export_Command
{
    public function __construct()
    {
        parent::__construct(name: 'db:export-data');
    }

    /**
     * @param array $args
     * @param array $assoc_args
     */
    public function __invoke(array $args, array $assoc_args): void {}
}
