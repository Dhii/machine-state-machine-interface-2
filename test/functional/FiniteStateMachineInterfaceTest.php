<?php

namespace Dhii\Machine\FuncTest;

use Dhii\Machine\FiniteStateMachineInterface;
use Xpmock\TestCase;

/**
 * Tests {@see Dhii\Machine\FiniteStateMachineInterface}.
 *
 * @since [*next-version*]
 */
class FiniteStateMachineInterfaceTest extends TestCase
{
    /**
     * The name of the test subject.
     *
     * @since [*next-version*]
     */
    const TEST_SUBJECT_CLASSNAME = 'Dhii\\Machine\\FiniteStateMachineInterface';

    /**
     * Creates a new instance of the test subject.
     *
     * @since [*next-version*]
     *
     * @return FiniteStateMachineInterface
     */
    public function createInstance()
    {
        $mock = $this->mock(static::TEST_SUBJECT_CLASSNAME)
            ->getCurrentState()
            ->getStates()
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
            'Dhii\\Machine\\StateMachineInterface',
            $subject, 'Subject is not a valid StateMachineInterface instance.'
        );
        $this->assertInstanceOf(
            'Dhii\\Machine\\CurrentStateAwareInterface',
            $subject, 'Subject is not a valid CurrentStateAwareInterface instance.'
        );
        $this->assertInstanceOf(
            'Dhii\\Machine\\StatesAwareInterface',
            $subject, 'Subject is not a valid StatesAwareInterface instance.'
        );
    }
}