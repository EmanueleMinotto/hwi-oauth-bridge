<?php

namespace EmanueleMinotto\HwiOauthBridge\Traits\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;

trait StackExchangeTrait
{
    /**
     * StackExchange username.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $stackExchangeUsername;

    /**
     * StackExchange nickname.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $stackExchangeNickname;

    /**
     * StackExchange first name.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $stackExchangeFirstName;

    /**
     * StackExchange last name.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $stackExchangeLastName;

    /**
     * StackExchange real name.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $stackExchangeRealName;

    /**
     * StackExchange profilePicture.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $stackExchangeEmail;

    /**
     * StackExchange profile picture.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $stackExchangeProfilePicture;

    /**
     * StackExchange access token.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $stackExchangeAccessToken;

    /**
     * StackExchange refresh token.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $stackExchangeRefreshToken;

    /**
     * StackExchange expires in.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $stackExchangeExpiresIn;

    /**
     * StackExchange data.
     *
     * @var array|null
     *
     * @ODM\Hash
     */
    private $stackExchangeData;

    /**
     * Get StackExchange access token.
     *
     * @return string|null
     */
    public function getStackExchangeAccessToken()
    {
        return $this->stackExchangeAccessToken;
    }

    /**
     * Gets the StackExchange data.
     *
     * @return array|null
     */
    public function getStackExchangeData()
    {
        return $this->stackExchangeData;
    }

    /**
     * Get StackExchange email.
     *
     * @return string|null
     */
    public function getStackExchangeEmail()
    {
        return $this->stackExchangeEmail;
    }

    /**
     * Get StackExchange expires in.
     *
     * @return string|null
     */
    public function getStackExchangeExpiresIn()
    {
        return $this->stackExchangeExpiresIn;
    }

    /**
     * Get StackExchange first name.
     *
     * @return string|null
     */
    public function getStackExchangeFirstName()
    {
        return $this->stackExchangeFirstName;
    }

    /**
     * Get StackExchange last name.
     *
     * @return string|null
     */
    public function getStackExchangeLastName()
    {
        return $this->stackExchangeLastName;
    }

    /**
     * Get StackExchange nickname.
     *
     * @return string|null
     */
    public function getStackExchangeNickname()
    {
        return $this->stackExchangeNickname;
    }

    /**
     * Get StackExchange profile picture.
     *
     * @return string|null
     */
    public function getStackExchangeProfilePicture()
    {
        return $this->stackExchangeProfilePicture;
    }

    /**
     * Get StackExchange real name.
     *
     * @return string|null
     */
    public function getStackExchangeRealName()
    {
        return $this->stackExchangeRealName;
    }

    /**
     * Get StackExchange refresh token.
     *
     * @return string|null
     */
    public function getStackExchangeRefreshToken()
    {
        return $this->stackExchangeRefreshToken;
    }

    /**
     * Get StackExchange username.
     *
     * @return string|null
     */
    public function getStackExchangeUsername()
    {
        return $this->stackExchangeUsername;
    }

    /**
     * Set StackExchange access token.
     *
     * @param string|null $accessToken
     *
     * @return self
     */
    public function setStackExchangeAccessToken($accessToken)
    {
        $this->stackExchangeAccessToken = $stackExchangeAccessToken;

        return $this;
    }

    /**
     * Sets the StackExchange data.
     *
     * @param array|null $stackExchangeData the stackExchange data
     *
     * @return self
     */
    public function setStackExchangeData(array $stackExchangeData = null)
    {
        $this->stackExchangeData = $stackExchangeData;

        return $this;
    }

    /**
     * Set StackExchange email.
     *
     * @param string|null $email
     *
     * @return self
     */
    public function setStackExchangeEmail($email)
    {
        $this->stackExchangeEmail = $stackExchangeEmail;

        return $this;
    }

    /**
     * Set StackExchange expires in.
     *
     * @param string|null $expiresIn
     *
     * @return self
     */
    public function setStackExchangeExpiresIn($expiresIn)
    {
        $this->stackExchangeExpiresIn = $stackExchangeExpiresIn;

        return $this;
    }

    /**
     * Set StackExchange first name.
     *
     * @param string|null $firstName
     *
     * @return self
     */
    public function setStackExchangeFirstName($firstName)
    {
        $this->stackExchangeFirstName = $stackExchangeFirstName;

        return $this;
    }

    /**
     * Set StackExchange last name.
     *
     * @param string|null $lastName
     *
     * @return self
     */
    public function setStackExchangeLastName($lastName)
    {
        $this->stackExchangeLastName = $stackExchangeLastName;

        return $this;
    }

    /**
     * Set StackExchange nickname.
     *
     * @param string|null $nickname
     *
     * @return self
     */
    public function setStackExchangeNickname($nickname)
    {
        $this->stackExchangeNickname = $stackExchangeNickname;

        return $this;
    }

    /**
     * Set StackExchange profile picture.
     *
     * @param string|null $profilePicture
     *
     * @return self
     */
    public function setStackExchangeProfilePicture($profilePicture)
    {
        $this->stackExchangeProfilePicture = $stackExchangeProfilePicture;

        return $this;
    }

    /**
     * Set StackExchange real name.
     *
     * @param string|null $realName
     *
     * @return self
     */
    public function setStackExchangeRealName($realName)
    {
        $this->stackExchangeRealName = $stackExchangeRealName;

        return $this;
    }

    /**
     * Set StackExchange refresh token.
     *
     * @param string|null $refreshToken
     *
     * @return self
     */
    public function setStackExchangeRefreshToken($refreshToken)
    {
        $this->stackExchangeRefreshToken = $stackExchangeRefreshToken;

        return $this;
    }

    /**
     * Set StackExchange username.
     *
     * @param string|null $username
     *
     * @return self
     */
    public function setStackExchangeUsername($username)
    {
        $this->stackExchangeUsername = $stackExchangeUsername;

        return $this;
    }
}
