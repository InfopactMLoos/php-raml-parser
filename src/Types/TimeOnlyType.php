<?php

namespace Raml\Types;

use Raml\Type;

/**
 * TimeOnlyType class
 */
class TimeOnlyType extends Type
{
    /**
     * Create a new TimeOnlyType from an array of data
     *
     * @param string    $name
     * @param array     $data
     *
     * @return TimeOnlyType
     */
    public static function createFromArray($name, array $data = [])
    {
        $type = parent::createFromArray($name, $data);

        return $type;
    }

    public function validate($value)
    {
        $d = DateTime::createFromFormat('HH:II:SS', $value);
        return $d && $d->format('HH:II:SS') === $value;
    }
}
