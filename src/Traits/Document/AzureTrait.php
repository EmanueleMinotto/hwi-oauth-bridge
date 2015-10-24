<?php

namespace EmanueleMinotto\HwiOauthBridge\Traits\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;

trait AzureTrait
{
    /**
     * Azure username.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $azureUsername;

    /**
     * Azure nickname.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $azureNickname;

    /**
     * Azure first name.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $azureFirstName;

    /**
     * Azure last name.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $azureLastName;

    /**
     * Azure real name.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $azureRealName;

    /**
     * Azure profilePicture.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $azureEmail;

    /**
     * Azure profile picture.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $azureProfilePicture;

    /**
     * Azure access token.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $azureAccessToken;

    /**
     * Azure refresh token.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $azureRefreshToken;

    /**
     * Azure expires in.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $azureExpiresIn;

    /**
     * Azure expires in.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $azureExpiresIn;

    /**
     * Azure data.
     *
     * @var array|null
     *
     * @ODM\Hash
     */
    private $azureData;

    /**
     * Get Azure access token.
     *
     * @return string|null
     */
    public function getAzureAccessToken()
    {
        return $this->azureAccessToken;
    }

    /**
     * Gets the Azure data.
     *
     * @return array|null
     */
    public function getAzureData()
    {
        return $this->azureData;
    }

    /**
     * Get Azure email.
     *
     * @return string|null
     */
    public function getAzureEmail()
    {
        return $this->azureEmail;
    }

    /**
     * Get Azure expires in.
     *
     * @return string|null
     */
    public function getAzureExpiresIn()
    {
        return $this->azureExpiresIn;
    }

    /**
     * Get Azure first name.
     *
     * @return string|null
     */
    public function getAzureFirstName()
    {
        return $this->azureFirstName;
    }

    /**
     * Get Azure last name.
     *
     * @return string|null
     */
    public function getAzureLastName()
    {
        return $this->azureLastName;
    }

    /**
     * Get Azure nickname.
     *
     * @return string|null
     */
    public function getAzureNickname()
    {
        return $this->azureNickname;
    }

    /**
     * Get Azure profile picture.
     *
     * @return string|null
     */
    public function getAzureProfilePicture()
    {
        return $this->azureProfilePicture;
    }

    /**
     * Get Azure real name.
     *
     * @return string|null
     */
    public function getAzureRealName()
    {
        return $this->azureRealName;
    }

    /**
     * Get Azure refresh token.
     *
     * @return string|null
     */
    public function getAzureRefreshToken()
    {
        return $this->azureRefreshToken;
    }

    /**
     * Get Azure username.
     *
     * @return string|null
     */
    public function getAzureUsername()
    {
        return $this->azureUsername;
    }

    /**
     * Set Azure access token.
     *
     * @param string|null $accessToken
     *
     * @return self
     */
    public function setAzureAccessToken($accessToken)
    {
        $this->azureAccessToken = $accessToken;

        return $this;
    }

    /**
     * Sets the Azure data.
     *
     * @param array|null $data the azure data
     *
     * @return self
     */
    public function setAzureData(array $data = null)
    {
        $this->azureData = $data;

        return $this;
    }

    /**
     * Set Azure email.
     *
     * @param string|null $email
     *
     * @return self
     */
    public function setAzureEmail($email)
    {
        $this->azureEmail = $email;

        return $this;
    }

    /**
     * Set Azure expires in.
     *
     * @param string|null $expiresIn
     *
     * @return self
     */
    public function setAzureExpiresIn($expiresIn)
    {
        $this->azureExpiresIn = $expiresIn;

        return $this;
    }

    /**
     * Set Azure first name.
     *
     * @param string|null $firstName
     *
     * @return self
     */
    public function setAzureFirstName($firstName)
    {
        $this->azureFirstName = $firstName;

        return $this;
    }

    /**
     * Set Azure last name.
     *
     * @param string|null $lastName
     *
     * @return self
     */
    public function setAzureLastName($lastName)
    {
        $this->azureLastName = $lastName;

        return $this;
    }

    /**
     * Set Azure nickname.
     *
     * @param string|null $nickname
     *
     * @return self
     */
    public function setAzureNickname($nickname)
    {
        $this->azureNickname = $nickname;

        return $this;
    }

    /**
     * Set Azure profile picture.
     *
     * @param string|null $profilePicture
     *
     * @return self
     */
    public function setAzureProfilePicture($profilePicture)
    {
        $this->azureProfilePicture = $profilePicture;

        return $this;
    }

    /**
     * Set Azure real name.
     *
     * @param string|null $realName
     *
     * @return self
     */
    public function setAzureRealName($realName)
    {
        $this->azureRealName = $realName;

        return $this;
    }

    /**
     * Set Azure refresh token.
     *
     * @param string|null $refreshToken
     *
     * @return self
     */
    public function setAzureRefreshToken($refreshToken)
    {
        $this->azureRefreshToken = $refreshToken;

        return $this;
    }

    /**
     * Set Azure username.
     *
     * @param string|null $username
     *
     * @return self
     */
    public function setAzureUsername($username)
    {
        $this->azureUsername = $username;

        return $this;
    }
}
