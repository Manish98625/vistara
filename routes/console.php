<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Schedule;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

// Drain queued jobs (e.g. contact / inquiry / newsletter emails) every minute.
Schedule::command('queue:work --stop-when-empty --tries=3')
    ->everyMinute()
    ->withoutOverlapping()
    ->runInBackground();

// Clear and rebuild caches daily at 3 AM
Schedule::command('optimize:clear')
    ->dailyAt('03:00')
    ->withoutOverlapping()
    ->runInBackground();
