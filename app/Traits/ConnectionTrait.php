<?php

namespace Compco\FsTest\Traits;

use Compco\FsTest\Connectors;

trait ConnectionTrait
{
    public function __construct()
    {
        Connectors\Mysql::connect();
    }
}