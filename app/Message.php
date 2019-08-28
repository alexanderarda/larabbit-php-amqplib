<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use PhpAmqpLib\Connection\AMQPStreamConnection;
use PhpAmqpLib\Message\AMQPMessage;

class Message extends Model
{

    function sendQueueRabbitMQ($message = [])
    {
        $connection = new AMQPStreamConnection("localhost", "5672", "guest", "guest");

        $channel = $connection->channel();

        if (!empty($message)) {
            $message = new AMQPMessage(json_encode($message));
            $channel->basic_publish($message, 'hello-exchange', "hello");
        }

        $channel->close();
        $connection->close();
    }


    public function sendMessage($message_send){

        $message = new AMQPMessage($message_send);
        $this->sendQueueRabbitMQ($message);

    }
}
