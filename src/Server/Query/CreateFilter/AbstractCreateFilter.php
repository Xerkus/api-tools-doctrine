<?php

namespace Laminas\ApiTools\Doctrine\Server\Query\CreateFilter;

use Doctrine\Common\Persistence\ObjectManager;
use DoctrineModule\Persistence\ObjectManagerAwareInterface;
use Laminas\ApiTools\ApiProblem\ApiProblem;
use Laminas\ApiTools\Rest\ResourceEvent;

/**
 * Class DefaultCreateFilter
 *
 * @package Laminas\ApiTools\Doctrine\Server\Query\CreateFilter
 */
abstract class AbstractCreateFilter implements ObjectManagerAwareInterface, QueryCreateFilterInterface
{
    /**
     * @param string $entityClass
     * @param array  $data
     *
     * @return array
     */
    abstract public function filter(ResourceEvent $event, $entityClass, $data);

    /**
     * @var ObjectManager
     */
    protected $objectManager;

    /**
     * Set the object manager
     *
     * @param ObjectManager $objectManager
     */
    public function setObjectManager(ObjectManager $objectManager)
    {
        $this->objectManager = $objectManager;
    }

    /**
     * Get the object manager
     *
     * @return ObjectManager
     */
    public function getObjectManager()
    {
        return $this->objectManager;
    }
}