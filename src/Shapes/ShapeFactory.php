<?php namespace Olegre\GraphicEditor\Shapes;

class ShapeFactory{

    static public function getInstance($type, $params){
        $class = '\\' . __NAMESPACE__ . '\\' . ucfirst($type);

        if (class_exists($class)) {
            return new $class($params);
        }
        throw new \InvalidArgumentException("class $class don't exists");
    }
}