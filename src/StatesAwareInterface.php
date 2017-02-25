<?php

namespace Dhii\Machine;

use Dhii\Data\ValueAwareInterface;
use Traversable;

/**
 * Something which has a set of states.
 *
 * @since [*next-version*]
 */
interface StatesAwareInterface
{
    /**
     * Retrieves the states.
     *
     * @since [*next-version*]
     *
     * @return ValueAwareInterface[]|Traversable The collection of states.
     */
    public function getStates();
}
