<?php

namespace Dhii\Machine;

/**
 * Something that represents an exception thrown during a state transition.
 *
 * @since [*next-version*]
 */
interface TransitionExceptionInterface extends StateMachineExceptionInterface
{
    /**
     * Retrieves the transition that triggered this exception.
     *
     * @since [*next-version*]
     *
     * @return ValueAwareInterface|null The transition.
     */
    public function getTransition();
}
