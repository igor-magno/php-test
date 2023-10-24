<?php

use PHPTest\Test;

use function PHPTest\assertEquals;
use function PHPTest\assertStrict;
use function PHPTest\describe;
use function PHPTest\it;

Test::register();

describe('End to End Test', function () {

    it('End to End it example', function () {

        assertEquals(true, 'true');

        assertStrict(true, true);
    });
});
