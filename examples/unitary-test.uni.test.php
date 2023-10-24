<?php

use PHPTest\Test;

use function PHPTest\assertEquals;
use function PHPTest\assertStrict;
use function PHPTest\describe;
use function PHPTest\it;

Test::register();

describe('Unitary Test', function () {

    it('Unitary it example', function () {

        assertEquals(true, 'true');

        assertStrict(true, true);
    });
});
