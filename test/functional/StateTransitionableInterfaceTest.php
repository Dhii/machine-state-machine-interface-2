<?php

namespace Dhii\Machine\FuncTest;

use Xpmock\TestCase;

/**
 * Tests {@see Dhii\Machine\StateTransitionableInterface}.
 *
 * @since [*next-version*]
 */
class StateTransitionableInterfaceTest extends TestCase
{
    /**
     * The name of the test subject.
     *
     * @since [*next-version*]
     */
    const TEST_SUBJECT_CLASSNAME = 'Dhii\\Machine\\StateTransitionableInterface';

    /**
     * Creates a new instance of the test subject.
     *
     * @since [*next-version*]
     *
     * @return Dhii\Machine\StateTransitionableInterface
     */
    public function createInstance()
    {
        $mock = $this->mock(static::TEST_SUBJECT_CLASSNAME)
            ->canTransitionTo()
            ->transitionTo()
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
            'Dhii\\Machine\\StateTransitionCheckCapableInterface',
            $subject, 'Subject is not a valid instance.'
        );
        $this->assertInstanceOf(
            'Dhii\\Machine\\StateTransitionCapableInterface',
            $subject, 'Subject is not a valid instance.'
        );
    }
}
