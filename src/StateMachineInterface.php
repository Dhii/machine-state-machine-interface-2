<?php

namespace Dhii\Machine;

/**
 * Something which at any point in time is in a particular state and can transition into a different state.
 *
 * @since [*next-version*]
 */
interface StateMachineInterface extends StateAwareInterface, TransitionCapableInterface
{
}
