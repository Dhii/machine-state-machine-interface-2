<?php

namespace Dhii\Machine;

/**
 * Something that has a state and can transition to other states.
 *
 * @since [*next-version*]
 */
interface StateTransitionableStateMachineInterface extends
    StateMachineInterface,
    StateTransitionableInterface
{
}
