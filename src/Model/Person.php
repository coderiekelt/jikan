<?php

namespace Jikan\Model;

use Jikan\Helper\Parser;
use Jikan\Parser\Person\PersonParser;

/**
 * Class Person
 *
 * @package Jikan\Model
 */
class Person
{
    /**
     * @var int
     */
    public $malId;

    /**
     * @var string
     */
    public $url;

    /**
     * @var string
     */
    public $imageUrl;

    /**
     * @var string
     */
    public $websiteUrl;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $givenName;

    /**
     * @var string
     */
    public $familyName;

    /**
     * @var string[]
     */
    public $alternateNames;

    /**
     * @var string
     */
    public $birthday;

    /**
     * @var int
     */
    public $memberFavorites;

    /**
     * @var string
     */
    public $about;

    /**
     * @var VoiceActingRole[]
     */
    public $voiceActingRoles = [];

    /**
     * @var AnimeStaffPosition[]
     */
    public $animeStaffPositions = [];

    /**
     * @var PublishedManga[]
     */
    public $publishedManga = [];

    /**
     * @param PersonParser $parser
     *
     * @return Person
     * @throws \RuntimeException
     * @throws \InvalidArgumentException
     */
    public static function fromParser(PersonParser $parser): self
    {
        $instance = new self();
        $instance->malId = $parser->getPersonId();
        $instance->url = $parser->getPersonURL();
        $instance->imageUrl = $parser->getPersonImageUrl();
        $instance->name = $parser->getPersonName();
        $instance->givenName = $parser->getPersonGivenName();
        $instance->familyName = $parser->getPersonFamilyName();
        $instance->alternateNames = $parser->getPersonAlternateNames();
        $instance->websiteUrl = $parser->getPersonWebsite();
        $instance->about = $parser->getPersonAbout();
        $instance->memberFavorites = $parser->getPersonFavorites();
        $instance->voiceActingRoles = $parser->getPersonVoiceActingRoles();
        $instance->animeStaffPositions = $parser->getPersonAnimeStaffPositions();
        $instance->publishedManga = $parser->getPersonPublishedManga();

        return $instance;
    }

    /**
     * @return int
     */
    public function getMalId(): int
    {
        return $this->malId;
    }

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * @return string
     */
    public function getImageUrl(): string
    {
        return $this->imageUrl;
    }

    /**
     * @return string
     */
    public function getWebsiteUrl(): string
    {
        return $this->websiteUrl;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getGivenName(): string
    {
        return $this->givenName;
    }

    /**
     * @return string
     */
    public function getFamilyName(): string
    {
        return $this->familyName;
    }

    /**
     * @return string[]
     */
    public function getAlternateNames(): array
    {
        return $this->alternateNames;
    }

    /**
     * @return \DateTimeImmutable
     */
    public function getBirthday(): ?\DateTimeImmutable
    {
        return Parser::parseDate($this->birthday);
    }

    /**
     * @return int
     */
    public function getMemberFavorites(): int
    {
        return $this->memberFavorites;
    }

    /**
     * @return string
     */
    public function getAbout(): string
    {
        return $this->about;
    }

    /**
     * @return VoiceActingRole[]
     */
    public function getVoiceActingRoles(): array
    {
        return $this->voiceActingRoles;
    }

    /**
     * @param VoiceActingRole[] $voiceActingRoles
     */
    public function setVoiceActingRoles(array $voiceActingRoles): void
    {
        $this->voiceActingRoles = $voiceActingRoles;
    }

    /**
     * @return AnimeStaffPosition[]
     */
    public function getAnimeStaffPositions(): array
    {
        return $this->animeStaffPositions;
    }

    /**
     * @param AnimeStaffPosition[] $animeStaffPositions
     */
    public function setAnimeStaffPositions(array $animeStaffPositions): void
    {
        $this->animeStaffPositions = $animeStaffPositions;
    }

    /**
     * @return PublishedManga[]
     */
    public function getPublishedManga(): array
    {
        return $this->publishedManga;
    }

    /**
     * @param PublishedManga[] $publishedManga
     */
    public function setPublishedManga(array $publishedManga): void
    {
        $this->publishedManga = $publishedManga;
    }
}
