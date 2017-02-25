<?php

namespace Dhii\Machine;

use Dhii\Data\ValueAwareInterface;
use Traversable;

/**
 * Something that is aware of a set of currently possible transitions.
 *
 * @since [*next-version*]
 */
interface PossibleTransitionsAwareInterface
{
    /**
     * Gets the currently possible transitions.
     *
     * @since [*next-version*]
     *
     * @return ValueAwareInterface[]|Traversable The currently possible transitions.
     */
    public function getPossibleTransitions();
}
