<?php

namespace EmanueleMinotto\HwiOauthBridge\Traits\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;

trait StereomoodTrait
{
    /**
     * Stereomood username.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $stereomoodUsername;

    /**
     * Stereomood nickname.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $stereomoodNickname;

    /**
     * Stereomood first name.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $stereomoodFirstName;

    /**
     * Stereomood last name.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $stereomoodLastName;

    /**
     * Stereomood real name.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $stereomoodRealName;

    /**
     * Stereomood profilePicture.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $stereomoodEmail;

    /**
     * Stereomood profile picture.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $stereomoodProfilePicture;

    /**
     * Stereomood access token.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $stereomoodAccessToken;

    /**
     * Stereomood refresh token.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $stereomoodRefreshToken;

    /**
     * Stereomood expires in.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $stereomoodExpiresIn;

    /**
     * Stereomood expires in.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $stereomoodExpiresIn;

    /**
     * Stereomood data.
     *
     * @var array|null
     *
     * @ODM\Hash
     */
    private $stereomoodData;

    /**
     * Get Stereomood access token.
     *
     * @return string|null
     */
    public function getStereomoodAccessToken()
    {
        return $this->stereomoodAccessToken;
    }

    /**
     * Gets the Stereomood data.
     *
     * @return array|null
     */
    public function getStereomoodData()
    {
        return $this->stereomoodData;
    }

    /**
     * Get Stereomood email.
     *
     * @return string|null
     */
    public function getStereomoodEmail()
    {
        return $this->stereomoodEmail;
    }

    /**
     * Get Stereomood expires in.
     *
     * @return string|null
     */
    public function getStereomoodExpiresIn()
    {
        return $this->stereomoodExpiresIn;
    }

    /**
     * Get Stereomood first name.
     *
     * @return string|null
     */
    public function getStereomoodFirstName()
    {
        return $this->stereomoodFirstName;
    }

    /**
     * Get Stereomood last name.
     *
     * @return string|null
     */
    public function getStereomoodLastName()
    {
        return $this->stereomoodLastName;
    }

    /**
     * Get Stereomood nickname.
     *
     * @return string|null
     */
    public function getStereomoodNickname()
    {
        return $this->stereomoodNickname;
    }

    /**
     * Get Stereomood profile picture.
     *
     * @return string|null
     */
    public function getStereomoodProfilePicture()
    {
        return $this->stereomoodProfilePicture;
    }

    /**
     * Get Stereomood real name.
     *
     * @return string|null
     */
    public function getStereomoodRealName()
    {
        return $this->stereomoodRealName;
    }

    /**
     * Get Stereomood refresh token.
     *
     * @return string|null
     */
    public function getStereomoodRefreshToken()
    {
        return $this->stereomoodRefreshToken;
    }

    /**
     * Get Stereomood username.
     *
     * @return string|null
     */
    public function getStereomoodUsername()
    {
        return $this->stereomoodUsername;
    }

    /**
     * Set Stereomood access token.
     *
     * @param string|null $accessToken
     *
     * @return self
     */
    public function setStereomoodAccessToken($accessToken)
    {
        $this->stereomoodAccessToken = $stereomoodAccessToken;

        return $this;
    }

    /**
     * Sets the Stereomood data.
     *
     * @param array|null $stereomoodData the stereomood data
     *
     * @return self
     */
    public function setStereomoodData(array $stereomoodData = null)
    {
        $this->stereomoodData = $stereomoodData;

        return $this;
    }

    /**
     * Set Stereomood email.
     *
     * @param string|null $email
     *
     * @return self
     */
    public function setStereomoodEmail($email)
    {
        $this->stereomoodEmail = $stereomoodEmail;

        return $this;
    }

    /**
     * Set Stereomood expires in.
     *
     * @param string|null $expiresIn
     *
     * @return self
     */
    public function setStereomoodExpiresIn($expiresIn)
    {
        $this->stereomoodExpiresIn = $stereomoodExpiresIn;

        return $this;
    }

    /**
     * Set Stereomood first name.
     *
     * @param string|null $firstName
     *
     * @return self
     */
    public function setStereomoodFirstName($firstName)
    {
        $this->stereomoodFirstName = $stereomoodFirstName;

        return $this;
    }

    /**
     * Set Stereomood last name.
     *
     * @param string|null $lastName
     *
     * @return self
     */
    public function setStereomoodLastName($lastName)
    {
        $this->stereomoodLastName = $stereomoodLastName;

        return $this;
    }

    /**
     * Set Stereomood nickname.
     *
     * @param string|null $nickname
     *
     * @return self
     */
    public function setStereomoodNickname($nickname)
    {
        $this->stereomoodNickname = $stereomoodNickname;

        return $this;
    }

    /**
     * Set Stereomood profile picture.
     *
     * @param string|null $profilePicture
     *
     * @return self
     */
    public function setStereomoodProfilePicture($profilePicture)
    {
        $this->stereomoodProfilePicture = $stereomoodProfilePicture;

        return $this;
    }

    /**
     * Set Stereomood real name.
     *
     * @param string|null $realName
     *
     * @return self
     */
    public function setStereomoodRealName($realName)
    {
        $this->stereomoodRealName = $stereomoodRealName;

        return $this;
    }

    /**
     * Set Stereomood refresh token.
     *
     * @param string|null $refreshToken
     *
     * @return self
     */
    public function setStereomoodRefreshToken($refreshToken)
    {
        $this->stereomoodRefreshToken = $stereomoodRefreshToken;

        return $this;
    }

    /**
     * Set Stereomood username.
     *
     * @param string|null $username
     *
     * @return self
     */
    public function setStereomoodUsername($username)
    {
        $this->stereomoodUsername = $stereomoodUsername;

        return $this;
    }
}
