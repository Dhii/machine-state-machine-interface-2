<?php

namespace Dhii\Machine\FuncTest;

use Dhii\Machine\InvalidStateExceptionInterface;
use Xpmock\TestCase;

/**
 * Tests {@see Dhii\Machine\InvalidStateExceptionInterface}.
 *
 * @since [*next-version*]
 */
class InvalidStateExceptionInterfaceTest extends TestCase
{
    /**
     * The name of the test subject.
     *
     * @since [*next-version*]
     */
    const TEST_SUBJECT_CLASSNAME = 'Dhii\\Machine\\InvalidStateExceptionInterface';

    /**
     * Creates a new instance of the test subject.
     *
     * @since [*next-version*]
     *
     * @return InvalidStateExceptionInterface
     */
    public function createInstance()
    {
        $mock = $this->mock(static::TEST_SUBJECT_CLASSNAME)
            ->getMachine()
            ->getState()
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
            $subject, 'Subject is not a valid instance.'
        );
    }
}
