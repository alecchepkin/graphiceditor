<?php

use Olegre\GraphicEditor\Controllers\ShapeController;

class ShapeControllerTest extends PHPUnit_Framework_TestCase
{


    public function testRender()
    {

        $shapes =
            [
                [
                    'type' => 'circle',
                    'params' => [
                        'color' => 'red',
                        'width' => 10,
                        'radius' => 100,
                    ],
                ],

                [
                    'type' => 'square',
                    'params' => [
                        'color' => 'red',
                        'width' => 10,
                        'side' => 100,
                    ],
                ],
            ];
        $controller = new ShapeController();


        $this->assertTrue($controller->render($shapes));

    }
}