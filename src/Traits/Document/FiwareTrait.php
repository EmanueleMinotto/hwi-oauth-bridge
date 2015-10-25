<?php

namespace EmanueleMinotto\HwiOauthBridge\Traits\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;

trait FiwareTrait
{
    /**
     * Fiware username.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $fiwareUsername;

    /**
     * Fiware nickname.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $fiwareNickname;

    /**
     * Fiware first name.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $fiwareFirstName;

    /**
     * Fiware last name.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $fiwareLastName;

    /**
     * Fiware real name.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $fiwareRealName;

    /**
     * Fiware profilePicture.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $fiwareEmail;

    /**
     * Fiware profile picture.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $fiwareProfilePicture;

    /**
     * Fiware access token.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $fiwareAccessToken;

    /**
     * Fiware refresh token.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $fiwareRefreshToken;

    /**
     * Fiware expires in.
     *
     * @var string|null
     *
     * @ODMString
     */
    private $fiwareExpiresIn;

    /**
     * Fiware data.
     *
     * @var array|null
     *
     * @ODM\Hash
     */
    private $fiwareData;

    /**
     * Get Fiware access token.
     *
     * @return string|null
     */
    public function getFiwareAccessToken()
    {
        return $this->fiwareAccessToken;
    }

    /**
     * Gets the Fiware data.
     *
     * @return array|null
     */
    public function getFiwareData()
    {
        return $this->fiwareData;
    }

    /**
     * Get Fiware email.
     *
     * @return string|null
     */
    public function getFiwareEmail()
    {
        return $this->fiwareEmail;
    }

    /**
     * Get Fiware expires in.
     *
     * @return string|null
     */
    public function getFiwareExpiresIn()
    {
        return $this->fiwareExpiresIn;
    }

    /**
     * Get Fiware first name.
     *
     * @return string|null
     */
    public function getFiwareFirstName()
    {
        return $this->fiwareFirstName;
    }

    /**
     * Get Fiware last name.
     *
     * @return string|null
     */
    public function getFiwareLastName()
    {
        return $this->fiwareLastName;
    }

    /**
     * Get Fiware nickname.
     *
     * @return string|null
     */
    public function getFiwareNickname()
    {
        return $this->fiwareNickname;
    }

    /**
     * Get Fiware profile picture.
     *
     * @return string|null
     */
    public function getFiwareProfilePicture()
    {
        return $this->fiwareProfilePicture;
    }

    /**
     * Get Fiware real name.
     *
     * @return string|null
     */
    public function getFiwareRealName()
    {
        return $this->fiwareRealName;
    }

    /**
     * Get Fiware refresh token.
     *
     * @return string|null
     */
    public function getFiwareRefreshToken()
    {
        return $this->fiwareRefreshToken;
    }

    /**
     * Get Fiware username.
     *
     * @return string|null
     */
    public function getFiwareUsername()
    {
        return $this->fiwareUsername;
    }

    /**
     * Set Fiware access token.
     *
     * @param string|null $accessToken
     *
     * @return self
     */
    public function setFiwareAccessToken($accessToken)
    {
        $this->fiwareAccessToken = $accessToken;

        return $this;
    }

    /**
     * Sets the Fiware data.
     *
     * @param array|null $data
     *
     * @return self
     */
    public function setFiwareData(array $data = null)
    {
        $this->fiwareData = $data;

        return $this;
    }

    /**
     * Set Fiware email.
     *
     * @param string|null $email
     *
     * @return self
     */
    public function setFiwareEmail($email)
    {
        $this->fiwareEmail = $email;

        return $this;
    }

    /**
     * Set Fiware expires in.
     *
     * @param string|null $expiresIn
     *
     * @return self
     */
    public function setFiwareExpiresIn($expiresIn)
    {
        $this->fiwareExpiresIn = $expiresIn;

        return $this;
    }

    /**
     * Set Fiware first name.
     *
     * @param string|null $firstName
     *
     * @return self
     */
    public function setFiwareFirstName($firstName)
    {
        $this->fiwareFirstName = $firstName;

        return $this;
    }

    /**
     * Set Fiware last name.
     *
     * @param string|null $lastName
     *
     * @return self
     */
    public function setFiwareLastName($lastName)
    {
        $this->fiwareLastName = $lastName;

        return $this;
    }

    /**
     * Set Fiware nickname.
     *
     * @param string|null $nickname
     *
     * @return self
     */
    public function setFiwareNickname($nickname)
    {
        $this->fiwareNickname = $nickname;

        return $this;
    }

    /**
     * Set Fiware profile picture.
     *
     * @param string|null $profilePicture
     *
     * @return self
     */
    public function setFiwareProfilePicture($profilePicture)
    {
        $this->fiwareProfilePicture = $profilePicture;

        return $this;
    }

    /**
     * Set Fiware real name.
     *
     * @param string|null $realName
     *
     * @return self
     */
    public function setFiwareRealName($realName)
    {
        $this->fiwareRealName = $realName;

        return $this;
    }

    /**
     * Set Fiware refresh token.
     *
     * @param string|null $refreshToken
     *
     * @return self
     */
    public function setFiwareRefreshToken($refreshToken)
    {
        $this->fiwareRefreshToken = $refreshToken;

        return $this;
    }

    /**
     * Set Fiware username.
     *
     * @param string|null $username
     *
     * @return self
     */
    public function setFiwareUsername($username)
    {
        $this->fiwareUsername = $username;

        return $this;
    }
}
