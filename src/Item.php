<?php

namespace sanduhrs\Queue;

class Item {

    /**
     * @var
     */
    public $qid;

    /**
     * @var
     */
    public $data;

    /**
     * @var
     */
    public $timestamp;

    /**
     * Item constructor.
     * @param int $qid
     * @param mixed $data
     * @param int $timestamp
     */
    function __construct($qid, $data, $timestamp) {
        $this->qid = $qid;
        $this->data = $data;
        $this->timestamp = $timestamp;
    }

    /**
     * @param $item
     * @return $this
     */
    public static function createFromQueue($item) {
        return new static($item->qid, $item->data, $item->timestamp);
    }

}
