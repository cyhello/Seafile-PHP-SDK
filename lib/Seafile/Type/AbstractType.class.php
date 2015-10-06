<?php

namespace Seafile\Type;

use DateTime;
use stdClass;

/**
 * Abstract type class
 *
 * PHP version 5
 *
 * @category  API
 * @package   Seafile\Type
 * @author    Rene Schmidt DevOps UG (haftungsbeschränkt) & Co. KG <rene@reneschmidt.de>
 * @copyright 2015 Rene Schmidt DevOps UG (haftungsbeschränkt) & Co. KG <rene@reneschmidt.de>
 * @license   https://opensource.org/licenses/MIT MIT
 * @link      https://github.com/rene-s/seafile-php-sdk
 */
abstract class AbstractType
{

    /**
     * Constructor
     * @param array $fromArray Create from array
     */
    public function __construct(array $fromArray = [])
    {
        if (is_array($fromArray) && !empty($fromArray)) {
            $this->fromArray($fromArray);
        }
    }

    /**
     * Populate from array
     * @param array $fromArray Create from array
     * @return void
     */
    public function fromArray(array $fromArray)
    {
        foreach ($fromArray as $key => $value) {
            $lowerCamelCaseKey = preg_replace('/_(.?)/e', "strtoupper('$1')", $key);
            if (property_exists($this, $lowerCamelCaseKey)) {
                switch ($key) {
                    case 'mtime':
                        $this->{$lowerCamelCaseKey} = DateTime::createFromFormat("U", $value);
                        break;
                    default:
                        $this->{$lowerCamelCaseKey} = $value;
                        break;
                }
            }
        }
    }

    /**
     * Create from jsonResponse
     * @param stdClass $jsonResponse Json response
     * @return static
     */
    public static function fromJson(stdClass $jsonResponse)
    {
        return new static((array)$jsonResponse);
    }
}
