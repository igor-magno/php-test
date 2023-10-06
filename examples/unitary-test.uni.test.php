<?php

use ERP\Test;

use function ERP\assertEquals;
use function ERP\assertStrict;
use function ERP\describe;
use function ERP\it;

Test::register();

describe('Unitary Test', function () {

    it('Unitary it example', function () {

        assertEquals(true, 'true');

        assertStrict(true, true);
        
    });

});