<?php

namespace EmanueleMinotto\HwiOauthBridge\Traits\Entity;

use Doctrine\ORM\Mapping as ORM;

trait BitlyTrait
{
    /**
     * Bitly username.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $bitlyUsername;

    /**
     * Bitly nickname.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $bitlyNickname;

    /**
     * Bitly first name.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $bitlyFirstName;

    /**
     * Bitly last name.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $bitlyLastName;

    /**
     * Bitly real name.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $bitlyRealName;

    /**
     * Bitly profilePicture.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $bitlyEmail;

    /**
     * Bitly profile picture.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $bitlyProfilePicture;

    /**
     * Bitly access token.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $bitlyAccessToken;

    /**
     * Bitly refresh token.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $bitlyRefreshToken;

    /**
     * Bitly expires in.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $bitlyExpiresIn;

    /**
     * Bitly expires in.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $bitlyExpiresIn;

    /**
     * Bitly data.
     *
     * @var array|null
     *
     * @ORM\Column(type = "json_array", nullable = true)
     */
    private $bitlyData;

    /**
     * Get Bitly access token.
     *
     * @return string|null
     */
    public function getBitlyAccessToken()
    {
        return $this->bitlyAccessToken;
    }

    /**
     * Gets the Bitly data.
     *
     * @return array|null
     */
    public function getBitlyData()
    {
        return $this->bitlyData;
    }

    /**
     * Get Bitly email.
     *
     * @return string|null
     */
    public function getBitlyEmail()
    {
        return $this->bitlyEmail;
    }

    /**
     * Get Bitly expires in.
     *
     * @return string|null
     */
    public function getBitlyExpiresIn()
    {
        return $this->bitlyExpiresIn;
    }

    /**
     * Get Bitly first name.
     *
     * @return string|null
     */
    public function getBitlyFirstName()
    {
        return $this->bitlyFirstName;
    }

    /**
     * Get Bitly last name.
     *
     * @return string|null
     */
    public function getBitlyLastName()
    {
        return $this->bitlyLastName;
    }

    /**
     * Get Bitly nickname.
     *
     * @return string|null
     */
    public function getBitlyNickname()
    {
        return $this->bitlyNickname;
    }

    /**
     * Get Bitly profile picture.
     *
     * @return string|null
     */
    public function getBitlyProfilePicture()
    {
        return $this->bitlyProfilePicture;
    }

    /**
     * Get Bitly real name.
     *
     * @return string|null
     */
    public function getBitlyRealName()
    {
        return $this->bitlyRealName;
    }

    /**
     * Get Bitly refresh token.
     *
     * @return string|null
     */
    public function getBitlyRefreshToken()
    {
        return $this->bitlyRefreshToken;
    }

    /**
     * Get Bitly username.
     *
     * @return string|null
     */
    public function getBitlyUsername()
    {
        return $this->bitlyUsername;
    }

    /**
     * Set Bitly access token.
     *
     * @param string|null $accessToken
     *
     * @return self
     */
    public function setBitlyAccessToken($accessToken)
    {
        $this->bitlyAccessToken = $bitlyAccessToken;

        return $this;
    }

    /**
     * Sets the Bitly data.
     *
     * @param array|null $bitlyData the bitly data
     *
     * @return self
     */
    public function setBitlyData(array $bitlyData = null)
    {
        $this->bitlyData = $bitlyData;

        return $this;
    }

    /**
     * Set Bitly email.
     *
     * @param string|null $email
     *
     * @return self
     */
    public function setBitlyEmail($email)
    {
        $this->bitlyEmail = $bitlyEmail;

        return $this;
    }

    /**
     * Set Bitly expires in.
     *
     * @param string|null $expiresIn
     *
     * @return self
     */
    public function setBitlyExpiresIn($expiresIn)
    {
        $this->bitlyExpiresIn = $bitlyExpiresIn;

        return $this;
    }

    /**
     * Set Bitly first name.
     *
     * @param string|null $firstName
     *
     * @return self
     */
    public function setBitlyFirstName($firstName)
    {
        $this->bitlyFirstName = $bitlyFirstName;

        return $this;
    }

    /**
     * Set Bitly last name.
     *
     * @param string|null $lastName
     *
     * @return self
     */
    public function setBitlyLastName($lastName)
    {
        $this->bitlyLastName = $bitlyLastName;

        return $this;
    }

    /**
     * Set Bitly nickname.
     *
     * @param string|null $nickname
     *
     * @return self
     */
    public function setBitlyNickname($nickname)
    {
        $this->bitlyNickname = $bitlyNickname;

        return $this;
    }

    /**
     * Set Bitly profile picture.
     *
     * @param string|null $profilePicture
     *
     * @return self
     */
    public function setBitlyProfilePicture($profilePicture)
    {
        $this->bitlyProfilePicture = $bitlyProfilePicture;

        return $this;
    }

    /**
     * Set Bitly real name.
     *
     * @param string|null $realName
     *
     * @return self
     */
    public function setBitlyRealName($realName)
    {
        $this->bitlyRealName = $bitlyRealName;

        return $this;
    }

    /**
     * Set Bitly refresh token.
     *
     * @param string|null $refreshToken
     *
     * @return self
     */
    public function setBitlyRefreshToken($refreshToken)
    {
        $this->bitlyRefreshToken = $bitlyRefreshToken;

        return $this;
    }

    /**
     * Set Bitly username.
     *
     * @param string|null $username
     *
     * @return self
     */
    public function setBitlyUsername($username)
    {
        $this->bitlyUsername = $bitlyUsername;

        return $this;
    }
}