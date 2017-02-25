<?php

namespace Dhii\Machine;

/**
 * Something that has a current state, a finite set of possible states and a finite set of
 * transitions that can be applied from each state.
 *
 * @since [*next-version*]
 */
interface DeterministicFiniteStateMachineInterface extends
    FiniteStateMachineInterface,
    TransitionsAwareInterface,
    PossibleTransitionsAwareInterface
{
}
