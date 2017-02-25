<?php

namespace Dhii\Machine;

/**
 * Something that can check if transitions can be applied and also allow transitions to be applied.
 *
 * @since [*next-version*]
 */
interface TransitionableInterface extends
    TransitionCheckCapableInterface,
    TransitionCapableInterface
{
}
