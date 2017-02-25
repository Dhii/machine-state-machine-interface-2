<?php

namespace Dhii\Machine;

/**
 * Something that can transition to specific states and also check if transitions to specific states
 * are possible.
 *
 * @since [*next-version*]
 */
interface StateTransitionableInterface extends
    StateTransitionCheckCapableInterface,
    StateTransitionCapableInterface
{
}
