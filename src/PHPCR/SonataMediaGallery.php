<?php
// src/PHPCR/SonataMediaGallery.php

use Doctrine\ODM\PHPCR\Mapping\Annotations as PHPCR;
use Sonata\MediaBundle\PHPCR\BaseGallery;

/**
 * @PHPCR\Document
 */
class SonataMediaGallery extends BaseGallery
{
    /**
     * @PHPCR\Id
     */
    protected $id;
}