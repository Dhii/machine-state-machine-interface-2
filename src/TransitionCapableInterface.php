<?php

namespace Dhii\Machine;

use Dhii\Data\ValueAwareInterface;

/**
 * Something that can have a transition applied to change its state.
 *
 * @since [*next-version*]
 */
interface TransitionCapableInterface
{
    /**
     * Applies a transition.
     *
     * @since [*next-version*]
     *
     * @param ValueAwareInterface $transition The transition to apply.
     *
     * @return bool True if the transition was successful, false if not.
     */
    public function transition(ValueAwareInterface $transition);
}
