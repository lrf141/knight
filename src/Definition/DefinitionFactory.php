<?php

namespace Lrf141\Knight\Definition;

use RefrectionClass;

class DefinitionFactory{
  
  public function getDefinition(string $id, string $concrete)
  {

    if(class_exists($concrete))
    {
      return (new ClassDefinition($id, $concrete))->build();
    }

    return $concrete;
  }

}
