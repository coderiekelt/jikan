<?php

namespace Jikan\Request;

/**
 * Class Friends
 *
 * @package Jikan\Request
 */
class Friends implements RequestInterface
{

    /**
     * @var string
     */
    private $username;
    /**
     * @var int
     */
    private $page;

    /**
     * UserProfileRequest constructor.
     *
     * @param string $username
     * @param int    $page starts at 0
     */
    public function __construct(string $username, int $page = 0)
    {
        $this->username = $username;
        $this->page = $page;
    }

    /**
     * @return string
     */
    public function getPath(): string
    {
        $query = '';
        if ($this->page) {
            $query = '?'.http_build_query(['offset' => $this->page * 100]);
        }

        return sprintf('https://myanimelist.net/profile/%s/friends%s', $this->username, $query);
    }
}
