<?php
// src/PHPCR/SonataMediaGalleryHasMedia.php

use Doctrine\ODM\PHPCR\Mapping\Annotations as PHPCR;
use Sonata\MediaBundle\PHPCR\BaseGalleryHasMedia;

/**
 * @PHPCR\Document
 */
class SonataMediaGalleryHasMedia extends BaseGalleryHasMedia
{
    /**
     * @PHPCR\Id
     */
    protected $id;
}