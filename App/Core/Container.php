<?php

namespace OTS\App\Core;

use Closure;

defined('ROOTPATH') OR exit('No direct script access allowed');
Class Container
{
    private array $classInstances = [];
    public array $builds = [];
     
    public function add(string $key, Closure $function) 
    {
        $this->builds[$key] = $function;
    }

    public function build(string $object)
    {
        if (isset($this->builds[$object]))
        {
            if (!empty($this->classInstances[$object]))
            {
                return $this->classInstances[$object];
            }
            $this->classInstances[$object] = $this->builds[$object]();
        }
        return $this->classInstances[$object];
    }

    public function hasKey(string $key): bool
    {
        return array_key_exists($key, $this->builds);
    }
}