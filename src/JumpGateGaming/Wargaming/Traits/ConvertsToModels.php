<?php

namespace JumpGateGaming\Wargaming\Traits;

trait ConvertsToModels
{
    /**
     * Convert a set of json objects to valid models.
     *
     * @param mixed $objects
     *
     * @return $this
     */
    protected function convertToModels($objects)
    {
        return supportCollector($objects)
            ->transform(function ($object) {
                $class = $this->getModel();
                return new $class($object);
            });
    }
}
