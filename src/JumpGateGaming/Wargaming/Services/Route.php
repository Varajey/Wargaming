<?php

namespace JumpGateGaming\Wargaming\Services;

abstract class Route
{
    protected function getRoute()
    {
        if (!isset($this->route)) {
            throw new \Exception('You are missing the route property on your method.');
        }

        return $this->route;
    }

    protected function getModel()
    {
        if (!isset($this->model)) {
            throw new \Exception('You are missing the model property on your method.');
        }

        return $this->model;
    }
}
