<?php

declare(strict_types=1);

namespace Vigihdev\WpCliDbCommand\Command;

final class Db_Info_Command extends Base_Command
{

    public function __construct()
    {
        parent::__construct(name: 'db:info');
    }

    /**
     * @param array $args
     * @param array $assoc_args
     */
    public function __invoke(array $args, array $assoc_args): void {}
}
