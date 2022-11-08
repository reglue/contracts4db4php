<?php

declare (strict_types = 1);

namespace Reglue\Contracts4db4php;

interface PDOConnectionContract
{
    /**
     * @return \PDO
     */
    public function getPdo();
}
