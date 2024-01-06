<?php

declare(strict_types=1);

class Singleton
{
    private static array $instances = [];

    public function __construct()
    {
    }

    /**
     * @return void
     */
    public function __clone(): void
    {
        // TODO: Implement __clone() method.
    }

    /**
     * Cloning and un-serialization are not permitted for singleton
     * @throws Exception
     */
    public function __wakeup(): void
    {
        throw new Exception("Cannot un-serialize the singleton class.");
    }

    /**
     * The method that you will use to get the Singleton's instance
     * Note that here we use the "static" keyword instead of the "self" keyword because we want to support Inheritance
     * @return null|static
     */
    public static function getInstance(): null|static
    {
        $subClass = static::class;
        if (!isset(self::$instances[$subClass])) {
            self::$instances[$subClass] = new static();
        }
        return self::$instances[$subClass];
    }
}