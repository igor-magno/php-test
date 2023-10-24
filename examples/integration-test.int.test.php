<?php

use PHPTest\Test;

use function PHPTest\assertEquals;
use function PHPTest\assertStrict;
use function PHPTest\describe;
use function PHPTest\it;

Test::register();

describe('Integration Test', function () {

    it('Integration it example', function () {

        assertEquals(true, 'true');

        assertStrict(true, true);
    });
});
