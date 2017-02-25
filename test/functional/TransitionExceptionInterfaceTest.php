<?php

namespace Dhii\Machine\FuncTest;

use Dhii\Machine\TransitionExceptionInterface;
use Xpmock\TestCase;

/**
 * Tests {@see Dhii\Machine\TransitionExceptionInterface}.
 *
 * @since [*next-version*]
 */
class TransitionExceptionInterfaceTest extends TestCase
{
    /**
     * The name of the test subject.
     *
     * @since [*next-version*]
     */
    const TEST_SUBJECT_CLASSNAME = 'Dhii\\Machine\\TransitionExceptionInterface';

    /**
     * Creates a new instance of the test subject.
     *
     * @since [*next-version*]
     *
     * @return TransitionExceptionInterface
     */
    public function createInstance()
    {
        $mock = $this->mock(static::TEST_SUBJECT_CLASSNAME)
            ->getMachine()
            ->getState()
            ->getTransition()
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
            'Dhii\\Machine\\StateMachineExceptionInterface',
            $subject, 'Subject is not a valid StateMachineExceptionInterface instance.'
        );
    }
}
