<?php

namespace Dhii\Machine\FuncTest;

use \Dhii\Machine\TransitionInterface;
use \Xpmock\TestCase;

/**
 * Tests {@see Dhii\Machine\TransitionInterface}.
 *
 * @since [*next-version*]
 */
class TransitionInterfaceTest extends TestCase
{
    /**
     * The name of the test subject.
     *
     * @since [*next-version*]
     */
    const TEST_SUBJECT_CLASSNAME = 'Dhii\\Machine\\TransitionInterface';

    /**
     * Creates a new instance of the test subject.
     *
     * @since [*next-version*]
     *
     * @return TransitionInterface
     */
    public function createInstance()
    {
        $mock = $this->mock(static::TEST_SUBJECT_CLASSNAME)
            ->getValue()
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
            'Dhii\\Data\\ValueAwareInterface', $subject, 'Subject is not a valid instance.'
        );
    }
}
