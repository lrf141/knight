<?php

namespace Lrf141\Knight;

use Psr\Container\ContainerInterface;

class Container implements ContainerInterface
{
    protected $define = [];
    protected $share = [];

    /**
     * @var Lrf141\Knight\Definition\DefinitionFactory
     */
    private $definitionFactory;

    public function __construct()
    {
        $this->definitionFactory = new Definition\DefinitionFactory();
    }

    public function add(string $id, string $concrete = null, array $args = [], $share = false)
    {
        unset($this->define[$id]);
        unset($this->share[$id]);

        if (is_null($concrete)) {
            $concrete = $id;
        }

        $definitions = $this->definitionFactory->getDefinition($id, $concrete, $args);
    }

    public function share(string $id, string $concrete = null)
    {
        $this->add($id, $concrete, true);
    }

    public function get($id)
    {
        return null;
    }

    public function has($id): bool
    {
        return false;
    }

    public function hasShare(string $id): bool
    {
        return false;
    }
}
