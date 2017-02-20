<?php

namespace Dhii\Machine;

/**
 * Something which at any point in time is in a particular state, can transition to a different state
 * and provide information on what transitions are available from the current state.
 *
 * @since [*next-version*]
 */
interface StateMachineInterface extends StateAwareInterface, TransitionCapableInterface
{
    /**
     * Retrieves the available transitions from the current state.
     *
     * @since [*next-version*]
     *
     * @return TransitionInterface[]\Traversable A list of available transitions.
     */
    public function getCurrentTransitions();
}
