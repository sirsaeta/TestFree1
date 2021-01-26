<?php

namespace App\Controller;
use Cake\Log\Log;

class ReceiverController extends AppController
{
    public function receive()
    {
        $this->layout = false;
        $response = $this->response;
        $result = array('status'=>'failed', 'message'=>'HTTP method not allowed');
        if ($this->request->is('post')) {
            $data = $this->request->input('json_decode', true);
            if(empty($data)){
                $data = $this->request->getData();
            }
            $result = $data;

            Log::info(json_encode($result), ['scope' => ['receiveLog']]);
        }
        $response = $response->withType('application/json')
        ->withStringBody(json_encode($result));
        return $response;
    }
}