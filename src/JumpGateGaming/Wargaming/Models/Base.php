<?php

namespace JumpGateGaming\Wargaming\Models;

use Jenssegers\Model\Model;

abstract class Base extends Model
{
    /**
     * Attributes and the class they should be converted to.
     *
     * @var array
     */
    protected $conversions = [];

    /**
     * Convert anything received to usable arrays..
     *
     * @param array $attributes
     */
    public function __construct($attributes = [])
    {
        parent::__construct((array)$attributes);
    }

    /**
     * Get a plain attribute (not a relationship).
     *
     * @param  string  $key
     * @return mixed
     */
    public function getAttributeValue($key)
    {
        $value = $this->getAttributeFromArray($key);

        // If the attribute has a get mutator, we will call that then return what
        // it returns as the value, which is useful for transforming values on
        // retrieval from the model to a form that is more useful for usage.
        if ($this->hasGetMutator($key)) {
            return $this->mutateAttribute($key, $value);
        }

        // If the attribute is listed as a conversion, we will add a mutator to
        // get the class instance.
        if (array_key_exists($key, $this->getConversions())) {
            return $this->addConvertedClass($key, $value);
        }

        // If the attribute exists within the cast array, we will convert it to
        // an appropriate native PHP type dependant upon the associated value
        // given with the key in the pair. Dayle made this comment line up.
        if ($this->hasCast($key)) {
            $value = $this->castAttribute($key, $value);
        }

        return $value;
    }

    /**
     * Get the attributes that should be converted to models.
     *
     * @return array
     */
    public function getConversions()
    {
        return $this->conversions;
    }

    /**
     * Convert the data to a valid model..
     *
     * @param string $key
     * @param string $value
     *
     * @return \JumpGateGaming\Wargaming\Models\Base
     */
    public function addConvertedClass($key, $value)
    {
        $conversions = $this->getConversions();
        $class = $conversions[$key];

        return new $class($value);
    }
}
