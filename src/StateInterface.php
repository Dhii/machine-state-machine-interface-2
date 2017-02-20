<?php

namespace Dhii\Machine;

use \Dhii\Data\ValueAwareInterface;

/**
 * Represents a single state in a state machine.
 *
 * @since [*next-version*]
 */
interface StateInterface extends ValueAwareInterface
{
    /**
     * Retrieves the value that identifies this state.
     *
     * Implementors should take care to implement this much such that it always returns the same value
     * for the same state instance. This is to ensure that the flow of the state machine is not affected
     * by the dynamic nature of the state's identifier.
     *
     * @since [*next-version*]
     *
     * @return mixed The value that identifies this state.
     */
    public function getValue();
}
