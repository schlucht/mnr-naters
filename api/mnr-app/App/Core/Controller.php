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
        if(!empty($params))
        {
            $data = array_merge($this->data, $params);
            extract($data);
        }
        $filename = __DIR__ . "/../{$this->folder}/Views/$view.php";

        if(file_exists($filename))
        {
            require_once $filename;
            return;
        }

        // require(__DIR__ . "/../NotFound/Views/NotFoundView.php");
    }
}