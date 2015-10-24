<?php

namespace EmanueleMinotto\HwiOauthBridge\Traits\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;

trait PayPalTrait
{
    /**
     * PayPal username.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $payPalUsername;

    /**
     * PayPal nickname.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $payPalNickname;

    /**
     * PayPal first name.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $payPalFirstName;

    /**
     * PayPal last name.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $payPalLastName;

    /**
     * PayPal real name.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $payPalRealName;

    /**
     * PayPal profilePicture.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $payPalEmail;

    /**
     * PayPal profile picture.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $payPalProfilePicture;

    /**
     * PayPal access token.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $payPalAccessToken;

    /**
     * PayPal refresh token.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $payPalRefreshToken;

    /**
     * PayPal expires in.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $payPalExpiresIn;

    /**
     * PayPal data.
     *
     * @var array|null
     *
     * @ODM\Hash
     */
    private $payPalData;

    /**
     * Get PayPal access token.
     *
     * @return string|null
     */
    public function getPayPalAccessToken()
    {
        return $this->payPalAccessToken;
    }

    /**
     * Gets the PayPal data.
     *
     * @return array|null
     */
    public function getPayPalData()
    {
        return $this->payPalData;
    }

    /**
     * Get PayPal email.
     *
     * @return string|null
     */
    public function getPayPalEmail()
    {
        return $this->payPalEmail;
    }

    /**
     * Get PayPal expires in.
     *
     * @return string|null
     */
    public function getPayPalExpiresIn()
    {
        return $this->payPalExpiresIn;
    }

    /**
     * Get PayPal first name.
     *
     * @return string|null
     */
    public function getPayPalFirstName()
    {
        return $this->payPalFirstName;
    }

    /**
     * Get PayPal last name.
     *
     * @return string|null
     */
    public function getPayPalLastName()
    {
        return $this->payPalLastName;
    }

    /**
     * Get PayPal nickname.
     *
     * @return string|null
     */
    public function getPayPalNickname()
    {
        return $this->payPalNickname;
    }

    /**
     * Get PayPal profile picture.
     *
     * @return string|null
     */
    public function getPayPalProfilePicture()
    {
        return $this->payPalProfilePicture;
    }

    /**
     * Get PayPal real name.
     *
     * @return string|null
     */
    public function getPayPalRealName()
    {
        return $this->payPalRealName;
    }

    /**
     * Get PayPal refresh token.
     *
     * @return string|null
     */
    public function getPayPalRefreshToken()
    {
        return $this->payPalRefreshToken;
    }

    /**
     * Get PayPal username.
     *
     * @return string|null
     */
    public function getPayPalUsername()
    {
        return $this->payPalUsername;
    }

    /**
     * Set PayPal access token.
     *
     * @param string|null $accessToken
     *
     * @return self
     */
    public function setPayPalAccessToken($accessToken)
    {
        $this->payPalAccessToken = $payPalAccessToken;

        return $this;
    }

    /**
     * Sets the PayPal data.
     *
     * @param array|null $payPalData the payPal data
     *
     * @return self
     */
    public function setPayPalData(array $payPalData = null)
    {
        $this->payPalData = $payPalData;

        return $this;
    }

    /**
     * Set PayPal email.
     *
     * @param string|null $email
     *
     * @return self
     */
    public function setPayPalEmail($email)
    {
        $this->payPalEmail = $payPalEmail;

        return $this;
    }

    /**
     * Set PayPal expires in.
     *
     * @param string|null $expiresIn
     *
     * @return self
     */
    public function setPayPalExpiresIn($expiresIn)
    {
        $this->payPalExpiresIn = $payPalExpiresIn;

        return $this;
    }

    /**
     * Set PayPal first name.
     *
     * @param string|null $firstName
     *
     * @return self
     */
    public function setPayPalFirstName($firstName)
    {
        $this->payPalFirstName = $payPalFirstName;

        return $this;
    }

    /**
     * Set PayPal last name.
     *
     * @param string|null $lastName
     *
     * @return self
     */
    public function setPayPalLastName($lastName)
    {
        $this->payPalLastName = $payPalLastName;

        return $this;
    }

    /**
     * Set PayPal nickname.
     *
     * @param string|null $nickname
     *
     * @return self
     */
    public function setPayPalNickname($nickname)
    {
        $this->payPalNickname = $payPalNickname;

        return $this;
    }

    /**
     * Set PayPal profile picture.
     *
     * @param string|null $profilePicture
     *
     * @return self
     */
    public function setPayPalProfilePicture($profilePicture)
    {
        $this->payPalProfilePicture = $payPalProfilePicture;

        return $this;
    }

    /**
     * Set PayPal real name.
     *
     * @param string|null $realName
     *
     * @return self
     */
    public function setPayPalRealName($realName)
    {
        $this->payPalRealName = $payPalRealName;

        return $this;
    }

    /**
     * Set PayPal refresh token.
     *
     * @param string|null $refreshToken
     *
     * @return self
     */
    public function setPayPalRefreshToken($refreshToken)
    {
        $this->payPalRefreshToken = $payPalRefreshToken;

        return $this;
    }

    /**
     * Set PayPal username.
     *
     * @param string|null $username
     *
     * @return self
     */
    public function setPayPalUsername($username)
    {
        $this->payPalUsername = $payPalUsername;

        return $this;
    }
}
