<?php


namespace Lrf141\Knight\Definition;


use ReflectionClass;

class ClassDefinition extends Definition
{



  public function build(array $args = [])
  {
    
    $reflection = new ReflectionClass($this->concrete);
    $instance = $reflection->newInstanceArgs($args);
    return $instance;
    
  }

}
