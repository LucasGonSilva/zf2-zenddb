<?php
/**
 * Created by PhpStorm.
 * User: Lucas Gonçalves de Lima Silva
 * Date: 29/10/2020
 * Time: 18:29
 */

namespace Base\Entity;

use Zend\Stdlib\Hydrator\ClassMethods;

/**
 * Class AbstractEntity
 * @package Post\Entity
 */
abstract class AbstractEntity
{
    /**
     * AbstractEntity constructor.
     * @param array $options
     */
    public function __construct(Array $options = array())
    {
        $hydrator = new ClassMethods();
        $hydrator->hydrate($options, $this);
    }


    /**
     * @return array
     */
    public function toArray()
    {
        $hydrator = new ClassMethods();
        return $hydrator->extract($this);
    }
}