<?php

if(!function_exists('pagetitle')){
    function pagetitle(?string $title=null) : string {
        return $title ? $title.' | '.config('app.name') : config('app.name');
    }
}