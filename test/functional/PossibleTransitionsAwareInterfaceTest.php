<?php

namespace Dhii\Machine\FuncTest;

use Dhii\Machine\PossibleTransitionsAwareInterface;
use Xpmock\TestCase;

/**
 * Tests {@see Dhii\Machine\PossibleTransitionsAwareInterface}.
 *
 * @since [*next-version*]
 */
class PossibleTransitionsAwareInterfaceTest extends TestCase
{
    /**
     * The name of the test subject.
     *
     * @since [*next-version*]
     */
    const TEST_SUBJECT_CLASSNAME = 'Dhii\\Machine\\PossibleTransitionsAwareInterface';

    /**
     * Creates a new instance of the test subject.
     *
     * @since [*next-version*]
     *
     * @return PossibleTransitionsAwareInterface
     */
    public function createInstance()
    {
        $mock = $this->mock(static::TEST_SUBJECT_CLASSNAME)
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
    }
}
