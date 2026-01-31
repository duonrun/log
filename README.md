# Duon Log

[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg)](LICENSE.md)
[![Coverage Status](https://img.shields.io/scrutinizer/coverage/g/duonrun/log.svg)](https://scrutinizer-ci.com/g/duonrun/log/code-structure)
[![Psalm coverage](https://shepherd.dev/github/duonrun/log/coverage.svg?)](https://shepherd.dev/github/duonrun/log)
[![Psalm level](https://shepherd.dev/github/duonrun/log/level.svg?)](https://duonrun.dev/log)
[![Quality Score](https://img.shields.io/scrutinizer/g/duonrun/log.svg)](https://scrutinizer-ci.com/g/duonrun/log)

A simple PSR-3 logger using PHP's `error_log` function.

## Testing

During testing, PHP's `error_log` ini setting is set to a temporary file. To print the output to
the console, prepend a special env variable to the PHPUnit cli command, as follows:

```bash
ECHO_LOG=1 phpunit
```

### Test Environment Requirements

Tests require:

- `ini_set()` function enabled (for `error_log` redirection)
- Writable system temp directory (for test log file isolation)
- PHP `error_reporting` must be modifiable

These are standard in development environments but may fail in restricted
PHP configurations where `ini_set` is disabled via `disable_functions`.

## License

This project is licensed under the [MIT license](LICENSE.md).
