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
     * @param string $name A string representing the transition name.
     *
     * @return bool True if the transition was successful, false if not.
     */
    public function transition($name);
}
