<?php

namespace Dhii\Machine\FuncTest;

use Dhii\Machine\DeterministicFiniteStateMachineInterface;
use Xpmock\TestCase;

/**
 * Tests {@see Dhii\Machine\DeterministicFiniteStateMachineInterface}.
 *
 * @since [*next-version*]
 */
class DeterministicFiniteStateMachineInterfaceTest extends TestCase
{
    /**
     * The name of the test subject.
     *
     * @since [*next-version*]
     */
    const TEST_SUBJECT_CLASSNAME = 'Dhii\\Machine\\DeterministicFiniteStateMachineInterface';

    /**
     * Creates a new instance of the test subject.
     *
     * @since [*next-version*]
     *
     * @return DeterministicFiniteStateMachineInterface
     */
    public function createInstance()
    {
        $mock = $this->mock(static::TEST_SUBJECT_CLASSNAME)
            ->getCurrentState()
            ->getStates()
            ->getTransitions()
            ->getPossibleTransitions()
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
            'Dhii\\Machine\\FiniteStateMachineInterface',
            $subject, 'Subject is not a valid FiniteStateMachineInterface instance.'
        );
        $this->assertInstanceOf(
            'Dhii\\Machine\\TransitionsAwareInterface',
            $subject, 'Subject is not a valid TransitionsAwareInterface instance.'
        );
        $this->assertInstanceOf(
            'Dhii\\Machine\\PossibleTransitionsAwareInterface',
            $subject, 'Subject is not a valid PossibleTransitionsAwareInterface instance.'
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
