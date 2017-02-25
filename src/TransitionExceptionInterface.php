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
     * Retrieves the state involved in the transition that triggered this exception.
     *
     * @since [*next-version*]
     *
     * @return ValueAwareInterface|null The state instance, if any.
     */
    public function getState();

    /**
     * Retrieves the transition that triggered this exception.
     *
     * @since [*next-version*]
     *
     * @return ValueAwareInterface|null The transition.
     */
    public function getTransition();
}
