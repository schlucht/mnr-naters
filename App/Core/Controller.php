<?php

namespace OTS\App\Core;

defined('ROOTPATH') OR exit('No direct script access allowed');

Class Controller 
{
    private array $data = [];
    protected string $folder = "Home";
    protected Container $container;
    
    public function __construct(Container $container)
    {
        $this->container = $container;
    }

    public function render(string $view, array $params = [])
    {
        $data = array_merge($this->data, $params);

        require(__DIR__ . "/../{$this->folder}/Views/$view.php");
    }
}