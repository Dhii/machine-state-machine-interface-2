<?php

namespace Dhii\Machine;

use Dhii\Data\ValueAwareInterface;

/**
 * Something that can check if a transition to a specific state is possible.
 *
 * @since [*next-version*]
 */
interface StateTransitionCheckCapableInterface
{
    /**
     * Checks if a transition to a specific state is possible.
     *
     * @since [*next-version*]
     *
     * @param ValueAwareInterface $state The state to check if transition is possible.
     *
     * @return bool True if the transition is possible, false if not.
     */
    public function canTransitionTo(ValueAwareInterface $state);
}
