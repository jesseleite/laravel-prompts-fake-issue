### Steps To Reproduce

- Clone this repo
- Run `composer install`
- Run `phpunit`
    - Notice that if you run each of the three sample tests in isolation, they all pass
    - But if you run the whole test case/suite, the tests with `Prompt::fake()` will fail
