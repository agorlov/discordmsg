# Send message to Discord (php)

Very simple code to send single messages to discord channel.

This code was originally writen to send service messages
about deploying my project to production.

## How to Use

### Composer

Execute:

```bash
$ composer require agorlov/discordmsg
``` 

**Create** ``example.php``:

```php
<?php

use AG\DiscordMsg;

require_once './vendor/autoload.php';

(new DiscordMsg('Greetings!'))->send();
```

**Run it:**

```bash
$ php example.php
```

Check discord chanel (for tests), your message is there:

https://discord.gg/jB5FsPf




### Good old require_once

1. Put Msg.php and DiscordMsg.php to your project: 

2. Check out how it works:


``example.php``

```php
require_once 'Msg.php';
require_once 'DiscordMsg.php';


echo "To see dumb messages..\n";
echo "..join the discordmsg chanel https://discord.gg/Bh4EZB and enjoy!\n";
echo "Feel free to test!\n";


// First message
$msg = new \AG\DiscordMsg('Hello, Friends');
$msg->send();


// Second message
(new \AG\DiscordMsg(
    'I started the example.php, something happened?',
    null,
    $_ENV["USER"] ?? 'Mr. Pitkin'
))->send();


// Third message
(new \AG\DiscordMsg(
    "Maybe the missile is launched? :grimacing:", // message
    'https://discordapp.com/api/webhooks/475239272610398218/' . // chanel webhook link
        'tfpeg5EFI_94oEHfltZwcB5UAurfcswkBw5mKouZCq-akhvxe5BNOtN16AqSHvmSwpum',
    get_current_user(), // bot name
    '' // avatar url
))->send();


```bash
$ php example.php
```

## How to notify user

Thank to @bricecarbou (https://github.com/agorlov/discordmsg/issues/3)

To notify anybody by webhook, we need to use the "real" id of user (recover in discord with @<username>) and use $msg="<@id_recovered> ...

```php
$msg = "<@4386638385456546554> is notified";
(new \AG\DiscordMsg(
  $msg, // message
  $webhookurl, // chanel webhook link
  "Trad Bot", // bot name
  '' // avatar url
))->send();
```


## How to get Webhook link

Open chanel preferences (if you have enough permissions):
![image](https://user-images.githubusercontent.com/2485728/43675882-27431cc0-97f0-11e8-8092-917494a87bd3.png)

Create Webhook:
![image](https://user-images.githubusercontent.com/2485728/43675886-33ca6872-97f0-11e8-93d9-1a48c35843a9.png)

