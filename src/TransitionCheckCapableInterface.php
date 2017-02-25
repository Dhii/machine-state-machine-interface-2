<?php

namespace Dhii\Machine;

use Dhii\Data\ValueAwareInterface;

/**
 * Something that can check if a transition can be applied.
 *
 * @since [*next-version*]
 */
interface TransitionCheckCapableInterface
{
    /**
     * Checks if a transition can be applied.
     *
     * @since [*next-version*]
     *
     * @param ValueAwareInterface $transition The transition instance to check.
     *
     * @return bool True if the transition is possible, false if not.
     */
    public function canTransition(ValueAwareInterface $transition);
}
