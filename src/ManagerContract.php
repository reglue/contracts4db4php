<?php

declare (strict_types = 1);

namespace Reglue\Contracts4db4php;

interface ManagerContract
{
    /**
     * @return BrokerContract
     */
    public function getBroker();

    /**
     * @param string $statement
     * @param array  $bindings
     *
     * @return mixed
     */
    public function execute(string $statement, $bindings = []);

    /**
     * @param string $source
     * @param array  $bindings
     *
     * @return mixed
     */
    public function executeScript(string $source, $bindings = []);

    /**
     * @param  string $file
     *
     * @return string|bool
     */
    public function loadScript($file);

    /**
     * @param  string $file
     *
     * @return array
     */
    public function loadBindings($file): array;

    /**
     * @return array
     */
    public function getScriptLoaders();

    /**
     * @return static
     */
    public function removeScriptLoaders();

    /**
     * @param ScriptLoaderContract $loader
     *
     * @return static
     */
    public function appendScriptLoader(ScriptLoaderContract $loader);

    /**
     * @param ScriptLoaderContract $loader
     *
     * @return static
     */
    public function prependScriptLoader(ScriptLoaderContract $loader);
}
