<?php

namespace Dhii\Machine;

/**
 * Something that can transition from one state to another.
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
     * @param TransitionInterface $transition The transition to apply.
     *
     * @return bool True if the transition was successful, false if not.
     */
    public function transition(TransitionInterface $transition);
}
