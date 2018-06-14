<?php

namespace JumpGateGaming\Wargaming\Models\Response;

class Success
{
    public $status;

    public $meta;

    public $data;

    public function __construct($responseObject)
    {
        $this->status = $responseObject->status;
        $this->meta = $responseObject->meta;
        $this->data = $responseObject->data;
    }

}
