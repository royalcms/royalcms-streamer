<?php


namespace Royalcms\Component\Streamer\StreamContext;


class HTTPContextOptions
{

    /**
     * 远程服务器支持的 GET，POST 或其它 HTTP 方法。
     * 默认值是 GET。
     * @var string
     */
    protected $method = 'GET';

    /**
     * 请求期间发送的额外 header 。在此选项的值将覆盖其他值 （诸如 User-agent:， Host: 和 Authentication:）。
     * @var string
     */
    protected $header;

    /**
     * 要发送的 header User-Agent: 的值。如果在上面的 header context 选项中没有指定 user-agent，此值将被使用。
     * 默认使用 php.ini 中设置的 user_agent。
     * @var string
     */
    protected $user_agent;

    /**
     * 在 header 后面要发送的额外数据。通常使用POST或PUT请求。
     * @var string
     */
    protected $content;

    /**
     * URI 指定的代理服务器的地址。(e.g. tcp://proxy.example.com:5100).
     * @var string
     */
    protected $proxy;

    /**
     * 当设置为 TRUE 时，在构建请求时将使用整个 URI 。(i.e. GET http://www.example.com/path/to/file.html HTTP/1.0)。
     * 虽然这是一个非标准的请求格式，但某些代理服务器需要它。
     * @var boolean
     */
    protected $result_fulluri = false;

    /**
     * 跟随 Location header 的重定向。设置为 0 以禁用。
     * 默认值是 1。
     * @var integer
     */
    protected $follow_location = 1;

    /**
     * 跟随重定向的最大次数。值为 1 或更少则意味不跟随重定向。
     * 默认值是 20。
     * @var integer
     */
    protected $max_redirects = 20;

    /**
     * HTTP 协议版本。
     * 默认值是 1.0。
     * @var float
     */
    protected $protocol_version = 1.0;

    /**
     * 读取超时时间，单位为秒（s），用 float 指定(e.g. 10.5)。
     * 默认使用 php.ini 中设置的 default_socket_timeout。
     * @var float
     */
    protected $timeout;

    /**
     * 即使是故障状态码依然获取内容。
     * 默认值为 FALSE.
     * @var boolean
     */
    protected $ignore_errors = false;

    /**
     * @return string
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * @param string $method
     * @return HTTPContext
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
     * @return HTTPContext
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
     * @return HTTPContext
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
     * @return HTTPContext
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
     * @return HTTPContext
     */
    public function setProxy($proxy)
    {
        $this->proxy = $proxy;
        return $this;
    }

    /**
     * @return bool
     */
    public function isResultFulluri()
    {
        return $this->result_fulluri;
    }

    /**
     * @param bool $result_fulluri
     * @return HTTPContext
     */
    public function setResultFulluri($result_fulluri)
    {
        $this->result_fulluri = $result_fulluri;
        return $this;
    }

    /**
     * @return int
     */
    public function getFollowLocation()
    {
        return $this->follow_location;
    }

    /**
     * @param int $follow_location
     * @return HTTPContext
     */
    public function setFollowLocation($follow_location)
    {
        $this->follow_location = $follow_location;
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
     * @return HTTPContext
     */
    public function setMaxRedirects($max_redirects)
    {
        $this->max_redirects = $max_redirects;
        return $this;
    }

    /**
     * @return float
     */
    public function getProtocolVersion()
    {
        return $this->protocol_version;
    }

    /**
     * @param float $protocol_version
     * @return HTTPContext
     */
    public function setProtocolVersion($protocol_version)
    {
        $this->protocol_version = $protocol_version;
        return $this;
    }

    /**
     * @return float
     */
    public function getTimeout()
    {
        return $this->timeout;
    }

    /**
     * @param float $timeout
     * @return HTTPContext
     */
    public function setTimeout($timeout)
    {
        $this->timeout = $timeout;
        return $this;
    }

    /**
     * @return bool
     */
    public function isIgnoreErrors()
    {
        return $this->ignore_errors;
    }

    /**
     * @param bool $ignore_errors
     * @return HTTPContext
     */
    public function setIgnoreErrors($ignore_errors)
    {
        $this->ignore_errors = $ignore_errors;
        return $this;
    }



}