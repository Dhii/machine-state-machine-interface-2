<?php

namespace Dhii\Machine;

use Dhii\Data\ValueAwareInterface;

/**
 * Something that can transition to a specific state.
 *
 * @since [*next-version*]
 */
interface StateTransitionCapableInterface
{
    /**
     * Transitions this instance to a specific state.
     *
     * @since [*next-version*]
     *
     * @param ValueAwareInterface $state The state to transition to.
     *
     * @throws TransitionExceptionInterface If the transition failed.
     * @throws InvalidStateExceptionInterface If the state is invalid.
     */
    public function transitionTo(ValueAwareInterface $state);
}
