<?php


namespace Royalcms\Component\Streamer\StreamContext;


class ContextParameters
{
    /**
     * 当一个流（stream）上发生事件时，callable 将被调用。
     * 查看 stream_notification_callback 以获得更多信息。
     * @var callable
     * @link https://www.php.net/manual/zh/function.stream-notification-callback.php
     */
    protected $notification;

    /**
     * @return callable
     */
    public function getNotification()
    {
        return $this->notification;
    }

    /**
     * @param callable $notification
     * @return ContextParameters
     */
    public function setNotification($notification)
    {
        $this->notification = $notification;
        return $this;
    }

    

}