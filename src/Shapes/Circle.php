<?php namespace Olegre\GraphicEditor\Shapes;

class Circle extends Shape
{
    /**
     * @var int
     */
    private $radius;

    function __construct(array $params)
    {
        if (isset($params['radius'])) {
            $this->radius = $params['radius'];
        }
        parent::__construct($params);
    }


}