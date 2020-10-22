<?php


namespace Royalcms\Component\Streamer\StreamContext;


class ZipContextOptions
{

    /**
     * Used to specify password used for encrypted archive.
     * @var string
     */
    protected $password;

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param string $password
     * @return ZipContextOptions
     */
    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }




}