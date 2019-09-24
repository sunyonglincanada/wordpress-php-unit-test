# Mock PHP built-in functions with PHPUnit

This package integrates the function mock library
[PHP-Mock](https://github.com/php-mock/php-mock) with PHPUnit.

# Installation

Use [Composer](https://getcomposer.org/):

```json
{
    "require-dev": {
        "php-mock/php-mock-phpunit": "0.2"
    }
}
```

# Usage

PHP-Mock integrates with the trait
[`PHPMock`](http://php-mock.github.io/php-mock-phpunit/api/class-phpmock.phpunit.PHPMock.html)
into your PHPUnit-4 test case. This trait extends the framework
by the method
[`getFunctionMock()`](http://php-mock.github.io/php-mock-phpunit/api/class-phpmock.phpunit.PHPMock.html#_getFunctionMock).
With this method you can build a mock in the way you are used to build a
PHPUnit mock:

```php
<?php

namespace foo;

use phpmock\phpunit\PHPMock;

class BuiltinTest extends \PHPUnit_Framework_TestCase
{

    use PHPMock;

    public function testTime()
    {
        $time = $this->getFunctionMock(__NAMESPACE__, "time");
        $time->expects($this->once())->willReturn(3);

        $this->assertEquals(3, time());
    }

    public function testExec()
    {
        $exec = $this->getFunctionMock(__NAMESPACE__, "exec");
        $exec->expects($this->once())->willReturnCallback(
            function ($command, &$output, &$return_var) {
                $this->assertEquals("foo", $command);
                $output = ["failure"];
                $return_var = 1;
            }
        );

        exec("foo", $output, $return_var);
        $this->assertEquals(["failure"], $output);
        $this->assertEquals(1, $return_var);
    }
}
```

There's no need to disable the mocked function. The PHPUnit integration does
that for you.

# License and authors

This project is free and under the WTFPL.
Responsable for this project is Markus Malkusch markus@malkusch.de.

## Donations

If you like this project and feel generous donate a few Bitcoins here:
[1335STSwu9hST4vcMRppEPgENMHD2r1REK](bitcoin:1335STSwu9hST4vcMRppEPgENMHD2r1REK)

[![Build Status](https://travis-ci.org/php-mock/php-mock-phpunit.svg?branch=master)](https://travis-ci.org/php-mock/php-mock-phpunit)

