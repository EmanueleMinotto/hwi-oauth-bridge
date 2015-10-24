<?php

namespace EmanueleMinotto\HwiOauthBridge\Traits\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;

trait BitlyTrait
{
    /**
     * Bitly username.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $bitlyUsername;

    /**
     * Bitly nickname.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $bitlyNickname;

    /**
     * Bitly first name.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $bitlyFirstName;

    /**
     * Bitly last name.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $bitlyLastName;

    /**
     * Bitly real name.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $bitlyRealName;

    /**
     * Bitly profilePicture.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $bitlyEmail;

    /**
     * Bitly profile picture.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $bitlyProfilePicture;

    /**
     * Bitly access token.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $bitlyAccessToken;

    /**
     * Bitly refresh token.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $bitlyRefreshToken;

    /**
     * Bitly expires in.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $bitlyExpiresIn;

    /**
     * Bitly expires in.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $bitlyExpiresIn;

    /**
     * Bitly data.
     *
     * @var array|null
     *
     * @ODM\Hash
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
        $this->bitlyAccessToken = $accessToken;

        return $this;
    }

    /**
     * Sets the Bitly data.
     *
     * @param array|null $data the bitly data
     *
     * @return self
     */
    public function setBitlyData(array $data = null)
    {
        $this->bitlyData = $data;

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
        $this->bitlyEmail = $email;

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
        $this->bitlyExpiresIn = $expiresIn;

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
        $this->bitlyFirstName = $firstName;

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
        $this->bitlyLastName = $lastName;

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
        $this->bitlyNickname = $nickname;

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
        $this->bitlyProfilePicture = $profilePicture;

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
        $this->bitlyRealName = $realName;

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
        $this->bitlyRefreshToken = $refreshToken;

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
        $this->bitlyUsername = $username;

        return $this;
    }
}
