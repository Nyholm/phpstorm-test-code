<?php


namespace PsalmTemplate;

/**
 * @template T
 */
class AbstractRepository {
    private string $class;

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