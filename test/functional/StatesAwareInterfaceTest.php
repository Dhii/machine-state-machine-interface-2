<?php

namespace Dhii\Machine\FuncTest;

use \Dhii\Machine\StatesAwareInterface;
use \Xpmock\TestCase;

/**
 * Tests {@see Dhii\Machine\StatesAwareInterface}.
 *
 * @since [*next-version*]
 */
class StatesAwareInterfaceTest extends TestCase
{
    /**
     * The name of the test subject.
     *
     * @since [*next-version*]
     */
    const TEST_SUBJECT_CLASSNAME = 'Dhii\\Machine\\StatesAwareInterface';

    /**
     * Creates a new instance of the test subject.
     *
     * @since [*next-version*]
     *
     * @return StatesAwareInterface
     */
    public function createInstance()
    {
        $mock = $this->mock(static::TEST_SUBJECT_CLASSNAME)
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
    }
}
