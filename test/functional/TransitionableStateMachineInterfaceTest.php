<?php

namespace Dhii\Machine\FuncTest;

use Dhii\Machine\TransitionableStateMachineInterface;
use Xpmock\TestCase;

/**
 * Tests {@see Dhii\Machine\TransitionableStateMachineInterface}.
 *
 * @since [*next-version*]
 */
class TransitionableStateMachineInterfaceTest extends TestCase
{
    /**
     * The name of the test subject.
     *
     * @since [*next-version*]
     */
    const TEST_SUBJECT_CLASSNAME = 'Dhii\\Machine\\TransitionableStateMachineInterface';

    /**
     * Creates a new instance of the test subject.
     *
     * @since [*next-version*]
     *
     * @return TransitionableStateMachineInterface
     */
    public function createInstance()
    {
        $mock = $this->mock(static::TEST_SUBJECT_CLASSNAME)
            ->getCurrentState()
            ->transition()
            ->canTransition()
            ->new();

        return $mock;
    }

    /**
     * Tests whether a valid instance of the test subject can be created.
     *
     * @since [*next-version*]
     */
    public function testCanBeCreated()
    {
        $subject = $this->createInstance();

        $this->assertInstanceOf(
            static::TEST_SUBJECT_CLASSNAME, $subject, 'Subject is not a valid instance.'
        );
        $this->assertInstanceOf(
            'Dhii\\Machine\\TransitionableInterface',
            $subject, 'Subject is not a valid TransitionableInterface instance.'
        );
        $this->assertInstanceOf(
            'Dhii\\Machine\\StateMachineInterface',
            $subject, 'Subject is not a valid StateMachineInterface instance.'
        );
        $this->assertInstanceOf(
            'Dhii\\Machine\\CurrentStateAwareInterface',
            $subject, 'Subject is not a valid CurrentStateAwareInterface instance.'
        );
    }
}
