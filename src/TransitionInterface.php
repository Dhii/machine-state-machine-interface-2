<?php

namespace Dhii\Machine;

use \Dhii\Data\ValueAwareInterface;

/**
 * Represents a single transition.
 *
 * @since [*next-version*]
 */
interface TransitionInterface extends ValueAwareInterface
{
    /**
     * Retrieves the value that identifies this transition.
     *
     * Implementors should take care to implement this much such that it always returns the same value
     * for the same transition instance. This is to ensure that the flow of the state machine is not
     * affected by the dynamic nature of the transition's identifier.
     *
     * @since [*next-version*]
     *
     * @return mixed The value that identifies this transition.
     */
    public function getValue();
}
