<?php

namespace EmanueleMinotto\HwiOauthBridge\Traits\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;

trait InstagramTrait
{
    /**
     * Instagram username.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $instagramUsername;

    /**
     * Instagram nickname.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $instagramNickname;

    /**
     * Instagram first name.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $instagramFirstName;

    /**
     * Instagram last name.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $instagramLastName;

    /**
     * Instagram real name.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $instagramRealName;

    /**
     * Instagram profilePicture.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $instagramEmail;

    /**
     * Instagram profile picture.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $instagramProfilePicture;

    /**
     * Instagram access token.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $instagramAccessToken;

    /**
     * Instagram refresh token.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $instagramRefreshToken;

    /**
     * Instagram expires in.
     *
     * @var string|null
     *
     * @ODMString
     */
    private $instagramExpiresIn;

    /**
     * Instagram data.
     *
     * @var array|null
     *
     * @ODM\Hash
     */
    private $instagramData;

    /**
     * Get Instagram access token.
     *
     * @return string|null
     */
    public function getInstagramAccessToken()
    {
        return $this->instagramAccessToken;
    }

    /**
     * Gets the Instagram data.
     *
     * @return array|null
     */
    public function getInstagramData()
    {
        return $this->instagramData;
    }

    /**
     * Get Instagram email.
     *
     * @return string|null
     */
    public function getInstagramEmail()
    {
        return $this->instagramEmail;
    }

    /**
     * Get Instagram expires in.
     *
     * @return string|null
     */
    public function getInstagramExpiresIn()
    {
        return $this->instagramExpiresIn;
    }

    /**
     * Get Instagram first name.
     *
     * @return string|null
     */
    public function getInstagramFirstName()
    {
        return $this->instagramFirstName;
    }

    /**
     * Get Instagram last name.
     *
     * @return string|null
     */
    public function getInstagramLastName()
    {
        return $this->instagramLastName;
    }

    /**
     * Get Instagram nickname.
     *
     * @return string|null
     */
    public function getInstagramNickname()
    {
        return $this->instagramNickname;
    }

    /**
     * Get Instagram profile picture.
     *
     * @return string|null
     */
    public function getInstagramProfilePicture()
    {
        return $this->instagramProfilePicture;
    }

    /**
     * Get Instagram real name.
     *
     * @return string|null
     */
    public function getInstagramRealName()
    {
        return $this->instagramRealName;
    }

    /**
     * Get Instagram refresh token.
     *
     * @return string|null
     */
    public function getInstagramRefreshToken()
    {
        return $this->instagramRefreshToken;
    }

    /**
     * Get Instagram username.
     *
     * @return string|null
     */
    public function getInstagramUsername()
    {
        return $this->instagramUsername;
    }

    /**
     * Set Instagram access token.
     *
     * @param string|null $accessToken
     *
     * @return self
     */
    public function setInstagramAccessToken($accessToken)
    {
        $this->instagramAccessToken = $accessToken;

        return $this;
    }

    /**
     * Sets the Instagram data.
     *
     * @param array|null $data
     *
     * @return self
     */
    public function setInstagramData(array $data = null)
    {
        $this->instagramData = $data;

        return $this;
    }

    /**
     * Set Instagram email.
     *
     * @param string|null $email
     *
     * @return self
     */
    public function setInstagramEmail($email)
    {
        $this->instagramEmail = $email;

        return $this;
    }

    /**
     * Set Instagram expires in.
     *
     * @param string|null $expiresIn
     *
     * @return self
     */
    public function setInstagramExpiresIn($expiresIn)
    {
        $this->instagramExpiresIn = $expiresIn;

        return $this;
    }

    /**
     * Set Instagram first name.
     *
     * @param string|null $firstName
     *
     * @return self
     */
    public function setInstagramFirstName($firstName)
    {
        $this->instagramFirstName = $firstName;

        return $this;
    }

    /**
     * Set Instagram last name.
     *
     * @param string|null $lastName
     *
     * @return self
     */
    public function setInstagramLastName($lastName)
    {
        $this->instagramLastName = $lastName;

        return $this;
    }

    /**
     * Set Instagram nickname.
     *
     * @param string|null $nickname
     *
     * @return self
     */
    public function setInstagramNickname($nickname)
    {
        $this->instagramNickname = $nickname;

        return $this;
    }

    /**
     * Set Instagram profile picture.
     *
     * @param string|null $profilePicture
     *
     * @return self
     */
    public function setInstagramProfilePicture($profilePicture)
    {
        $this->instagramProfilePicture = $profilePicture;

        return $this;
    }

    /**
     * Set Instagram real name.
     *
     * @param string|null $realName
     *
     * @return self
     */
    public function setInstagramRealName($realName)
    {
        $this->instagramRealName = $realName;

        return $this;
    }

    /**
     * Set Instagram refresh token.
     *
     * @param string|null $refreshToken
     *
     * @return self
     */
    public function setInstagramRefreshToken($refreshToken)
    {
        $this->instagramRefreshToken = $refreshToken;

        return $this;
    }

    /**
     * Set Instagram username.
     *
     * @param string|null $username
     *
     * @return self
     */
    public function setInstagramUsername($username)
    {
        $this->instagramUsername = $username;

        return $this;
    }
}
