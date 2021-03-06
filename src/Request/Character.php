<?php

namespace Jikan\Request;

/**
 * Class Character
 *
 * @package Jikan\Request
 */
class Character implements RequestInterface
{
    /**
     * @var int
     */
    private $characterId;

    /**
     * Character constructor.
     *
     * @param int $characterId
     */
    public function __construct($characterId)
    {
        $this->characterId = $characterId;
    }

    /**
     * Get the path to request
     *
     * @return string
     */
    public function getPath(): string
    {
        return sprintf('https://myanimelist.net/character/%s', $this->characterId);
    }
}
