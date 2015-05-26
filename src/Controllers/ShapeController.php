<?php namespace Olegre\GraphicEditor\Controllers;

use Olegre\GraphicEditor\Shapes\ShapeFactory;

class ShapeController extends BaseController
{

    public function render(array $shapes, $render_type = 'image')
    {
        print_r($shapes);
        $result = [];
        foreach ($shapes as $shape) {
            if (isset($shape['type'])) {
                $params = isset($shape['params']) ? $shape['params'] : [];
                $figure = ShapeFactory::getInstance($shape['type'], $params);
                var_dump($figure);
                $result[] = $figure->render($render_type);
            } else {
                print("type non exists");
            }
        }
        print_r($result);

        return true;
    }

}