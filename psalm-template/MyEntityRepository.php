<?php


namespace PsalmTemplate;

/**
 * @extends AbstractRepository<\PsalmTemplate\MyEntity>
 */
class MyEntityRepository extends AbstractRepository
{
    public function __construct()
    {
        parent::__construct(MyEntity::class);
    }
}
