<?php

namespace Jikan\Request;

/**
 * Class AnimeRequest
 *
 * @package Jikan\Request
 */
class Anime implements RequestInterface
{
    /**
     * @var bool
     */
    private $characters = false;

    /**
     * @var int
     */
    private $id;

    /**
     * AnimeRequest constructor.
     *
     * @param int $id
     */
    public function __construct($id)
    {
        $this->id = $id;
    }

    /**
     * @return Anime
     */
    public function withCharacters(): self
    {
        $this->characters = true;

        return $this;
    }

    /**
     * @return bool
     */
    public function hasCharacters(): bool
    {
        return $this->characters;
    }

    /**
     * @return string
     */
    public function getPath(): string
    {
        return sprintf('https://myanimelist.net/anime/%s/', $this->id);
    }
}
