<?php


namespace Royalcms\Component\Streamer\StreamContext;


class PharContextOptions
{

    /**
     * One of Phar compression constants.
     * @var int
     * @link https://www.php.net/manual/en/phar.constants.php#phar.constants.compression
     */
    protected $compress;

    /**
     * Phar metadata. See Phar::setMetadata().
     * @var mixed
     * @link https://www.php.net/manual/en/phardata.setmetadata.php
     */
    protected $metadata;

    /**
     * @return int
     */
    public function getCompress()
    {
        return $this->compress;
    }

    /**
     * @param int $compress
     * @return PharContextOptions
     */
    public function setCompress($compress)
    {
        $this->compress = $compress;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getMetadata()
    {
        return $this->metadata;
    }

    /**
     * @param mixed $metadata
     * @return PharContextOptions
     */
    public function setMetadata($metadata)
    {
        $this->metadata = $metadata;
        return $this;
    }


}