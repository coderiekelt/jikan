<?php

namespace Jikan\Request;

class Seasonal implements RequestInterface
{
    /**
     * @var int
     */
    private $year;

    /**
     * @var string
     */
    private $season;

    /**
     * Season constructor.
     *
     * @param int    $year
     * @param string $season
     *
     * @throws \InvalidArgumentException
     */
    public function __construct(int $year, string $season)
    {
        if (!\in_array($season, ['winter', 'spring', 'summer', 'autumn'])) {
            throw new \InvalidArgumentException(sprintf('Season %s is not valid', $season));
        }
        $this->year = $year;
        $this->season = $season;
    }

    /**
     * @return string
     */
    public function getPath(): string
    {
        return sprintf('https://myanimelist.net/anime/season/%s/%s', $this->year, $this->season);
    }
}
