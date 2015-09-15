<?php

namespace Proxies\__CG__\ByExample\DemoBundle\Entity;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class Ecoute extends \ByExample\DemoBundle\Entity\Ecoute implements \Doctrine\ORM\Proxy\Proxy
{
    private $_entityPersister;
    private $_identifier;
    public $__isInitialized__ = false;
    public function __construct($entityPersister, $identifier)
    {
        $this->_entityPersister = $entityPersister;
        $this->_identifier = $identifier;
    }
    /** @private */
    public function __load()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;

            if (method_exists($this, "__wakeup")) {
                // call this after __isInitialized__to avoid infinite recursion
                // but before loading to emulate what ClassMetadata::newInstance()
                // provides.
                $this->__wakeup();
            }

            if ($this->_entityPersister->load($this->_identifier, $this) === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            unset($this->_entityPersister, $this->_identifier);
        }
    }

    /** @private */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int) $this->_identifier["id"];
        }
        $this->__load();
        return parent::getId();
    }

    public function setDate($date)
    {
        $this->__load();
        return parent::setDate($date);
    }

    public function getDate()
    {
        $this->__load();
        return parent::getDate();
    }

    public function setTypeecoute($typeecoute)
    {
        $this->__load();
        return parent::setTypeecoute($typeecoute);
    }

    public function getTypeecoute()
    {
        $this->__load();
        return parent::getTypeecoute();
    }

    public function addIdsession(\ByExample\DemoBundle\Entity\Session $idsession)
    {
        $this->__load();
        return parent::addIdsession($idsession);
    }

    public function removeIdsession(\ByExample\DemoBundle\Entity\Session $idsession)
    {
        $this->__load();
        return parent::removeIdsession($idsession);
    }

    public function getIdsession()
    {
        $this->__load();
        return parent::getIdsession();
    }

    public function setIditem(\ByExample\DemoBundle\Entity\Item $iditem = NULL)
    {
        $this->__load();
        return parent::setIditem($iditem);
    }

    public function getIditem()
    {
        $this->__load();
        return parent::getIditem();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'date', 'typeecoute', 'idsession', 'iditem');
    }

    public function __clone()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;
            $class = $this->_entityPersister->getClassMetadata();
            $original = $this->_entityPersister->load($this->_identifier);
            if ($original === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            foreach ($class->reflFields as $field => $reflProperty) {
                $reflProperty->setValue($this, $reflProperty->getValue($original));
            }
            unset($this->_entityPersister, $this->_identifier);
        }
        
    }
}