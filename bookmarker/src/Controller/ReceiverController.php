<?php

namespace App\Controller;

class ReceiverController extends AppController
{
    public function receive()
    {
        $this->layout = false;
        $response = array('status'=>'failed', 'message'=>'HTTP method not allowed');
        if ($this->request->is('post')) {
            $data = $this->request->input('json_decode', true);
            if(empty($data)){
                $data = $this->request->getData();
            }
            $response = $data;
            // $this->Flash->success(__('Your article has been saved.'));
        }
        $this->response->body(json_encode($response));
        return $this->response->send();
    }
}