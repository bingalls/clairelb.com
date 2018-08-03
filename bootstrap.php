<?php

use TightenCo\Jigsaw\Jigsaw;

/** @var $container \Illuminate\Container\Container */
/** @var $events \TightenCo\Jigsaw\Events\EventBus */

$events->afterBuild(function ($jigsaw) {
    $redirects = file_get_contents('source/_redirects');

    if ($redirects) {
        file_put_contents('build_production/_redirects', $redirects);
    }
});
