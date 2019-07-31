<?php

namespace Helick\Contracts;

interface Bootable
{
    /**
     * Boot the service.
     *
     * @return void
     */
    public static function boot(): void;
}
