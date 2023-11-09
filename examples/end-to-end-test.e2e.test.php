<?php

use PHPTestGroups\Test;

use function PHPTestGroups\assertEquals;
use function PHPTestGroups\assertStrict;
use function PHPTestGroups\describe;
use function PHPTestGroups\it;

Test::register();

describe('End to End Test', function () {

    it('End to End it example', function () {

        assertEquals(true, 'true');

        assertStrict(true, true);
    });
});
