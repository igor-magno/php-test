<?php

use ERP\Test;

use function ERP\assertEquals;
use function ERP\assertStrict;
use function ERP\describe;
use function ERP\it;

Test::register();

describe('Integration Test', function () {

    it('Integration it example', function () {

        assertEquals(true, 'true');

        assertStrict(true, true);

    });

});