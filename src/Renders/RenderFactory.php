<?php namespace Olegre\GraphicEditor\Renders;


class RenderFactory
{
    public function getInstance($class, $type)
    {

        $reflectionClass = new \ReflectionClass($class);
        $class = '\\' . __NAMESPACE__ . '\\' . $reflectionClass->getShortName() . '\\' . $reflectionClass->getShortName() . ucfirst($type) . 'Render';

        if (class_exists($class)) {
            return new $class;
        }
        throw new \InvalidArgumentException("class $class don't exists");
    }
}