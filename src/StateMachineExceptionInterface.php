<?php

namespace Dhii\Machine;

/**
 * Something that represents a problem encountered in a state machine operation.
 *
 * @since [*next-version*]
 */
interface StateMachineExceptionInterface
{
    /**
     * Retrieves the machine that is triggered this exception.
     *
     * @since [*next-version*]
     *
     * @return StateMachineInterface|null The machine instance, if any.
     */
    public function getMachine();
}
