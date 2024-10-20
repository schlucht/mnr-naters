<?php

namespace OTS\App\NotFound\Controllers;

use OTS\App\Core\Container;
use OTS\App\Core\Controller;
use OTS\App\NotFound\Models\NotFoundModel;

defined('ROOTPATH') OR exit('No direct script access allowed');

Class NotFoundController extends Controller
{
    private NotFoundModel $model;
    function __construct(Container $container)
    {
        parent::__construct($container);
        $this->folder = 'NotFound';
        $this->model = $container->build('notfoundmodel');        
    }
    
    public function index()
    {
        $data['title'] = $this->model->title;
        $data['snippets'] = 'Header';
        $this->render('NotFoundView', $data);
    }
}