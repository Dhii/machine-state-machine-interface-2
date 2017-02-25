<?php

namespace Dhii\Machine;

/**
 * Something that has a current state and a finite set of possible states.
 *
 * @since [*next-version*]
 */
interface FiniteStateMachineInterface extends
    StateMachineInterface,
    StatesAwareInterface
{
}
