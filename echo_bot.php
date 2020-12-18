<?php

include './lib/loader.php';

namespace app;

use lib\Api;

$token = '1234567:ABCd';

$bot = new Api($token);

$bot->onText('\/start',StartHandler::class);
