<?php

namespace Dhii\Machine;

use \Dhii\Data\ValueAwareInterface;

/**
 * Something which at any point in time can have a state.
 *
 * @since [*next-version*]
 */
interface StateAwareInterface
{
    /**
     * Retrieves the current state.
     *
     * @since [*next-version*]
     *
     * @return ValueAwareInterface The current state.
     */
    public function getState();
}
