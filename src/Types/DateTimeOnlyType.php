<?php

namespace Raml\Types;

use Raml\Type;

/**
 * DateTimeOnlyType class
 *
 * @author Melvin Loos <m.loos@infopact.nl>
 */
class DateTimeOnlyType extends Type
{
    /**
    * Create a new DateTimeOnlyType from an array of data
    *
    * @param string    $name
    * @param array     $data
    *
    * @return DateTimeOnlyType
    */
    public static function createFromArray($name, array $data = [])
    {
        $type = parent::createFromArray($name, $data);

        return $type;
    }

    public function validate($value)
    {
        $d = DateTime::createFromFormat(DATE_RFC3339, $value);
        return $d && $d->format(DATE_RFC3339) === $value;
    }
}
