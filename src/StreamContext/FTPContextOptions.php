<?php


namespace Royalcms\Component\Streamer\StreamContext;


class FTPContextOptions
{

    /**
     * Allow overwriting of already existing files on remote server. Applies to write mode (uploading) only.
     * Defaults to FALSE.
     * @var boolean
     */
    protected $overwrite = false;

    /**
     * File offset at which to begin transfer. Applies to read mode (downloading) only.
     * Defaults to 0 (Beginning of File).
     * @var integer
     */
    protected $resume_pos = 0;

    /**
     * Proxy FTP request via http proxy server. Applies to file read operations only. Ex: tcp://squid.example.com:8000.
     * @var string
     */
    protected $proxy;

    /**
     * @return bool
     */
    public function isOverwrite()
    {
        return $this->overwrite;
    }

    /**
     * @param bool $overwrite
     * @return FTPContextOptions
     */
    public function setOverwrite($overwrite)
    {
        $this->overwrite = $overwrite;
        return $this;
    }

    /**
     * @return int
     */
    public function getResumePos()
    {
        return $this->resume_pos;
    }

    /**
     * @param int $resume_pos
     * @return FTPContextOptions
     */
    public function setResumePos($resume_pos)
    {
        $this->resume_pos = $resume_pos;
        return $this;
    }

    /**
     * @return string
     */
    public function getProxy()
    {
        return $this->proxy;
    }

    /**
     * @param string $proxy
     * @return FTPContextOptions
     */
    public function setProxy($proxy)
    {
        $this->proxy = $proxy;
        return $this;
    }



}