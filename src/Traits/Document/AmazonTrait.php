<?php

namespace EmanueleMinotto\HwiOauthBridge\Traits\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;

trait AmazonTrait
{
    /**
     * Amazon username.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $amazonUsername;

    /**
     * Amazon nickname.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $amazonNickname;

    /**
     * Amazon first name.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $amazonFirstName;

    /**
     * Amazon last name.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $amazonLastName;

    /**
     * Amazon real name.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $amazonRealName;

    /**
     * Amazon profilePicture.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $amazonEmail;

    /**
     * Amazon profile picture.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $amazonProfilePicture;

    /**
     * Amazon access token.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $amazonAccessToken;

    /**
     * Amazon refresh token.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $amazonRefreshToken;

    /**
     * Amazon expires in.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $amazonExpiresIn;

    /**
     * Amazon expires in.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $amazonExpiresIn;

    /**
     * Amazon data.
     *
     * @var array|null
     *
     * @ODM\Hash
     */
    private $amazonData;

    /**
     * Get Amazon access token.
     *
     * @return string|null
     */
    public function getAmazonAccessToken()
    {
        return $this->amazonAccessToken;
    }

    /**
     * Gets the Amazon data.
     *
     * @return array|null
     */
    public function getAmazonData()
    {
        return $this->amazonData;
    }

    /**
     * Get Amazon email.
     *
     * @return string|null
     */
    public function getAmazonEmail()
    {
        return $this->amazonEmail;
    }

    /**
     * Get Amazon expires in.
     *
     * @return string|null
     */
    public function getAmazonExpiresIn()
    {
        return $this->amazonExpiresIn;
    }

    /**
     * Get Amazon first name.
     *
     * @return string|null
     */
    public function getAmazonFirstName()
    {
        return $this->amazonFirstName;
    }

    /**
     * Get Amazon last name.
     *
     * @return string|null
     */
    public function getAmazonLastName()
    {
        return $this->amazonLastName;
    }

    /**
     * Get Amazon nickname.
     *
     * @return string|null
     */
    public function getAmazonNickname()
    {
        return $this->amazonNickname;
    }

    /**
     * Get Amazon profile picture.
     *
     * @return string|null
     */
    public function getAmazonProfilePicture()
    {
        return $this->amazonProfilePicture;
    }

    /**
     * Get Amazon real name.
     *
     * @return string|null
     */
    public function getAmazonRealName()
    {
        return $this->amazonRealName;
    }

    /**
     * Get Amazon refresh token.
     *
     * @return string|null
     */
    public function getAmazonRefreshToken()
    {
        return $this->amazonRefreshToken;
    }

    /**
     * Get Amazon username.
     *
     * @return string|null
     */
    public function getAmazonUsername()
    {
        return $this->amazonUsername;
    }

    /**
     * Set Amazon access token.
     *
     * @param string|null $accessToken
     *
     * @return self
     */
    public function setAmazonAccessToken($accessToken)
    {
        $this->amazonAccessToken = $amazonAccessToken;

        return $this;
    }

    /**
     * Sets the Amazon data.
     *
     * @param array|null $amazonData the amazon data
     *
     * @return self
     */
    public function setAmazonData(array $amazonData = null)
    {
        $this->amazonData = $amazonData;

        return $this;
    }

    /**
     * Set Amazon email.
     *
     * @param string|null $email
     *
     * @return self
     */
    public function setAmazonEmail($email)
    {
        $this->amazonEmail = $amazonEmail;

        return $this;
    }

    /**
     * Set Amazon expires in.
     *
     * @param string|null $expiresIn
     *
     * @return self
     */
    public function setAmazonExpiresIn($expiresIn)
    {
        $this->amazonExpiresIn = $amazonExpiresIn;

        return $this;
    }

    /**
     * Set Amazon first name.
     *
     * @param string|null $firstName
     *
     * @return self
     */
    public function setAmazonFirstName($firstName)
    {
        $this->amazonFirstName = $amazonFirstName;

        return $this;
    }

    /**
     * Set Amazon last name.
     *
     * @param string|null $lastName
     *
     * @return self
     */
    public function setAmazonLastName($lastName)
    {
        $this->amazonLastName = $amazonLastName;

        return $this;
    }

    /**
     * Set Amazon nickname.
     *
     * @param string|null $nickname
     *
     * @return self
     */
    public function setAmazonNickname($nickname)
    {
        $this->amazonNickname = $amazonNickname;

        return $this;
    }

    /**
     * Set Amazon profile picture.
     *
     * @param string|null $profilePicture
     *
     * @return self
     */
    public function setAmazonProfilePicture($profilePicture)
    {
        $this->amazonProfilePicture = $amazonProfilePicture;

        return $this;
    }

    /**
     * Set Amazon real name.
     *
     * @param string|null $realName
     *
     * @return self
     */
    public function setAmazonRealName($realName)
    {
        $this->amazonRealName = $amazonRealName;

        return $this;
    }

    /**
     * Set Amazon refresh token.
     *
     * @param string|null $refreshToken
     *
     * @return self
     */
    public function setAmazonRefreshToken($refreshToken)
    {
        $this->amazonRefreshToken = $amazonRefreshToken;

        return $this;
    }

    /**
     * Set Amazon username.
     *
     * @param string|null $username
     *
     * @return self
     */
    public function setAmazonUsername($username)
    {
        $this->amazonUsername = $amazonUsername;

        return $this;
    }
}
