<?php

declare (strict_types = 1);

namespace Reglue\Contracts4db4php;

interface PDOHandlerContract
{
    /**
     * @return \PDO
     */
    public function getPdo();
}
