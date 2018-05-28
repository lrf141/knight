<?php


namespace Lrf141\Knight\Definition;

class Definition
{
    protected $id;
    protected $concrete;
    protected $arguments = [];
  
    public function __construct(string $id, string $concrete = null)
    {
        $this->id = id;
        $this->concrete = concrete;
    }

    public function withArgument($arg)
    {
        $this->arguments[] = $arg;
        return $this;
    }

    public function withArguments(array $args)
    {
        foreach ($args as $arg) {
            $this->withArgument($arg);
        }

        return $this;
    }
}
