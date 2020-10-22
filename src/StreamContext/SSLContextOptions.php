<?php


namespace Royalcms\Component\Streamer\StreamContext;


class SSLContextOptions
{

    /**
     * 要连接的服务器名称。如果未设置，那么服务器名称将根据打开 SSL 流的主机名称猜测得出。
     * @var string
     */
    protected $peer_name;

    /**
     * 是否需要验证 SSL 证书。
     * 默认值为 TRUE。
     * @var boolean
     */
    protected $verify_peer = true;

    /**
     * 是否需要验证 peer name。
     * 默认值为 TRUE.
     * @var boolean
     */
    protected $verify_peer_name = true;

    /**
     * 是否允许自签名证书。需要配合 verify_peer 参数使用（注：当 verify_peer 参数为 true 时才会根据 allow_self_signed 参数值来决定是否允许自签名证书）。
     * 默认值为 FALSE
     * @var boolean
     */
    protected $allow_self_signed = false;

    /**
     * 当设置 verify_peer 为 true 时， 用来验证远端证书所用到的 CA 证书。 本选项值为 CA 证书在本地文件系统的全路径及文件名。
     * @var string
     */
    protected $cafile;

    /**
     * 如果未设置 cafile，或者 cafile 所指的文件不存在时， 会在 capath 所指定的目录搜索适用的证书。
     * 该目录必须是已经经过哈希处理的证书目录。
     * （注：所谓 hashed certificate 目录是指使用类似 c_rehash 命令将目录中的 .pem 和 .crt 文件扫描并提取哈希码，然后根据此哈希码创建文件链接，以便于快速查找证书）
     * @var string
     */
    protected $capath;

    /**
     * 本地证书路径。 必须是 PEM 格式，并且包含本地的证书及私钥。
     * 也可以包含证书颁发者证书链。 也可以通过 local_pk 指定包含私钥的独立文件。
     * @var string
     */
    protected $local_cert;

    /**
     * 如果使用独立的文件来存储证书（local_cert）和私钥， 那么使用此选项来指明私钥文件的路径。
     * @var string
     */
    protected $local_pk;

    /**
     * local_cert 文件的密码。
     * @var string
     */
    protected $passphrase;

    /**
     * 期望远端证书的 CN 名称。 PHP 会进行有限的通配符匹配， 如果服务器给出的 CN 名称和本地访问的名称不匹配，则视为连接失败。
     * @var string
     */
    protected $CN_match;

    /**
     * 如果证书链条层次太深，超过了本选项的设定值，则终止验证。
     * 默认情况下不限制证书链条层次深度。
     * @var integer
     */
    protected $verify_depth;

    /**
     * 设置可用的密码列表。 可用的值参见： » ciphers(1)。
     * 默认值为 DEFAULT.
     * @var string
     * @link https://www.openssl.org/docs/manmaster/man1/ciphers.html#CIPHER-LIST-FORMAT
     */
    protected $ciphers = 'DEFAULT';

    /**
     * 如果设置为 TRUE 将会在上下文中创建 peer_certificate 选项， 该选项中包含远端证书。
     * @var boolean
     */
    protected $capture_peer_cert;

    /**
     * 如果设置为 TRUE 将会在上下文中创建 peer_certificate_chain 选项， 该选项中包含远端证书链条。
     * @var boolean
     */
    protected $capture_peer_cert_chain;

    /**
     * 设置为 TRUE 将启用服务器名称指示（server name indication）。 启用 SNI 将允许同一 IP 地址使用多个证书。
     * @var boolean
     */
    protected $SNI_enabled;

    /**
     * 如果设置此参数，那么其设置值将被视为 SNI 服务器名称。 如果未设置，那么服务器名称将基于打开 SSL 流的主机名称猜测得出。
     * @var string
     */
    protected $SNI_server_name;

    /**
     * 如果设置，则禁用 TLS 压缩，有助于减轻恶意攻击。
     * @var boolean
     */
    protected $disable_compression;

    /**
     * 当远程服务器证书的摘要和指定的散列值不相同的时候， 终止操作。
     * 当使用 string 时， 会根据字符串的长度来检测所使用的散列算法：“md5”（32 字节）还是“sha1”（40 字节）。
     * 当使用 array 时， 数组的键表示散列算法名称，其对应的值是预期的摘要值。
     * @var string | array
     */
    protected $peer_fingerprint;

    /**
     * @return string
     */
    public function getPeerName()
    {
        return $this->peer_name;
    }

    /**
     * @param string $peer_name
     * @return SSLContextOptions
     */
    public function setPeerName($peer_name)
    {
        $this->peer_name = $peer_name;
        return $this;
    }

    /**
     * @return bool
     */
    public function isVerifyPeer()
    {
        return $this->verify_peer;
    }

    /**
     * @param bool $verify_peer
     * @return SSLContextOptions
     */
    public function setVerifyPeer($verify_peer)
    {
        $this->verify_peer = $verify_peer;
        return $this;
    }

    /**
     * @return bool
     */
    public function isVerifyPeerName()
    {
        return $this->verify_peer_name;
    }

