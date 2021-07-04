<?php
// src/PHPCR/SonataMediaMedia.php

use Doctrine\ODM\PHPCR\Mapping\Annotations as PHPCR;
use Sonata\MediaBundle\PHPCR\BaseMedia;

/**
 * @PHPCR\Document
 */
class SonataMediaMedia extends BaseMedia
{
    /**
     * @PHPCR\Id
     */
    protected $id;

    public function getId()
    {
        return $this->id;
    }
}