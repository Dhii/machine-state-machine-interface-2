<?php

namespace Dhii\Machine;

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
     * @return StateInterface The current state.
     */
    public function getState();
}
