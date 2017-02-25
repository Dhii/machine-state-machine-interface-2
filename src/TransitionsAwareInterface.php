<?php

namespace Dhii\Machine;

use Dhii\Data\ValueAwareInterface;
use Traversable;

/**
 * Something that is aware of a set of transitions.
 *
 * @since [*next-version*]
 */
interface TransitionsAwareInterface
{
    /**
     * Retrieves the set of transitions.
     *
     * @since [*next-version*]
     *
     * @return ValueAwareInterface[]|Traversable The set of the transitions.
     */
    public function getTransitions();
}
