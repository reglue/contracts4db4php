<?php

declare (strict_types = 1);

namespace Reglue\Contracts4db4php;

interface ScriptLoaderContract
{
    /**
     * @param string $source
     *
     * @return mixed
     */
    public function load(string $source);

    /**
     * @param string $identifier
     *
     * @return array
     */
    public function getBindings($identifier): array;
}
