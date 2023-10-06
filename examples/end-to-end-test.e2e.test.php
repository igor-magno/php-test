<?php

use ERP\Test;

use function ERP\assertEquals;
use function ERP\assertStrict;
use function ERP\describe;
use function ERP\it;

Test::register();

describe('End to End Test', function () {

    it('End to End it example', function () {

        assertEquals(true, 'true');

        assertStrict(true, true);

    });

});