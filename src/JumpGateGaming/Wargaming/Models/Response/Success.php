<?php

namespace JumpGateGaming\Wargaming\Models\Response;

class Success
{
    /**
     * The status of the API call.
     *
     * @var string
     */
    public $status;

    /**
     * If the call has addition options, they will be here.
     * Example: pagination data will be here.
     *
     * @var object
     */
    public $meta;

    /**
     * This will be the actual details returned from the API call.
     *
     * @var \JumpGate\Database\Collections\SupportCollection|mixed
     */
    public $data;

    public function __construct($responseObject)
    {
        $this->status = $responseObject->status;
        $this->meta   = $responseObject->meta ?? new \stdClass;
        $this->data   = $responseObject->data;
    }

}
