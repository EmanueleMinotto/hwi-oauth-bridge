<?php

namespace EmanueleMinotto\HwiOauthBridge\Traits\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;

trait FoursquareTrait
{
    /**
     * Foursquare username.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $foursquareUsername;

    /**
     * Foursquare nickname.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $foursquareNickname;

    /**
     * Foursquare first name.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $foursquareFirstName;

    /**
     * Foursquare last name.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $foursquareLastName;

    /**
     * Foursquare real name.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $foursquareRealName;

    /**
     * Foursquare profilePicture.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $foursquareEmail;

    /**
     * Foursquare profile picture.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $foursquareProfilePicture;

    /**
     * Foursquare access token.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $foursquareAccessToken;

    /**
     * Foursquare refresh token.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $foursquareRefreshToken;

    /**
     * Foursquare expires in.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $foursquareExpiresIn;

    /**
     * Foursquare expires in.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $foursquareExpiresIn;

    /**
     * Foursquare data.
     *
     * @var array|null
     *
     * @ODM\Hash
     */
    private $foursquareData;

    /**
     * Get Foursquare access token.
     *
     * @return string|null
     */
    public function getFoursquareAccessToken()
    {
        return $this->foursquareAccessToken;
    }

    /**
     * Gets the Foursquare data.
     *
     * @return array|null
     */
    public function getFoursquareData()
    {
        return $this->foursquareData;
    }

    /**
     * Get Foursquare email.
     *
     * @return string|null
     */
    public function getFoursquareEmail()
    {
        return $this->foursquareEmail;
    }

    /**
     * Get Foursquare expires in.
     *
     * @return string|null
     */
    public function getFoursquareExpiresIn()
    {
        return $this->foursquareExpiresIn;
    }

    /**
     * Get Foursquare first name.
     *
     * @return string|null
     */
    public function getFoursquareFirstName()
    {
        return $this->foursquareFirstName;
    }

    /**
     * Get Foursquare last name.
     *
     * @return string|null
     */
    public function getFoursquareLastName()
    {
        return $this->foursquareLastName;
    }

    /**
     * Get Foursquare nickname.
     *
     * @return string|null
     */
    public function getFoursquareNickname()
    {
        return $this->foursquareNickname;
    }

    /**
     * Get Foursquare profile picture.
     *
     * @return string|null
     */
    public function getFoursquareProfilePicture()
    {
        return $this->foursquareProfilePicture;
    }

    /**
     * Get Foursquare real name.
     *
     * @return string|null
     */
    public function getFoursquareRealName()
    {
        return $this->foursquareRealName;
    }

    /**
     * Get Foursquare refresh token.
     *
     * @return string|null
     */
    public function getFoursquareRefreshToken()
    {
        return $this->foursquareRefreshToken;
    }

    /**
     * Get Foursquare username.
     *
     * @return string|null
     */
    public function getFoursquareUsername()
    {
        return $this->foursquareUsername;
    }

    /**
     * Set Foursquare access token.
     *
     * @param string|null $accessToken
     *
     * @return self
     */
    public function setFoursquareAccessToken($accessToken)
    {
        $this->foursquareAccessToken = $accessToken;

        return $this;
    }

    /**
     * Sets the Foursquare data.
     *
     * @param array|null $foursquareData the foursquare data
     *
     * @return self
     */
    public function setFoursquareData(array $data = null)
    {
        $this->foursquareData = $data;

        return $this;
    }

    /**
     * Set Foursquare email.
     *
     * @param string|null $email
     *
     * @return self
     */
    public function setFoursquareEmail($email)
    {
        $this->foursquareEmail = $email;

        return $this;
    }

    /**
     * Set Foursquare expires in.
     *
     * @param string|null $expiresIn
     *
     * @return self
     */
    public function setFoursquareExpiresIn($expiresIn)
    {
        $this->foursquareExpiresIn = $expiresIn;

        return $this;
    }

    /**
     * Set Foursquare first name.
     *
     * @param string|null $firstName
     *
     * @return self
     */
    public function setFoursquareFirstName($firstName)
    {
        $this->foursquareFirstName = $firstName;

        return $this;
    }

    /**
     * Set Foursquare last name.
     *
     * @param string|null $lastName
     *
     * @return self
     */
    public function setFoursquareLastName($lastName)
    {
        $this->foursquareLastName = $lastName;

        return $this;
    }

    /**
     * Set Foursquare nickname.
     *
     * @param string|null $nickname
     *
     * @return self
     */
    public function setFoursquareNickname($nickname)
    {
        $this->foursquareNickname = $nickname;

        return $this;
    }

    /**
     * Set Foursquare profile picture.
     *
     * @param string|null $profilePicture
     *
     * @return self
     */
    public function setFoursquareProfilePicture($profilePicture)
    {
        $this->foursquareProfilePicture = $profilePicture;

        return $this;
    }

    /**
     * Set Foursquare real name.
     *
     * @param string|null $realName
     *
     * @return self
     */
    public function setFoursquareRealName($realName)
    {
        $this->foursquareRealName = $realName;

        return $this;
    }

    /**
     * Set Foursquare refresh token.
     *
     * @param string|null $refreshToken
     *
     * @return self
     */
    public function setFoursquareRefreshToken($refreshToken)
    {
        $this->foursquareRefreshToken = $refreshToken;

        return $this;
    }

    /**
     * Set Foursquare username.
     *
     * @param string|null $username
     *
     * @return self
     */
    public function setFoursquareUsername($username)
    {
        $this->foursquareUsername = $username;

        return $this;
    }
}
