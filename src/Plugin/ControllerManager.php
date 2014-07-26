<?php

namespace Terramar\Packages\Plugin;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Controller\ControllerResolverInterface;

class ControllerManager implements ControllerManagerInterface
{
    private $controllers = array();
    
    public function registerController($action, $controller)
    {
        if (!isset($this->controllers[$action])) {
            $this->controllers[$action] = array();
        } 
        
        $this->controllers[$action][] = $controller;
    }
    
    public function getControllers($action)
    {
        return isset($this->controllers[$action]) ? $this->controllers[$action] : array();
    }
}