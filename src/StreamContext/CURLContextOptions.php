<?php


namespace Royalcms\Component\Streamer\StreamContext;


class CURLContextOptions
{

    /**
     * GET，POST，或者其他远程服务器支持的 HTTP 方法。
     * 默认为 GET.
     * @var string
     */
    protected $method = 'GET';

    /**
     * 额外的请求标头。这个值会覆盖通过其他选项设定的值（如： User-agent:，Host:， ，Authentication:）。
     * @var string
     */
    protected $header;

    /**
     * 设置请求时 User-Agent 标头的值。
     * 默认为 php.ini 中的 user_agent 设定。
     * @var string
     */
    protected $user_agent;

    /**
     * 在头部之后发送的额外数据。这个选项在 GET 和 HEAD 请求中不使用。
     * @var string
     */
    protected $content;

    /**
     * URI，用于指定代理服务器的地址（例如 tcp://proxy.example.com:5100）。
     * @var string
     */
    protected $proxy;

    /**
     * 最大重定向次数。1 或者更小则代表不会跟随重定向。
     * 默认为 20.
     * @var integer
     */
    protected $max_redirects = 20;

    /**
     * 校验服务器。
     * 默认为 FALSE
     * @var boolean
     */
    protected $curl_verify_ssl_host = false;

    /**
     * 要求对使用的SSL证书进行校验。
     * 默认为 FALSE
     * @var boolean
     */
    protected $curl_verify_ssl_peer = false;

    /**
     * @return string
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * @param string $method
     * @return CURLContextOptions
     */
    public function setMethod($method)
    {
        $this->method = $method;
        return $this;
    }

    /**
     * @return string
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * @param string $header
     * @return CURLContextOptions
     */
    public function setHeader($header)
    {
        $this->header = $header;
        return $this;
    }

    /**
     * @return string
     */
    public function getUserAgent()
    {
        return $this->user_agent;
    }

    /**
     * @param string $user_agent
     * @return CURLContextOptions
     */
    public function setUserAgent($user_agent)
    {
        $this->user_agent = $user_agent;
        return $this;
    }

    /**
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param string $content
     * @return CURLContextOptions
     */
    public function setContent($content)
    {
        $this->content = $content;
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
     * @return CURLContextOptions
     */
    public function setProxy($proxy)
    {
        $this->proxy = $proxy;
        return $this;
    }

    /**
     * @return int
     */
    public function getMaxRedirects()
    {
        return $this->max_redirects;
    }

    /**
     * @param int $max_redirects
     * @return CURLContextOptions
     */
    public function setMaxRedirects($max_redirects)
    {
        $this->max_redirects = $max_redirects;
        return $this;
    }

    /**
     * @return bool
     */
    public function isCurlVerifySslHost()
    {
        return $this->curl_verify_ssl_host;
    }

    /**
     * @param bool $curl_verify_ssl_host
     * @return CURLContextOptions
     */
    public function setCurlVerifySslHost($curl_verify_ssl_host)
    {
        $this->curl_verify_ssl_host = $curl_verify_ssl_host;
        return $this;
    }

    /**
     * @return bool
     */
    public function isCurlVerifySslPeer()
    {
        return $this->curl_verify_ssl_peer;
    }

    /**
     * @param bool $curl_verify_ssl_peer
     * @return CURLContextOptions
     */
    public function setCurlVerifySslPeer($curl_verify_ssl_peer)
    {
        $this->curl_verify_ssl_peer = $curl_verify_ssl_peer;
        return $this;
    }




}