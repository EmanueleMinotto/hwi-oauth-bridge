<?php

namespace EmanueleMinotto\HwiOauthBridge\Traits\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;

trait ToshlTrait
{
    /**
     * Toshl username.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $toshlUsername;

    /**
     * Toshl nickname.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $toshlNickname;

    /**
     * Toshl first name.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $toshlFirstName;

    /**
     * Toshl last name.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $toshlLastName;

    /**
     * Toshl real name.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $toshlRealName;

    /**
     * Toshl profilePicture.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $toshlEmail;

    /**
     * Toshl profile picture.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $toshlProfilePicture;

    /**
     * Toshl access token.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $toshlAccessToken;

    /**
     * Toshl refresh token.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $toshlRefreshToken;

    /**
     * Toshl expires in.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $toshlExpiresIn;

    /**
     * Toshl expires in.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $toshlExpiresIn;

    /**
     * Toshl data.
     *
     * @var array|null
     *
     * @ODM\Hash
     */
    private $toshlData;

    /**
     * Get Toshl access token.
     *
     * @return string|null
     */
    public function getToshlAccessToken()
    {
        return $this->toshlAccessToken;
    }

    /**
     * Gets the Toshl data.
     *
     * @return array|null
     */
    public function getToshlData()
    {
        return $this->toshlData;
    }

    /**
     * Get Toshl email.
     *
     * @return string|null
     */
    public function getToshlEmail()
    {
        return $this->toshlEmail;
    }

    /**
     * Get Toshl expires in.
     *
     * @return string|null
     */
    public function getToshlExpiresIn()
    {
        return $this->toshlExpiresIn;
    }

    /**
     * Get Toshl first name.
     *
     * @return string|null
     */
    public function getToshlFirstName()
    {
        return $this->toshlFirstName;
    }

    /**
     * Get Toshl last name.
     *
     * @return string|null
     */
    public function getToshlLastName()
    {
        return $this->toshlLastName;
    }

    /**
     * Get Toshl nickname.
     *
     * @return string|null
     */
    public function getToshlNickname()
    {
        return $this->toshlNickname;
    }

    /**
     * Get Toshl profile picture.
     *
     * @return string|null
     */
    public function getToshlProfilePicture()
    {
        return $this->toshlProfilePicture;
    }

    /**
     * Get Toshl real name.
     *
     * @return string|null
     */
    public function getToshlRealName()
    {
        return $this->toshlRealName;
    }

    /**
     * Get Toshl refresh token.
     *
     * @return string|null
     */
    public function getToshlRefreshToken()
    {
        return $this->toshlRefreshToken;
    }

    /**
     * Get Toshl username.
     *
     * @return string|null
     */
    public function getToshlUsername()
    {
        return $this->toshlUsername;
    }

    /**
     * Set Toshl access token.
     *
     * @param string|null $accessToken
     *
     * @return self
     */
    public function setToshlAccessToken($accessToken)
    {
        $this->toshlAccessToken = $accessToken;

        return $this;
    }

    /**
     * Sets the Toshl data.
     *
     * @param array|null $toshlData the toshl data
     *
     * @return self
     */
    public function setToshlData(array $data = null)
    {
        $this->toshlData = $data;

        return $this;
    }

    /**
     * Set Toshl email.
     *
     * @param string|null $email
     *
     * @return self
     */
    public function setToshlEmail($email)
    {
        $this->toshlEmail = $email;

        return $this;
    }

    /**
     * Set Toshl expires in.
     *
     * @param string|null $expiresIn
     *
     * @return self
     */
    public function setToshlExpiresIn($expiresIn)
    {
        $this->toshlExpiresIn = $expiresIn;

        return $this;
    }

    /**
     * Set Toshl first name.
     *
     * @param string|null $firstName
     *
     * @return self
     */
    public function setToshlFirstName($firstName)
    {
        $this->toshlFirstName = $firstName;

        return $this;
    }

    /**
     * Set Toshl last name.
     *
     * @param string|null $lastName
     *
     * @return self
     */
    public function setToshlLastName($lastName)
    {
        $this->toshlLastName = $lastName;

        return $this;
    }

    /**
     * Set Toshl nickname.
     *
     * @param string|null $nickname
     *
     * @return self
     */
    public function setToshlNickname($nickname)
    {
        $this->toshlNickname = $nickname;

        return $this;
    }

    /**
     * Set Toshl profile picture.
     *
     * @param string|null $profilePicture
     *
     * @return self
     */
    public function setToshlProfilePicture($profilePicture)
    {
        $this->toshlProfilePicture = $profilePicture;

        return $this;
    }

    /**
     * Set Toshl real name.
     *
     * @param string|null $realName
     *
     * @return self
     */
    public function setToshlRealName($realName)
    {
        $this->toshlRealName = $realName;

        return $this;
    }

    /**
     * Set Toshl refresh token.
     *
     * @param string|null $refreshToken
     *
     * @return self
     */
    public function setToshlRefreshToken($refreshToken)
    {
        $this->toshlRefreshToken = $refreshToken;

        return $this;
    }

    /**
     * Set Toshl username.
     *
     * @param string|null $username
     *
     * @return self
     */
    public function setToshlUsername($username)
    {
        $this->toshlUsername = $username;

        return $this;
    }
}
