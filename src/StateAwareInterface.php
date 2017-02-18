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
     * @return string|int A string or integer that uniquely identifies the current state.
     */
    public function getCurrentState();
}
