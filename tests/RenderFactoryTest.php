<?php

use Olegre\GraphicEditor\Renders\RenderFactory;
use Olegre\GraphicEditor\Shapes\Circle;

class RenderFactoryTest extends PHPUnit_Framework_TestCase{


    public function testGetInstance()
    {
        $factory = new RenderFactory();

        $circle = new Circle([]);

        $render = $factory->getInstance(get_class($circle), 'image');

        $this->assertEquals(get_class($render), 'Olegre\GraphicEditor\Renders\Circle\CircleImageRender');
    }
}