<?php

namespace Tests;

use Laravel\Prompts\Key;
use Laravel\Prompts\Prompt as LaravelPrompt;
use PHPUnit\Framework\Attributes\Test;

use function Laravel\Prompts\confirm;

class CommandTest extends TestCase
{
    public function tearDown(): void
    {
        Prompt::resetFallbacks();

        parent::tearDown();
    }

    #[Test]
    public function it_tests_laravel_artisan_command()
    {
        $this->artisan('statamic:test-command')
            ->expectsOutput('Test command successful!')
            ->assertExitCode(0);
    }

    #[Test]
    public function it_confirms_true()
    {
        Prompt::fake(['n', Key::ENTER]);

        $result = confirm(label: 'Are you sure?');

        $this->assertFalse($result);
    }

    #[Test]
    public function it_confirms_false()
    {
        Prompt::fake(['y', Key::ENTER]);

        $result = confirm(label: 'Are you sure?');

        $this->assertTrue($result);
    }
}

class Prompt extends LaravelPrompt
{
    public static function resetFallbacks()
    {
        static::$shouldFallback = false; // Late static binding hack
    }

    public function value(): mixed
    {
        // Abstract class requires us to define this method
    }
}
