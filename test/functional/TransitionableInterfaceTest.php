<?php

namespace Dhii\Machine\FuncTest;

use \Dhii\Machine\TransitionableInterface;
use \Xpmock\TestCase;

/**
 * Tests {@see Dhii\Machine\TransitionableInterface}.
 *
 * @since [*next-version*]
 */
class TransitionableInterfaceTest extends TestCase
{
    /**
     * The name of the test subject.
     *
     * @since [*next-version*]
     */
    const TEST_SUBJECT_CLASSNAME = 'Dhii\\Machine\\TransitionableInterface';

    /**
     * Creates a new instance of the test subject.
     *
     * @since [*next-version*]
     *
     * @return TransitionableInterface
     */
    public function createInstance()
    {
        $mock = $this->mock(static::TEST_SUBJECT_CLASSNAME)
            ->canTransition()
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
            'Dhii\\Machine\\TransitionCheckCapableInterface',
            $subject, 'Subject is not a valid instance.'
        );
        $this->assertInstanceOf(
            'Dhii\\Machine\\TransitionCapableInterface',
            $subject, 'Subject is not a valid instance.'
        );
    }
}
