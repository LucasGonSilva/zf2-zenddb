<?php
/**
 * Created by PhpStorm.
 * User: Lucas Gonçalves de Lima Silva
 * Date: 29/10/2020
 * Time: 19:01
 */

namespace Base\Service;

use Doctrine\ORM\EntityManager;
use Zend\Stdlib\Hydrator\ClassMethods;

abstract class AbstractService
{
    protected $em;
    protected $entity;

    public function __construct(EntityManager $em)
    {
        $this->em = $em;
    }

    public function save(Array $data = array())
    {
        if (isset($data['id'])) {

            $entity = $this->em->getReference($this->entity, $data['id']);

            $hydrator = new ClassMethods();
            $hydrator->hydrate($data, $entity);

        } else {
            //var_dump($data);
            $entity = new $this->entity($data);
        }

        //var_dump($entity);die;

        $this->em->persist($entity);

//        var_dump('aqui');die;

        $this->em->flush();

        return $entity;
    }

    public function remove(Array $data = array())
    {
        $entity = $this->em->getRepository($this->entity)->findOneBy($data);

        if ($entity){
            $this->em->remove($entity);
            $this->em->flush();

            return $entity;
        }
    }
}