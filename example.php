<?php

/**
 * Example script
 *
 * Open console or terminal and run:
 *
 * ```bash
 * php ./example.php
 * ```
 *
 * @author Alexandr Gorlov <a.gorlov@gmail.com>
 */
require_once 'Msg.php';
require_once 'DiscordMsg.php';


echo "To see dumb messages..\n";
echo "..join the discordmsg chanel https://discord.gg/jB5FsPf and enjoy!\n";
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

