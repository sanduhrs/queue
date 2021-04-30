<?php

namespace sanduhrs\Queue;

use sanduhrs\Queue\ReliableQueueInterface;

/**
 * Redis queue implementation.
 *
 * @ingroup queue
 */
abstract class ReliableQueueBase extends QueueBase implements ReliableQueueInterface {

}
