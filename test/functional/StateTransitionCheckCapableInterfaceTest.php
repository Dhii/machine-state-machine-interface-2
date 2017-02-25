<?php

namespace Dhii\Machine\FuncTest;

use \Dhii\Machine\StateTransitionCheckCapableInterface;
use \Xpmock\TestCase;

/**
 * Tests {@see Dhii\Machine\StateTransitionCheckCapableInterface}.
 *
 * @since [*next-version*]
 */
class StateTransitionCheckCapableInterfaceTest extends TestCase
{
    /**
     * The name of the test subject.
     *
     * @since [*next-version*]
     */
    const TEST_SUBJECT_CLASSNAME = 'Dhii\\Machine\\StateTransitionCheckCapableInterface';

    /**
     * Creates a new instance of the test subject.
     *
     * @since [*next-version*]
     *
     * @return StateTransitionCheckCapableInterface
     */
    public function createInstance()
    {
        $mock = $this->mock(static::TEST_SUBJECT_CLASSNAME)
            ->canTransitionTo()
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
    }
}
