<?php
// src/Entity/SonataMediaMedia.php

use Doctrine\ORM\Mapping as ORM;
use Sonata\MediaBundle\Entity\BaseMedia;

    /**
     * @ORM\Entity
     * @ORM\Table(name="media__media")
     */
    abstract class SonataMediaMedia extends BaseMedia
    {
        /**
         * @ORM\Id
         * @ORM\GeneratedValue
         * @ORM\Column(type="integer")
         */
        protected $id;
    }