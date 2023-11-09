<?php

use PHPTestGroups\Test;

use function PHPTestGroups\assertEquals;
use function PHPTestGroups\assertStrict;
use function PHPTestGroups\describe;
use function PHPTestGroups\it;

Test::register();

describe('Integration Test', function () {

    it('Integration it example', function () {

        assertEquals(true, 'true');

        assertStrict(true, true);
    });
});
