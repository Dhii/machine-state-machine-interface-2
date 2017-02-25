<?php

namespace Dhii\Machine;

/**
 * Something that can represent an exception which indicates that a machine state is invalid.
 *
 * @since [*next-version*]
 */
interface InvalidStateExceptionInterface extends StateMachineExceptionInterface
{
    /**
     * Retrieves the invalid state.
     *
     * @since [*next-version*]
     *
     * @return mixed The state.
     */
    public function getState();
}
