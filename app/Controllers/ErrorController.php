<?php

class ErrorController extends Controller
{
    public function notFound()
    {
        $this->view->render('/errors/index', ['title' => 'Not Found']);
    }
}