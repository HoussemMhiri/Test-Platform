<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Storage;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication, TestHelpers;

    protected function setUp():void
    {
        parent::setUp();

        Notification::fake();
        Storage::fake();
    }
}

