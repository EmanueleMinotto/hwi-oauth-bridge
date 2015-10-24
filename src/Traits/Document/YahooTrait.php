<?php

namespace EmanueleMinotto\HwiOauthBridge\Traits\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;

trait YahooTrait
{
    /**
     * Yahoo username.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $yahooUsername;

    /**
     * Yahoo nickname.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $yahooNickname;

    /**
     * Yahoo first name.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $yahooFirstName;

    /**
     * Yahoo last name.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $yahooLastName;

    /**
     * Yahoo real name.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $yahooRealName;

    /**
     * Yahoo profilePicture.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $yahooEmail;

    /**
     * Yahoo profile picture.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $yahooProfilePicture;

    /**
     * Yahoo access token.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $yahooAccessToken;

    /**
     * Yahoo refresh token.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $yahooRefreshToken;

    /**
     * Yahoo expires in.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $yahooExpiresIn;

    /**
     * Yahoo expires in.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $yahooExpiresIn;

    /**
     * Yahoo data.
     *
     * @var array|null
     *
     * @ODM\Hash
     */
    private $yahooData;

    /**
     * Get Yahoo access token.
     *
     * @return string|null
     */
    public function getYahooAccessToken()
    {
        return $this->yahooAccessToken;
    }

    /**
     * Gets the Yahoo data.
     *
     * @return array|null
     */
    public function getYahooData()
    {
        return $this->yahooData;
    }

    /**
     * Get Yahoo email.
     *
     * @return string|null
     */
    public function getYahooEmail()
    {
        return $this->yahooEmail;
    }

    /**
     * Get Yahoo expires in.
     *
     * @return string|null
     */
    public function getYahooExpiresIn()
    {
        return $this->yahooExpiresIn;
    }

    /**
     * Get Yahoo first name.
     *
     * @return string|null
     */
    public function getYahooFirstName()
    {
        return $this->yahooFirstName;
    }

    /**
     * Get Yahoo last name.
     *
     * @return string|null
     */
    public function getYahooLastName()
    {
        return $this->yahooLastName;
    }

    /**
     * Get Yahoo nickname.
     *
     * @return string|null
     */
    public function getYahooNickname()
    {
        return $this->yahooNickname;
    }

    /**
     * Get Yahoo profile picture.
     *
     * @return string|null
     */
    public function getYahooProfilePicture()
    {
        return $this->yahooProfilePicture;
    }

    /**
     * Get Yahoo real name.
     *
     * @return string|null
     */
    public function getYahooRealName()
    {
        return $this->yahooRealName;
    }

    /**
     * Get Yahoo refresh token.
     *
     * @return string|null
     */
    public function getYahooRefreshToken()
    {
        return $this->yahooRefreshToken;
    }

    /**
     * Get Yahoo username.
     *
     * @return string|null
     */
    public function getYahooUsername()
    {
        return $this->yahooUsername;
    }

    /**
     * Set Yahoo access token.
     *
     * @param string|null $accessToken
     *
     * @return self
     */
    public function setYahooAccessToken($accessToken)
    {
        $this->yahooAccessToken = $yahooAccessToken;

        return $this;
    }

    /**
     * Sets the Yahoo data.
     *
     * @param array|null $yahooData the yahoo data
     *
     * @return self
     */
    public function setYahooData(array $yahooData = null)
    {
        $this->yahooData = $yahooData;

        return $this;
    }

    /**
     * Set Yahoo email.
     *
     * @param string|null $email
     *
     * @return self
     */
    public function setYahooEmail($email)
    {
        $this->yahooEmail = $yahooEmail;

        return $this;
    }

    /**
     * Set Yahoo expires in.
     *
     * @param string|null $expiresIn
     *
     * @return self
     */
    public function setYahooExpiresIn($expiresIn)
    {
        $this->yahooExpiresIn = $yahooExpiresIn;

        return $this;
    }

    /**
     * Set Yahoo first name.
     *
     * @param string|null $firstName
     *
     * @return self
     */
    public function setYahooFirstName($firstName)
    {
        $this->yahooFirstName = $yahooFirstName;

        return $this;
    }

    /**
     * Set Yahoo last name.
     *
     * @param string|null $lastName
     *
     * @return self
     */
    public function setYahooLastName($lastName)
    {
        $this->yahooLastName = $yahooLastName;

        return $this;
    }

    /**
     * Set Yahoo nickname.
     *
     * @param string|null $nickname
     *
     * @return self
     */
    public function setYahooNickname($nickname)
    {
        $this->yahooNickname = $yahooNickname;

        return $this;
    }

    /**
     * Set Yahoo profile picture.
     *
     * @param string|null $profilePicture
     *
     * @return self
     */
    public function setYahooProfilePicture($profilePicture)
    {
        $this->yahooProfilePicture = $yahooProfilePicture;

        return $this;
    }

    /**
     * Set Yahoo real name.
     *
     * @param string|null $realName
     *
     * @return self
     */
    public function setYahooRealName($realName)
    {
        $this->yahooRealName = $yahooRealName;

        return $this;
    }

    /**
     * Set Yahoo refresh token.
     *
     * @param string|null $refreshToken
     *
     * @return self
     */
    public function setYahooRefreshToken($refreshToken)
    {
        $this->yahooRefreshToken = $yahooRefreshToken;

        return $this;
    }

    /**
     * Set Yahoo username.
     *
     * @param string|null $username
     *
     * @return self
     */
    public function setYahooUsername($username)
    {
        $this->yahooUsername = $yahooUsername;

        return $this;
    }
}
