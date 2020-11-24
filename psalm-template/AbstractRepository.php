<?php


namespace PsalmTemplate;

/**
 * @template T of object
 */
abstract class AbstractRepository
{
    /**
    * @var class-string<T> $class
    */
    private string $class;

    /**
     * @psalm-param class-string<T> $class
     */
    public function __construct(string $class)
    {
        $this->class = $class;
    }

    /**
     * @return T
     */
    public function getOne()
    {
        $class = $this->class;
        return new $class();
    }
}
