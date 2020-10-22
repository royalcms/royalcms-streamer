<?php


namespace Royalcms\Component\Streamer\StreamContext;


class SocketContextOptions
{

    /**
     * 用户 PHP 访问网络的指定的 IP 地址（IPv4 或 IPv6 其中的一个）和/或 端口号，这个语法是 ip:port.
     * Setting the IP or the port to 0 will let the system choose the IP and/or port.
     * @var string
     */
    protected $bindto;

    /**
     * Used to limit the number of outstanding connections in the socket's listen queue.
     * @var string
     */
    protected $backlog;

    /**
     * Overrides the OS default regarding mapping IPv4 into IPv6.
     * @var string
     */
    protected $ipv6_v6only;

    /**
     * Allows multiple bindings to a same ip:port pair, even from separate processes.
     * @var string
     */
    protected $so_reuseport;

    /**
     * Enables sending and receiving data to/from broadcast addresses.
     * @var string
     */
    protected $so_broadcast;

    /**
     * Setting this option to TRUE will set SOL_TCP,NO_DELAY=1 appropriately, thus disabling the TCP Nagle algorithm.
     * @var boolean
     */
    protected $tcp_nodelay;

    /**
     * @return string
     */
    public function getBindto()
    {
        return $this->bindto;
    }

    /**
     * @param string $bindto
     * @return SocketContextOptions
     */
    public function setBindto($bindto)
    {
        $this->bindto = $bindto;
        return $this;
    }

    /**
     * @return string
     */
    public function getBacklog()
    {
        return $this->backlog;
    }

    /**
     * @param string $backlog
     * @return SocketContextOptions
     */
    public function setBacklog($backlog)
    {
        $this->backlog = $backlog;
        return $this;
    }

    /**
     * @return string
     */
    public function getIpv6V6only()
    {
        return $this->ipv6_v6only;
    }

    /**
     * @param string $ipv6_v6only
     * @return SocketContextOptions
     */
    public function setIpv6V6only($ipv6_v6only)
    {
        $this->ipv6_v6only = $ipv6_v6only;
        return $this;
    }

    /**
     * @return string
     */
    public function getSoReuseport()
    {
        return $this->so_reuseport;
    }

    /**
     * @param string $so_reuseport
     * @return SocketContextOptions
     */
    public function setSoReuseport($so_reuseport)
    {
        $this->so_reuseport = $so_reuseport;
        return $this;
    }

    /**
     * @return string
     */
    public function getSoBroadcast()
    {
        return $this->so_broadcast;
    }

    /**
     * @param string $so_broadcast
     * @return SocketContextOptions
     */
    public function setSoBroadcast($so_broadcast)
    {
        $this->so_broadcast = $so_broadcast;
        return $this;
    }

    /**
     * @return bool
     */
    public function isTcpNodelay()
    {
        return $this->tcp_nodelay;
    }

    /**
     * @param bool $tcp_nodelay
     * @return SocketContextOptions
     */
    public function setTcpNodelay($tcp_nodelay)
    {
        $this->tcp_nodelay = $tcp_nodelay;
        return $this;
    }

}