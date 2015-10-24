<?php

namespace EmanueleMinotto\HwiOauthBridge\Traits\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;

trait YandexTrait
{
    /**
     * Yandex username.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $yandexUsername;

    /**
     * Yandex nickname.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $yandexNickname;

    /**
     * Yandex first name.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $yandexFirstName;

    /**
     * Yandex last name.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $yandexLastName;

    /**
     * Yandex real name.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $yandexRealName;

    /**
     * Yandex profilePicture.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $yandexEmail;

    /**
     * Yandex profile picture.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $yandexProfilePicture;

    /**
     * Yandex access token.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $yandexAccessToken;

    /**
     * Yandex refresh token.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $yandexRefreshToken;

    /**
     * Yandex expires in.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $yandexExpiresIn;

    /**
     * Yandex expires in.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $yandexExpiresIn;

    /**
     * Yandex data.
     *
     * @var array|null
     *
     * @ODM\Hash
     */
    private $yandexData;

    /**
     * Get Yandex access token.
     *
     * @return string|null
     */
    public function getYandexAccessToken()
    {
        return $this->yandexAccessToken;
    }

    /**
     * Gets the Yandex data.
     *
     * @return array|null
     */
    public function getYandexData()
    {
        return $this->yandexData;
    }

    /**
     * Get Yandex email.
     *
     * @return string|null
     */
    public function getYandexEmail()
    {
        return $this->yandexEmail;
    }

    /**
     * Get Yandex expires in.
     *
     * @return string|null
     */
    public function getYandexExpiresIn()
    {
        return $this->yandexExpiresIn;
    }

    /**
     * Get Yandex first name.
     *
     * @return string|null
     */
    public function getYandexFirstName()
    {
        return $this->yandexFirstName;
    }

    /**
     * Get Yandex last name.
     *
     * @return string|null
     */
    public function getYandexLastName()
    {
        return $this->yandexLastName;
    }

    /**
     * Get Yandex nickname.
     *
     * @return string|null
     */
    public function getYandexNickname()
    {
        return $this->yandexNickname;
    }

    /**
     * Get Yandex profile picture.
     *
     * @return string|null
     */
    public function getYandexProfilePicture()
    {
        return $this->yandexProfilePicture;
    }

    /**
     * Get Yandex real name.
     *
     * @return string|null
     */
    public function getYandexRealName()
    {
        return $this->yandexRealName;
    }

    /**
     * Get Yandex refresh token.
     *
     * @return string|null
     */
    public function getYandexRefreshToken()
    {
        return $this->yandexRefreshToken;
    }

    /**
     * Get Yandex username.
     *
     * @return string|null
     */
    public function getYandexUsername()
    {
        return $this->yandexUsername;
    }

    /**
     * Set Yandex access token.
     *
     * @param string|null $accessToken
     *
     * @return self
     */
    public function setYandexAccessToken($accessToken)
    {
        $this->yandexAccessToken = $accessToken;

        return $this;
    }

    /**
     * Sets the Yandex data.
     *
     * @param array|null $data the yandex data
     *
     * @return self
     */
    public function setYandexData(array $data = null)
    {
        $this->yandexData = $data;

        return $this;
    }

    /**
     * Set Yandex email.
     *
     * @param string|null $email
     *
     * @return self
     */
    public function setYandexEmail($email)
    {
        $this->yandexEmail = $email;

        return $this;
    }

    /**
     * Set Yandex expires in.
     *
     * @param string|null $expiresIn
     *
     * @return self
     */
    public function setYandexExpiresIn($expiresIn)
    {
        $this->yandexExpiresIn = $expiresIn;

        return $this;
    }

    /**
     * Set Yandex first name.
     *
     * @param string|null $firstName
     *
     * @return self
     */
    public function setYandexFirstName($firstName)
    {
        $this->yandexFirstName = $firstName;

        return $this;
    }

    /**
     * Set Yandex last name.
     *
     * @param string|null $lastName
     *
     * @return self
     */
    public function setYandexLastName($lastName)
    {
        $this->yandexLastName = $lastName;

        return $this;
    }

    /**
     * Set Yandex nickname.
     *
     * @param string|null $nickname
     *
     * @return self
     */
    public function setYandexNickname($nickname)
    {
        $this->yandexNickname = $nickname;

        return $this;
    }

    /**
     * Set Yandex profile picture.
     *
     * @param string|null $profilePicture
     *
     * @return self
     */
    public function setYandexProfilePicture($profilePicture)
    {
        $this->yandexProfilePicture = $profilePicture;

        return $this;
    }

    /**
     * Set Yandex real name.
     *
     * @param string|null $realName
     *
     * @return self
     */
    public function setYandexRealName($realName)
    {
        $this->yandexRealName = $realName;

        return $this;
    }

    /**
     * Set Yandex refresh token.
     *
     * @param string|null $refreshToken
     *
     * @return self
     */
    public function setYandexRefreshToken($refreshToken)
    {
        $this->yandexRefreshToken = $refreshToken;

        return $this;
    }

    /**
     * Set Yandex username.
     *
     * @param string|null $username
     *
     * @return self
     */
    public function setYandexUsername($username)
    {
        $this->yandexUsername = $username;

        return $this;
    }
}
