<?php

namespace Dhii\Machine\FuncTest;

use \Dhii\Machine\TransitionCheckCapableInterface;
use \Xpmock\TestCase;

/**
 * Tests {@see Dhii\Machine\TransitionCheckCapableInterface}.
 *
 * @since [*next-version*]
 */
class TransitionCheckCapableInterfaceTest extends TestCase
{
    /**
     * The name of the test subject.
     *
     * @since [*next-version*]
     */
    const TEST_SUBJECT_CLASSNAME = 'Dhii\\Machine\\TransitionCheckCapableInterface';

    /**
     * Creates a new instance of the test subject.
     *
     * @since [*next-version*]
     *
     * @return TransitionCheckCapableInterface
     */
    public function createInstance()
    {
        $mock = $this->mock(static::TEST_SUBJECT_CLASSNAME)
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
    }
}
