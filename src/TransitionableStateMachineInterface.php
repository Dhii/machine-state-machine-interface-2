<?php

namespace Dhii\Machine;

/**
 * Something that has a state and can have transitions applied to it to change its state.
 *
 * @since [*next-version*]
 */
interface TransitionableStateMachineInterface extends
    StateMachineInterface,
    TransitionableInterface
{
}
