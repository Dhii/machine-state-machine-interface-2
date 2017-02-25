<?php

namespace Dhii\Machine;

use Dhii\Data\ValueAwareInterface;

/**
 * Something which at any point in time is in a particular state.
 *
 * @since [*next-version*]
 */
interface CurrentStateAwareInterface
{
    /**
     * Retrieves the current state.
     *
     * @since [*next-version*]
     *
     * @return ValueAwareInterface The current state instance.
     */
    public function getCurrentState();
}
