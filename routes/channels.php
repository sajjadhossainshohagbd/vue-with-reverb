<?php

use Illuminate\Support\Facades\Broadcast;

Broadcast::channel('testing', function ($user, $id) {
    return true;
});
