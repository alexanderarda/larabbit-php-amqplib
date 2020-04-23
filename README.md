# Larabbit Series - Publishing Message Using `php-amqplib`

Laravel project example for publish message in RabbitMQ using pure PHP implementation of `php-amqplib` 

![alt text](https://laravel.com/assets/img/components/logo-laravel.svg)

### :rocket: TL;DR

#### Publish Message

```php
$msg = new Message();
for($idx = 0; $idx < 25; $idx++ ){
    $rand = str_random(4);
    $msg->sendMessage($rand);
    echo "Send message = ".$rand."<br/>";
}
``` 


## Library
```bash
https://github.com/php-amqplib/php-amqplib
```
References :
https://www.rabbitmq.com/tutorials/tutorial-one-php.html

## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

Please make sure to update tests as appropriate.
