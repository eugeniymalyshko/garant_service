<?php

namespace Psr\Log\Test;

use Psr\Log\LoggerInterface;
use Psr\Log\LogLevel;
use PHPUnit\Framework\TestCase;

/**
 * Provides a base test class for ensuring compliance with the LoggerInterface.
 *
 * Implementors can extend the class and implement abstract methods to run this
 * as part of their test suite.
 */
abstract class LoggerInterfaceTest extends TestCase
{
    /**
     * @return LoggerInterface
     */
    abstract public function getLogger();

    /**
     * This must return the log messages in order.
     *
     * The simple formatting of the messages is: "<LOG LEVEL> <MESSAGE>".
     *
     * Example ->error('Foo') would yield "error Foo".
     *
     * @return string[]
     */
    abstract public function getLogs();

    public function testImplements()
    {
        $this->assertInstanceOf('Psr\Log\LoggerInterface', $this->getLogger());
    }

    /**
     * @dataProvider provideLevelsAndMessages
     */
    public function testLogsAtAllLevels($level, $message)
    {
        $logger = $this->getLogger();
        $logger->{$level}($message, array('User' => 'Bob'));
        $logger->log($level, $message, array('User' => 'Bob'));

        $expected = array(
            $level.' message of level '.$level.' with context: Bob',
            $level.' message of level '.$level.' with context: Bob',
        );
        $this->assertEquals($expected, $this->getLogs());
    }

    public function provideLevelsAndMessages()
    {
        return array(
            LogLevel::EMERGENCY => array(LogLevel::EMERGENCY, 'message of level emergency with context: {User}'),
            LogLevel::ALERT => array(LogLevel::ALERT, 'message of level alert with context: {User}'),
            LogLevel::CRITICAL => array(LogLevel::CRITICAL, 'message of level critical with context: {User}'),
            LogLevel::ERROR => array(LogLevel::ERROR, 'message of level error with context: {User}'),
            LogLevel::WARNING => array(LogLevel::WARNING, 'message of level warning with context: {User}'),
            LogLevel::NOTICE => array(LogLevel::NOTICE, 'message of level notice with context: {User}'),
            LogLevel::INFO => array(LogLevel::INFO, 'message of level info with context: {User}'),
            LogLevel::DEBUG => array(LogLevel::DEBUG, 'message of level debug with context: {User}'),
        );
    }

    /**
     * @expectedException \Psr\Log\InvalidArgumentException
     */
    public function testThrowsOnInvalidLevel()
    {
        $logger = $this->getLogger();
        $logger->log('invalid level', 'Foo');
    }

    public function testContextReplacement()
    {
        $logger = $this->getLogger();
        $logger->info('{Message {nothing} {User} {foo.bar} a}', array('User' => 'Bob', 'foo.bar' => 'Bar'));

        $expected = array('info {Message {nothing} Bob Bar a}');
        $this->assertEquals($expected, $this->getLogs());
    }

    public function testObjectCastToString()
    {
        if (method_exists($this, 'createPartialMock')) {
            $dummy = $this->createPartialMock('Psr\Log\Test\DummyTest', array('__toString'));
        } else {
            $dummy = $this->getMock('Psr\Log\Test\DummyTest', array('__toString'));
        }
        $dummy->expects($this->once())
            ->method('__toString')
            ->will($this->returnValue('DUMMY'));

        $this->getLogger()->warning($dummy);

        $expected = array('warning DUMMY');
        $this->assertEquals($expected, $this->getLogs());
    }

    public function testContextCanContainAnything()
    {
        $closed = fopen('php://memory', 'r');
        fclose($closed);

        $context = array(
            'bool' => true,
            'null' => null,
            'string' => 'Foo',
            'int' => 0,
            'float' => 0.5,
            'nested' => array('with object' => new DummyTest),
            'object' => new \DateTime,
            'resource' => fopen('php://memory', 'r'),
            'closed' => $closed,
        );

        $this->getLogger()->warning('Crazy context data', $context);

        $expected = array('warning Crazy context data');
        $this->assertEquals($expected, $this->getLogs());
    }

    public function testContextExceptionKeyCanBeExceptionOrOtherValues()
    {
        $logger = $this->getLogger();
        $logger->warning('Random message', array('exception' => 'oops'));
        $logger->critical('Uncaught Exception!', array('exception' => new \LogicException('Fail')));

        $expected = array(
            'warning Random message',
            'critical Uncaught Exception!'
        );
        $this->assertEquals($expected, $this->getLogs());
    }
}