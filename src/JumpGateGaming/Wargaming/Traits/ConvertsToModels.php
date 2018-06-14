<?php

namespace JumpGateGaming\Wargaming\Traits;

trait ConvertsToModels
{
    protected function convertToModels($objects)
    {
        return supportCollector($objects)
            ->transform(function ($object) {
                return new $this->model($object);
            });
    }
}
