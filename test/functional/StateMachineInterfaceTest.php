<?php

namespace Dhii\Machine\FuncTest;

use \Dhii\Machine\StateMachineInterface;
use \Xpmock\TestCase;

/**
 * Tests {@see Dhii\Machine\StateMachineInterface}.
 *
 * @since [*next-version*]
 */
class StateMachineInterfaceTest extends TestCase
{
    /**
     * The name of the test subject.
     *
     * @since [*next-version*]
     */
    const TEST_SUBJECT_CLASSNAME = 'Dhii\\Machine\\StateMachineInterface';

    /**
     * Creates a new instance of the test subject.
     *
     * @since [*next-version*]
     *
     * @return StateMachineInterface
     */
    public function createInstance()
    {
        $mock = $this->mock(static::TEST_SUBJECT_CLASSNAME)
            ->getCurrentState()
            ->transition()
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
            'Dhii\\Machine\\StateAwareInterface', $subject, 'Subject is not a valid StateAwareInterface instance.'
        );
        $this->assertInstanceOf(
            'Dhii\\Machine\\TransitionCapableInterface', $subject, 'Subject is not a valid TransitionCapableInterface instance.'
        );
    }
}
