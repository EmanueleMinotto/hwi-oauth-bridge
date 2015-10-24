<?php

namespace EmanueleMinotto\HwiOauthBridge\Traits\Entity;

use Doctrine\ORM\Mapping as ORM;

trait TrelloTrait
{
    /**
     * Trello username.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $trelloUsername;

    /**
     * Trello nickname.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $trelloNickname;

    /**
     * Trello first name.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $trelloFirstName;

    /**
     * Trello last name.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $trelloLastName;

    /**
     * Trello real name.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $trelloRealName;

    /**
     * Trello profilePicture.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $trelloEmail;

    /**
     * Trello profile picture.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $trelloProfilePicture;

    /**
     * Trello access token.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $trelloAccessToken;

    /**
     * Trello refresh token.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $trelloRefreshToken;

    /**
     * Trello expires in.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $trelloExpiresIn;

    /**
     * Trello data.
     *
     * @var array|null
     *
     * @ORM\Column(type = "json_array", nullable = true)
     */
    private $trelloData;

    /**
     * Get Trello access token.
     *
     * @return string|null
     */
    public function getTrelloAccessToken()
    {
        return $this->trelloAccessToken;
    }

    /**
     * Gets the Trello data.
     *
     * @return array|null
     */
    public function getTrelloData()
    {
        return $this->trelloData;
    }

    /**
     * Get Trello email.
     *
     * @return string|null
     */
    public function getTrelloEmail()
    {
        return $this->trelloEmail;
    }

    /**
     * Get Trello expires in.
     *
     * @return string|null
     */
    public function getTrelloExpiresIn()
    {
        return $this->trelloExpiresIn;
    }

    /**
     * Get Trello first name.
     *
     * @return string|null
     */
    public function getTrelloFirstName()
    {
        return $this->trelloFirstName;
    }

    /**
     * Get Trello last name.
     *
     * @return string|null
     */
    public function getTrelloLastName()
    {
        return $this->trelloLastName;
    }

    /**
     * Get Trello nickname.
     *
     * @return string|null
     */
    public function getTrelloNickname()
    {
        return $this->trelloNickname;
    }

    /**
     * Get Trello profile picture.
     *
     * @return string|null
     */
    public function getTrelloProfilePicture()
    {
        return $this->trelloProfilePicture;
    }

    /**
     * Get Trello real name.
     *
     * @return string|null
     */
    public function getTrelloRealName()
    {
        return $this->trelloRealName;
    }

    /**
     * Get Trello refresh token.
     *
     * @return string|null
     */
    public function getTrelloRefreshToken()
    {
        return $this->trelloRefreshToken;
    }

    /**
     * Get Trello username.
     *
     * @return string|null
     */
    public function getTrelloUsername()
    {
        return $this->trelloUsername;
    }

    /**
     * Set Trello access token.
     *
     * @param string|null $accessToken
     *
     * @return self
     */
    public function setTrelloAccessToken($accessToken)
    {
        $this->trelloAccessToken = $accessToken;

        return $this;
    }

    /**
     * Sets the Trello data.
     *
     * @param array|null $data the trello data
     *
     * @return self
     */
    public function setTrelloData(array $data = null)
    {
        $this->trelloData = $data;

        return $this;
    }

    /**
     * Set Trello email.
     *
     * @param string|null $email
     *
     * @return self
     */
    public function setTrelloEmail($email)
    {
        $this->trelloEmail = $email;

        return $this;
    }

    /**
     * Set Trello expires in.
     *
     * @param string|null $expiresIn
     *
     * @return self
     */
    public function setTrelloExpiresIn($expiresIn)
    {
        $this->trelloExpiresIn = $expiresIn;

        return $this;
    }

    /**
     * Set Trello first name.
     *
     * @param string|null $firstName
     *
     * @return self
     */
    public function setTrelloFirstName($firstName)
    {
        $this->trelloFirstName = $firstName;

        return $this;
    }

    /**
     * Set Trello last name.
     *
     * @param string|null $lastName
     *
     * @return self
     */
    public function setTrelloLastName($lastName)
    {
        $this->trelloLastName = $lastName;

        return $this;
    }

    /**
     * Set Trello nickname.
     *
     * @param string|null $nickname
     *
     * @return self
     */
    public function setTrelloNickname($nickname)
    {
        $this->trelloNickname = $nickname;

        return $this;
    }

    /**
     * Set Trello profile picture.
     *
     * @param string|null $profilePicture
     *
     * @return self
     */
    public function setTrelloProfilePicture($profilePicture)
    {
        $this->trelloProfilePicture = $profilePicture;

        return $this;
    }

    /**
     * Set Trello real name.
     *
     * @param string|null $realName
     *
     * @return self
     */
    public function setTrelloRealName($realName)
    {
        $this->trelloRealName = $realName;

        return $this;
    }

    /**
     * Set Trello refresh token.
     *
     * @param string|null $refreshToken
     *
     * @return self
     */
    public function setTrelloRefreshToken($refreshToken)
    {
        $this->trelloRefreshToken = $refreshToken;

        return $this;
    }

    /**
     * Set Trello username.
     *
     * @param string|null $username
     *
     * @return self
     */
    public function setTrelloUsername($username)
    {
        $this->trelloUsername = $username;

        return $this;
    }
}
