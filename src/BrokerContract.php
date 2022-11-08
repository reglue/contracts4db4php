<?php

declare (strict_types = 1);

namespace Reglue\Contracts4db4php;

interface BrokerContract
{
    /**
     * @return string
     */
    public function getDriver();

    /**
     * @return mixed
     */
    public function getHandler();

    /**
     * Execute an SQL statement and return mixed result.
     * The returned result depends on the handler
     *
     * @param  string $statement
     * @param  array  $bindings
     *
     * @return mixed
     */
    public function execute(string $statement, $bindings = []);
}
