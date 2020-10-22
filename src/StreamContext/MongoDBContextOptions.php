<?php


namespace Royalcms\Component\Streamer\StreamContext;


class MongoDBContextOptions
{

    /**
     * A callback function called when inserting a document, see log_cmd_insert().
     * @var callable
     * @link https://www.php.net/manual/en/function.log-cmd-insert.php
     */
    protected $log_cmd_insert;

    /**
     * A callback function called when deleting a document, see log_cmd_delete().
     * @var callable
     * @link https://www.php.net/manual/en/function.log-cmd-delete.php
     */
    protected $log_cmd_delete;

    /**
     * A callback function called when updating a document, see log_cmd_update().
     * @var callable
     * @link https://www.php.net/manual/en/function.log-cmd-update.php
     */
    protected $log_cmd_update;

    /**
     * A callback function called when executing a Write Batch, see log_write_batch().
     * @var callable
     * @link https://www.php.net/manual/en/function.log-write-batch.php
     */
    protected $log_write_batch;

    /**
     * A callback function called when reading a reply from MongoDB, see log_reply().
     * @var callable
     * @link https://www.php.net/manual/en/function.log-reply.php
     */
    protected $log_reply;

    /**
     * A callback function called when retrieving more results from a MongoDB cursor, see log_getmore().
     * @var callable
     * @link https://www.php.net/manual/en/function.log-getmore.php
     */
    protected $log_getmore;

    /**
     * A callback function called executing a killcursor opcode, see log_killcursor().
     * @var callable
     * @link https://www.php.net/manual/en/function.log-killcursor.php
     */
    protected $killcursor;

    /**
     * @return callable
     */
    public function getLogCmdInsert()
    {
        return $this->log_cmd_insert;
    }

    /**
     * @param callable $log_cmd_insert
     * @return MongoDBContextOptions
     */
    public function setLogCmdInsert($log_cmd_insert)
    {
        $this->log_cmd_insert = $log_cmd_insert;
        return $this;
    }

    /**
     * @return callable
     */
    public function getLogCmdDelete()
    {
        return $this->log_cmd_delete;
    }

    /**
     * @param callable $log_cmd_delete
     * @return MongoDBContextOptions
     */
    public function setLogCmdDelete($log_cmd_delete)
    {
        $this->log_cmd_delete = $log_cmd_delete;
        return $this;
    }

    /**
     * @return callable
     */
    public function getLogCmdUpdate()
    {
        return $this->log_cmd_update;
    }

    /**
     * @param callable $log_cmd_update
     * @return MongoDBContextOptions
     */
    public function setLogCmdUpdate($log_cmd_update)
    {
        $this->log_cmd_update = $log_cmd_update;
        return $this;
    }

    /**
     * @return callable
     */
    public function getLogWriteBatch()
    {
        return $this->log_write_batch;
    }

    /**
     * @param callable $log_write_batch
     * @return MongoDBContextOptions
     */
    public function setLogWriteBatch($log_write_batch)
    {
        $this->log_write_batch = $log_write_batch;
        return $this;
    }

    /**
     * @return callable
     */
    public function getLogReply()
    {
        return $this->log_reply;
    }

    /**
     * @param callable $log_reply
     * @return MongoDBContextOptions
     */
    public function setLogReply($log_reply)
    {
        $this->log_reply = $log_reply;
        return $this;
    }

    /**
     * @return callable
     */
    public function getLogGetmore()
    {
        return $this->log_getmore;
    }

    /**
     * @param callable $log_getmore
     * @return MongoDBContextOptions
     */
    public function setLogGetmore($log_getmore)
    {
        $this->log_getmore = $log_getmore;
        return $this;
    }

    /**
     * @return callable
     */
    public function getKillcursor()
    {
        return $this->killcursor;
    }

    /**
     * @param callable $killcursor
     * @return MongoDBContextOptions
     */
    public function setKillcursor($killcursor)
    {
        $this->killcursor = $killcursor;
        return $this;
    }


}