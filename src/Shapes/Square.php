<?php namespace Olegre\GraphicEditor\Shapes;

class Square extends Shape
{
    /**
     * @var int
     */
    private $side;

    function __construct(array $params)
    {
        if (isset($params['side'])) {
            $this->side = $params['side'];
        }
        parent::__construct($params);
    }


}