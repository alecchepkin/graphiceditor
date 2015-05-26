<?php

use Olegre\GraphicEditor\Shapes\Circle;
use Olegre\GraphicEditor\Shapes\Square;

class ShapeTest extends PHPUnit_Framework_TestCase
{


    public function testRender()
    {

        $circle = new Circle([
            'color' => 'red',
            'width' => 10,
            'radius' => 100,
        ]);
        $this->assertEquals($circle->render('image'), 'circle image render');
        $this->assertEquals($circle->render('string'), 'circle string render');

        $square = new Square([
            'color' => 'red',
            'width' => 10,
            'side' => 100,
        ]);
        $this->assertEquals($square->render('image'), 'square image render');
        $this->assertEquals($square->render('string'), 'square string render');

    }
}