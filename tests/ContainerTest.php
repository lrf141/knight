<?php
require_once 'vendor/autoload.php';

use Lrf141\Knight\Container;
use PHPUnit\Framework\TestCase;

class ContainerTest extends TestCase
{
    public function testSimpleAddAndGet()
    {
        $container = new Container;
        $container->add('test', 'TestClass');

        $this->assertTrue($container->has('test'));

        $this->assertTrue($container->get('test') instanceof TestClass);
    }


    public function testHasContainer()
    {
        $container = new Container;
        $container->add('test', 'TestClass');

        $this->assertTrue($container->has('test'));
    }

    public function testHasShareContainer()
    {
        $container = new Container;
        $container->share('test', 'TestClass');
        
        $this->assertTrue($container->hasShare('test'));
    }
}


class TestClass
{
    const text = 'hello,world';
}