    /**
     * @param bool $verify_peer_name
     * @return SSLContextOptions
     */
    public function setVerifyPeerName($verify_peer_name)
    {
        $this->verify_peer_name = $verify_peer_name;
        return $this;
    }

    /**
     * @return bool
     */
    public function isAllowSelfSigned()
    {
        return $this->allow_self_signed;
    }

    /**
     * @param bool $allow_self_signed
     * @return SSLContextOptions
     */
    public function setAllowSelfSigned($allow_self_signed)
    {
        $this->allow_self_signed = $allow_self_signed;
        return $this;
    }

    /**
     * @return string
     */
    public function getCafile()
    {
        return $this->cafile;
    }

    /**
     * @param string $cafile
     * @return SSLContextOptions
     */
    public function setCafile($cafile)
    {
        $this->cafile = $cafile;
        return $this;
    }

    /**
     * @return string
     */
    public function getCapath()
    {
        return $this->capath;
    }

    /**
     * @param string $capath
     * @return SSLContextOptions
     */
    public function setCapath($capath)
    {
        $this->capath = $capath;
        return $this;
    }

    /**
     * @return string
     */
    public function getLocalCert()
    {
        return $this->local_cert;
    }

    /**
     * @param string $local_cert
     * @return SSLContextOptions
     */
    public function setLocalCert($local_cert)
    {
        $this->local_cert = $local_cert;
        return $this;
    }

    /**
     * @return string
     */
    public function getLocalPk()
    {
        return $this->local_pk;
    }

    /**
     * @param string $local_pk
     * @return SSLContextOptions
     */
    public function setLocalPk($local_pk)
    {
        $this->local_pk = $local_pk;
        return $this;
    }

    /**
     * @return string
     */
    public function getPassphrase()
    {
        return $this->passphrase;
    }

    /**
     * @param string $passphrase
     * @return SSLContextOptions
     */
    public function setPassphrase($passphrase)
    {
        $this->passphrase = $passphrase;
        return $this;
    }

    /**
     * @return string
     */
    public function getCNMatch()
    {
        return $this->CN_match;
    }

    /**
     * @param string $CN_match
     * @return SSLContextOptions
     */
    public function setCNMatch($CN_match)
    {
        $this->CN_match = $CN_match;
        return $this;
    }

    /**
     * @return int
     */
    public function getVerifyDepth()
    {
        return $this->verify_depth;
    }

    /**
     * @param int $verify_depth
     * @return SSLContextOptions
     */
    public function setVerifyDepth($verify_depth)
    {
        $this->verify_depth = $verify_depth;
        return $this;
    }

    /**
     * @return string
     */
    public function getCiphers()
    {
        return $this->ciphers;
    }

    /**
     * @param string $ciphers
     * @return SSLContextOptions
     */
    public function setCiphers($ciphers)
    {
        $this->ciphers = $ciphers;
        return $this;
    }

    /**
     * @return bool
     */
    public function isCapturePeerCert()
    {
        return $this->capture_peer_cert;
    }

    /**
     * @param bool $capture_peer_cert
     * @return SSLContextOptions
     */
    public function setCapturePeerCert($capture_peer_cert)
    {
        $this->capture_peer_cert = $capture_peer_cert;
        return $this;
    }

    /**
     * @return bool
     */
    public function isCapturePeerCertChain()
    {
        return $this->capture_peer_cert_chain;
    }

    /**
     * @param bool $capture_peer_cert_chain
     * @return SSLContextOptions
     */
    public function setCapturePeerCertChain($capture_peer_cert_chain)
    {
        $this->capture_peer_cert_chain = $capture_peer_cert_chain;
        return $this;
    }

    /**
     * @return bool
     */
    public function isSNIEnabled()
    {
        return $this->SNI_enabled;
    }

    /**
     * @param bool $SNI_enabled
     * @return SSLContextOptions
     */
    public function setSNIEnabled($SNI_enabled)
    {
        $this->SNI_enabled = $SNI_enabled;
        return $this;
    }

    /**
     * @return string
     */
    public function getSNIServerName()
    {
        return $this->SNI_server_name;
    }

    /**
     * @param string $SNI_server_name
     * @return SSLContextOptions
     */
    public function setSNIServerName($SNI_server_name)
    {
        $this->SNI_server_name = $SNI_server_name;
        return $this;
    }

    /**
     * @return bool
     */
    public function isDisableCompression()
    {
        return $this->disable_compression;
    }

    /**
     * @param bool $disable_compression
     * @return SSLContextOptions
     */
    public function setDisableCompression($disable_compression)
    {
        $this->disable_compression = $disable_compression;
        return $this;
    }

    /**
     * @return array|string
     */
    public function getPeerFingerprint()
    {
        return $this->peer_fingerprint;
    }

    /**
     * @param array|string $peer_fingerprint
     * @return SSLContextOptions
     */
    public function setPeerFingerprint($peer_fingerprint)
    {
        $this->peer_fingerprint = $peer_fingerprint;
        return $this;
    }


}