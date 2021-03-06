<?php

namespace Jikan\Model;

use Jikan\Parser;

/**
 * Class SeasonalAnime
 *
 * @package Jikan\Model
 */
class SeasonalAnime extends AnimeCard
{
    /**
     * @var bool
     */
    private $continuing;

    /**
     * @param Parser\Common\AnimeCardParser $parser
     *
     * @return SeasonalAnime
     * @throws \RuntimeException
     * @throws \InvalidArgumentException
     */
    public static function parseSeasonalAnime(Parser\Common\AnimeCardParser $parser): SeasonalAnime
    {
        $instance = new self();
        parent::setProperties($parser, $instance);
        $instance->continuing = $parser->isContinuing();

        return $instance;
    }

    /**
     * @return bool
     */
    public function isContinuing(): bool
    {
        return $this->continuing;
    }
}
