<?php

namespace EmanueleMinotto\HwiOauthBridge\Traits\Entity;

use Doctrine\ORM\Mapping as ORM;

trait TwitchTrait
{
    /**
     * Twitch username.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $twitchUsername;

    /**
     * Twitch nickname.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $twitchNickname;

    /**
     * Twitch first name.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $twitchFirstName;

    /**
     * Twitch last name.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $twitchLastName;

    /**
     * Twitch real name.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $twitchRealName;

    /**
     * Twitch profilePicture.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $twitchEmail;

    /**
     * Twitch profile picture.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $twitchProfilePicture;

    /**
     * Twitch access token.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $twitchAccessToken;

    /**
     * Twitch refresh token.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $twitchRefreshToken;

    /**
     * Twitch expires in.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $twitchExpiresIn;

    /**
     * Twitch data.
     *
     * @var array|null
     *
     * @ORM\Column(type = "json_array", nullable = true)
     */
    private $twitchData;

    /**
     * Get Twitch access token.
     *
     * @return string|null
     */
    public function getTwitchAccessToken()
    {
        return $this->twitchAccessToken;
    }

    /**
     * Gets the Twitch data.
     *
     * @return array|null
     */
    public function getTwitchData()
    {
        return $this->twitchData;
    }

    /**
     * Get Twitch email.
     *
     * @return string|null
     */
    public function getTwitchEmail()
    {
        return $this->twitchEmail;
    }

    /**
     * Get Twitch expires in.
     *
     * @return string|null
     */
    public function getTwitchExpiresIn()
    {
        return $this->twitchExpiresIn;
    }

    /**
     * Get Twitch first name.
     *
     * @return string|null
     */
    public function getTwitchFirstName()
    {
        return $this->twitchFirstName;
    }

    /**
     * Get Twitch last name.
     *
     * @return string|null
     */
    public function getTwitchLastName()
    {
        return $this->twitchLastName;
    }

    /**
     * Get Twitch nickname.
     *
     * @return string|null
     */
    public function getTwitchNickname()
    {
        return $this->twitchNickname;
    }

    /**
     * Get Twitch profile picture.
     *
     * @return string|null
     */
    public function getTwitchProfilePicture()
    {
        return $this->twitchProfilePicture;
    }

    /**
     * Get Twitch real name.
     *
     * @return string|null
     */
    public function getTwitchRealName()
    {
        return $this->twitchRealName;
    }

    /**
     * Get Twitch refresh token.
     *
     * @return string|null
     */
    public function getTwitchRefreshToken()
    {
        return $this->twitchRefreshToken;
    }

    /**
     * Get Twitch username.
     *
     * @return string|null
     */
    public function getTwitchUsername()
    {
        return $this->twitchUsername;
    }

    /**
     * Set Twitch access token.
     *
     * @param string|null $accessToken
     *
     * @return self
     */
    public function setTwitchAccessToken($accessToken)
    {
        $this->twitchAccessToken = $accessToken;

        return $this;
    }

    /**
     * Sets the Twitch data.
     *
     * @param array|null $data
     *
     * @return self
     */
    public function setTwitchData(array $data = null)
    {
        $this->twitchData = $data;

        return $this;
    }

    /**
     * Set Twitch email.
     *
     * @param string|null $email
     *
     * @return self
     */
    public function setTwitchEmail($email)
    {
        $this->twitchEmail = $email;

        return $this;
    }

    /**
     * Set Twitch expires in.
     *
     * @param string|null $expiresIn
     *
     * @return self
     */
    public function setTwitchExpiresIn($expiresIn)
    {
        $this->twitchExpiresIn = $expiresIn;

        return $this;
    }

    /**
     * Set Twitch first name.
     *
     * @param string|null $firstName
     *
     * @return self
     */
    public function setTwitchFirstName($firstName)
    {
        $this->twitchFirstName = $firstName;

        return $this;
    }

    /**
     * Set Twitch last name.
     *
     * @param string|null $lastName
     *
     * @return self
     */
    public function setTwitchLastName($lastName)
    {
        $this->twitchLastName = $lastName;

        return $this;
    }

    /**
     * Set Twitch nickname.
     *
     * @param string|null $nickname
     *
     * @return self
     */
    public function setTwitchNickname($nickname)
    {
        $this->twitchNickname = $nickname;

        return $this;
    }

    /**
     * Set Twitch profile picture.
     *
     * @param string|null $profilePicture
     *
     * @return self
     */
    public function setTwitchProfilePicture($profilePicture)
    {
        $this->twitchProfilePicture = $profilePicture;

        return $this;
    }

    /**
     * Set Twitch real name.
     *
     * @param string|null $realName
     *
     * @return self
     */
    public function setTwitchRealName($realName)
    {
        $this->twitchRealName = $realName;

        return $this;
    }

    /**
     * Set Twitch refresh token.
     *
     * @param string|null $refreshToken
     *
     * @return self
     */
    public function setTwitchRefreshToken($refreshToken)
    {
        $this->twitchRefreshToken = $refreshToken;

        return $this;
    }

    /**
     * Set Twitch username.
     *
     * @param string|null $username
     *
     * @return self
     */
    public function setTwitchUsername($username)
    {
        $this->twitchUsername = $username;

        return $this;
    }
}
