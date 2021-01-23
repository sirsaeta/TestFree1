<?php

namespace App\Controller;

use Cake\Controller\Controller;

class ReceiverController extends Controller
{
    public function receive()
    {
        var_dump($this->request->getParsedBody());
    }
}