<?php

namespace Dhii\Machine;

use Dhii\Data\ValueAwareInterface;
use Traversable;

/**
 * Something that is aware of a set of transitions that can be applied.
 *
 * @since [*next-version*]
 */
interface TransitionsAwareInterface
{
    /**
     * Retrieves the transitions that can be applied.
     *
     * @since [*next-version*]
     *
     * @return ValueAwareInterface[]|Traversable A collection of the transition instances.
     */
    public function getTransitions();
}
