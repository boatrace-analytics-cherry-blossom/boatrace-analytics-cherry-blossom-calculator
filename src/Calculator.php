<?php

namespace Boatrace\Analytics\Cherry\Blossom;

use DI\Container;
use DI\ContainerBuilder;

/**
 * @author shimomo
 */
class Calculator
{
    /**
     * @var \Boatrace\Analytics\Cherry\Blossom\MainCalculator
     */
    protected $calculator;

    /**
     * @var \Boatrace\Analytics\Cherry\Blossom\Calculator
     */
    protected static $instance;

    /**
     * @var \DI\Container
     */
    protected static $container;

    /**
     * @param  \Boatrace\Analytics\Cherry\Blossom\MainCalculator  $calculator
     * @return void
     */
    public function __construct(MainCalculator $calculator)
    {
        $this->calculator = $calculator;
    }

    /**
     * @param  string  $name
     * @param  array   $arguments
     * @return mixed
     */
    public function __call(string $name, array $arguments)
    {
        return call_user_func_array([$this->calculator, $name], $arguments);
    }

    /**
     * @param  string  $name
     * @param  array   $arguments
     * @return mixed
     */
    public static function __callStatic(string $name, array $arguments)
    {
        return call_user_func_array([self::getInstance(), $name], $arguments);
    }

    /**
     * @return \Boatrace\Analytics\Cherry\Blossom\Calculator
     */
    public static function getInstance(): Calculator
    {
        return self::$instance ?? self::$instance = (
            self::$container ?? self::$container = self::getContainer()
        )->get('Calculator');
    }

    /**
     * @return \DI\Container
     */
    public static function getContainer(): Container
    {
        $builder = new ContainerBuilder;

        $builder->addDefinitions(__DIR__ . '/../config/definitions.php');

        return $builder->build();
    }
}
