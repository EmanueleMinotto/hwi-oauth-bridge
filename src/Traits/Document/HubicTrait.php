<?php

namespace EmanueleMinotto\HwiOauthBridge\Traits\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;

trait HubicTrait
{
    /**
     * Hubic username.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $hubicUsername;

    /**
     * Hubic nickname.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $hubicNickname;

    /**
     * Hubic first name.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $hubicFirstName;

    /**
     * Hubic last name.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $hubicLastName;

    /**
     * Hubic real name.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $hubicRealName;

    /**
     * Hubic profilePicture.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $hubicEmail;

    /**
     * Hubic profile picture.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $hubicProfilePicture;

    /**
     * Hubic access token.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $hubicAccessToken;

    /**
     * Hubic refresh token.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $hubicRefreshToken;

    /**
     * Hubic expires in.
     *
     * @var string|null
     *
     * @ODMString
     */
    private $hubicExpiresIn;

    /**
     * Hubic data.
     *
     * @var array|null
     *
     * @ODM\Hash
     */
    private $hubicData;

    /**
     * Get Hubic access token.
     *
     * @return string|null
     */
    public function getHubicAccessToken()
    {
        return $this->hubicAccessToken;
    }

    /**
     * Gets the Hubic data.
     *
     * @return array|null
     */
    public function getHubicData()
    {
        return $this->hubicData;
    }

    /**
     * Get Hubic email.
     *
     * @return string|null
     */
    public function getHubicEmail()
    {
        return $this->hubicEmail;
    }

    /**
     * Get Hubic expires in.
     *
     * @return string|null
     */
    public function getHubicExpiresIn()
    {
        return $this->hubicExpiresIn;
    }

    /**
     * Get Hubic first name.
     *
     * @return string|null
     */
    public function getHubicFirstName()
    {
        return $this->hubicFirstName;
    }

    /**
     * Get Hubic last name.
     *
     * @return string|null
     */
    public function getHubicLastName()
    {
        return $this->hubicLastName;
    }

    /**
     * Get Hubic nickname.
     *
     * @return string|null
     */
    public function getHubicNickname()
    {
        return $this->hubicNickname;
    }

    /**
     * Get Hubic profile picture.
     *
     * @return string|null
     */
    public function getHubicProfilePicture()
    {
        return $this->hubicProfilePicture;
    }

    /**
     * Get Hubic real name.
     *
     * @return string|null
     */
    public function getHubicRealName()
    {
        return $this->hubicRealName;
    }

    /**
     * Get Hubic refresh token.
     *
     * @return string|null
     */
    public function getHubicRefreshToken()
    {
        return $this->hubicRefreshToken;
    }

    /**
     * Get Hubic username.
     *
     * @return string|null
     */
    public function getHubicUsername()
    {
        return $this->hubicUsername;
    }

    /**
     * Set Hubic access token.
     *
     * @param string|null $accessToken
     *
     * @return self
     */
    public function setHubicAccessToken($accessToken)
    {
        $this->hubicAccessToken = $accessToken;

        return $this;
    }

    /**
     * Sets the Hubic data.
     *
     * @param array|null $data the hubic data
     *
     * @return self
     */
    public function setHubicData(array $data = null)
    {
        $this->hubicData = $data;

        return $this;
    }

    /**
     * Set Hubic email.
     *
     * @param string|null $email
     *
     * @return self
     */
    public function setHubicEmail($email)
    {
        $this->hubicEmail = $email;

        return $this;
    }

    /**
     * Set Hubic expires in.
     *
     * @param string|null $expiresIn
     *
     * @return self
     */
    public function setHubicExpiresIn($expiresIn)
    {
        $this->hubicExpiresIn = $expiresIn;

        return $this;
    }

    /**
     * Set Hubic first name.
     *
     * @param string|null $firstName
     *
     * @return self
     */
    public function setHubicFirstName($firstName)
    {
        $this->hubicFirstName = $firstName;

        return $this;
    }

    /**
     * Set Hubic last name.
     *
     * @param string|null $lastName
     *
     * @return self
     */
    public function setHubicLastName($lastName)
    {
        $this->hubicLastName = $lastName;

        return $this;
    }

    /**
     * Set Hubic nickname.
     *
     * @param string|null $nickname
     *
     * @return self
     */
    public function setHubicNickname($nickname)
    {
        $this->hubicNickname = $nickname;

        return $this;
    }

    /**
     * Set Hubic profile picture.
     *
     * @param string|null $profilePicture
     *
     * @return self
     */
    public function setHubicProfilePicture($profilePicture)
    {
        $this->hubicProfilePicture = $profilePicture;

        return $this;
    }

    /**
     * Set Hubic real name.
     *
     * @param string|null $realName
     *
     * @return self
     */
    public function setHubicRealName($realName)
    {
        $this->hubicRealName = $realName;

        return $this;
    }

    /**
     * Set Hubic refresh token.
     *
     * @param string|null $refreshToken
     *
     * @return self
     */
    public function setHubicRefreshToken($refreshToken)
    {
        $this->hubicRefreshToken = $refreshToken;

        return $this;
    }

    /**
     * Set Hubic username.
     *
     * @param string|null $username
     *
     * @return self
     */
    public function setHubicUsername($username)
    {
        $this->hubicUsername = $username;

        return $this;
    }
}
