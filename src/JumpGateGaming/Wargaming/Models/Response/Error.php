<?php

namespace JumpGateGaming\Wargaming\Models\Response;

class Error
{
    public $status;

    public $error;

    public function __construct($responseObject)
    {
        $this->status = $responseObject->status;
        $this->error = $responseObject->error;
    }
}
