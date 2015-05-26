<?php namespace Olegre\GraphicEditor\Shapes;

use Olegre\GraphicEditor\Renders\RenderFactory;

abstract class Shape implements ShapeInterface
{
    public $color;
    public $width;
    /**
     * @var RenderFactory
     */
    private $renderFactory;


    function __construct(array $params)
    {
        if (isset($params['color'])) {
            $this->color = $params['color'];
        }
        if (isset($params['width'])) {
            $this->width = $params['width'];
        }
        $this->renderFactory = new RenderFactory();
    }


    public function render($type)
    {
        $render = $this->renderFactory->getInstance(get_class($this), $type);
        return $render->run();
    }
}