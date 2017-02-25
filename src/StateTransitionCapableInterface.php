<?php

namespace Dhii\Machine;

use Dhii\Data\ValueAwareInterface;

/**
 * Something that can transition to a specific state.
 *
 * @since [*next-version*]
 */
interface StateTransitionCapableInterface
{
    /**
     * Transitions this instance to a specific state.
     *
     * @since [*next-version*]
     *
     * @param ValueAwareInterface $state The state to transition to.
     *
     * @return bool True if the transition was successful, false otherwise.
     */
    public function transitionTo(ValueAwareInterface $state);
}
