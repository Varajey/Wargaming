<?php

namespace JumpGateGaming\Wargaming\Models\Response;

class Error
{
    /**
     * All responses contain a status.
     * This will normally be error.
     *
     * @var string
     */
    public $status;

    /**
     * The actual error message returned.
     *
     * @var string
     */
    public $error;

    public function __construct($responseObject)
    {
        $this->status = $responseObject->status;
        $this->error = $responseObject->error;
    }
}
