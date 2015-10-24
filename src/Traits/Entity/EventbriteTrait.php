<?php

namespace EmanueleMinotto\HwiOauthBridge\Traits\Entity;

use Doctrine\ORM\Mapping as ORM;

trait EventbriteTrait
{
    /**
     * Eventbrite username.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $eventbriteUsername;

    /**
     * Eventbrite nickname.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $eventbriteNickname;

    /**
     * Eventbrite first name.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $eventbriteFirstName;

    /**
     * Eventbrite last name.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $eventbriteLastName;

    /**
     * Eventbrite real name.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $eventbriteRealName;

    /**
     * Eventbrite profilePicture.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $eventbriteEmail;

    /**
     * Eventbrite profile picture.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $eventbriteProfilePicture;

    /**
     * Eventbrite access token.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $eventbriteAccessToken;

    /**
     * Eventbrite refresh token.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $eventbriteRefreshToken;

    /**
     * Eventbrite expires in.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $eventbriteExpiresIn;

    /**
     * Eventbrite expires in.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $eventbriteExpiresIn;

    /**
     * Eventbrite data.
     *
     * @var array|null
     *
     * @ORM\Column(type = "json_array", nullable = true)
     */
    private $eventbriteData;

    /**
     * Get Eventbrite access token.
     *
     * @return string|null
     */
    public function getEventbriteAccessToken()
    {
        return $this->eventbriteAccessToken;
    }

    /**
     * Gets the Eventbrite data.
     *
     * @return array|null
     */
    public function getEventbriteData()
    {
        return $this->eventbriteData;
    }

    /**
     * Get Eventbrite email.
     *
     * @return string|null
     */
    public function getEventbriteEmail()
    {
        return $this->eventbriteEmail;
    }

    /**
     * Get Eventbrite expires in.
     *
     * @return string|null
     */
    public function getEventbriteExpiresIn()
    {
        return $this->eventbriteExpiresIn;
    }

    /**
     * Get Eventbrite first name.
     *
     * @return string|null
     */
    public function getEventbriteFirstName()
    {
        return $this->eventbriteFirstName;
    }

    /**
     * Get Eventbrite last name.
     *
     * @return string|null
     */
    public function getEventbriteLastName()
    {
        return $this->eventbriteLastName;
    }

    /**
     * Get Eventbrite nickname.
     *
     * @return string|null
     */
    public function getEventbriteNickname()
    {
        return $this->eventbriteNickname;
    }

    /**
     * Get Eventbrite profile picture.
     *
     * @return string|null
     */
    public function getEventbriteProfilePicture()
    {
        return $this->eventbriteProfilePicture;
    }

    /**
     * Get Eventbrite real name.
     *
     * @return string|null
     */
    public function getEventbriteRealName()
    {
        return $this->eventbriteRealName;
    }

    /**
     * Get Eventbrite refresh token.
     *
     * @return string|null
     */
    public function getEventbriteRefreshToken()
    {
        return $this->eventbriteRefreshToken;
    }

    /**
     * Get Eventbrite username.
     *
     * @return string|null
     */
    public function getEventbriteUsername()
    {
        return $this->eventbriteUsername;
    }

    /**
     * Set Eventbrite access token.
     *
     * @param string|null $accessToken
     *
     * @return self
     */
    public function setEventbriteAccessToken($accessToken)
    {
        $this->eventbriteAccessToken = $eventbriteAccessToken;

        return $this;
    }

    /**
     * Sets the Eventbrite data.
     *
     * @param array|null $eventbriteData the eventbrite data
     *
     * @return self
     */
    public function setEventbriteData(array $eventbriteData = null)
    {
        $this->eventbriteData = $eventbriteData;

        return $this;
    }

    /**
     * Set Eventbrite email.
     *
     * @param string|null $email
     *
     * @return self
     */
    public function setEventbriteEmail($email)
    {
        $this->eventbriteEmail = $eventbriteEmail;

        return $this;
    }

    /**
     * Set Eventbrite expires in.
     *
     * @param string|null $expiresIn
     *
     * @return self
     */
    public function setEventbriteExpiresIn($expiresIn)
    {
        $this->eventbriteExpiresIn = $eventbriteExpiresIn;

        return $this;
    }

    /**
     * Set Eventbrite first name.
     *
     * @param string|null $firstName
     *
     * @return self
     */
    public function setEventbriteFirstName($firstName)
    {
        $this->eventbriteFirstName = $eventbriteFirstName;

        return $this;
    }

    /**
     * Set Eventbrite last name.
     *
     * @param string|null $lastName
     *
     * @return self
     */
    public function setEventbriteLastName($lastName)
    {
        $this->eventbriteLastName = $eventbriteLastName;

        return $this;
    }

    /**
     * Set Eventbrite nickname.
     *
     * @param string|null $nickname
     *
     * @return self
     */
    public function setEventbriteNickname($nickname)
    {
        $this->eventbriteNickname = $eventbriteNickname;

        return $this;
    }

    /**
     * Set Eventbrite profile picture.
     *
     * @param string|null $profilePicture
     *
     * @return self
     */
    public function setEventbriteProfilePicture($profilePicture)
    {
        $this->eventbriteProfilePicture = $eventbriteProfilePicture;

        return $this;
    }

    /**
     * Set Eventbrite real name.
     *
     * @param string|null $realName
     *
     * @return self
     */
    public function setEventbriteRealName($realName)
    {
        $this->eventbriteRealName = $eventbriteRealName;

        return $this;
    }

    /**
     * Set Eventbrite refresh token.
     *
     * @param string|null $refreshToken
     *
     * @return self
     */
    public function setEventbriteRefreshToken($refreshToken)
    {
        $this->eventbriteRefreshToken = $eventbriteRefreshToken;

        return $this;
    }

    /**
     * Set Eventbrite username.
     *
     * @param string|null $username
     *
     * @return self
     */
    public function setEventbriteUsername($username)
    {
        $this->eventbriteUsername = $eventbriteUsername;

        return $this;
    }
}