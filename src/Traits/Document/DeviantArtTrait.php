<?php

namespace EmanueleMinotto\HwiOauthBridge\Traits\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;

trait DeviantArtTrait
{
    /**
     * DeviantArt username.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $deviantArtUsername;

    /**
     * DeviantArt nickname.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $deviantArtNickname;

    /**
     * DeviantArt first name.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $deviantArtFirstName;

    /**
     * DeviantArt last name.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $deviantArtLastName;

    /**
     * DeviantArt real name.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $deviantArtRealName;

    /**
     * DeviantArt profilePicture.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $deviantArtEmail;

    /**
     * DeviantArt profile picture.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $deviantArtProfilePicture;

    /**
     * DeviantArt access token.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $deviantArtAccessToken;

    /**
     * DeviantArt refresh token.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $deviantArtRefreshToken;

    /**
     * DeviantArt expires in.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $deviantArtExpiresIn;

    /**
     * DeviantArt data.
     *
     * @var array|null
     *
     * @ODM\Hash
     */
    private $deviantArtData;

    /**
     * Get DeviantArt access token.
     *
     * @return string|null
     */
    public function getDeviantArtAccessToken()
    {
        return $this->deviantArtAccessToken;
    }

    /**
     * Gets the DeviantArt data.
     *
     * @return array|null
     */
    public function getDeviantArtData()
    {
        return $this->deviantArtData;
    }

    /**
     * Get DeviantArt email.
     *
     * @return string|null
     */
    public function getDeviantArtEmail()
    {
        return $this->deviantArtEmail;
    }

    /**
     * Get DeviantArt expires in.
     *
     * @return string|null
     */
    public function getDeviantArtExpiresIn()
    {
        return $this->deviantArtExpiresIn;
    }

    /**
     * Get DeviantArt first name.
     *
     * @return string|null
     */
    public function getDeviantArtFirstName()
    {
        return $this->deviantArtFirstName;
    }

    /**
     * Get DeviantArt last name.
     *
     * @return string|null
     */
    public function getDeviantArtLastName()
    {
        return $this->deviantArtLastName;
    }

    /**
     * Get DeviantArt nickname.
     *
     * @return string|null
     */
    public function getDeviantArtNickname()
    {
        return $this->deviantArtNickname;
    }

    /**
     * Get DeviantArt profile picture.
     *
     * @return string|null
     */
    public function getDeviantArtProfilePicture()
    {
        return $this->deviantArtProfilePicture;
    }

    /**
     * Get DeviantArt real name.
     *
     * @return string|null
     */
    public function getDeviantArtRealName()
    {
        return $this->deviantArtRealName;
    }

    /**
     * Get DeviantArt refresh token.
     *
     * @return string|null
     */
    public function getDeviantArtRefreshToken()
    {
        return $this->deviantArtRefreshToken;
    }

    /**
     * Get DeviantArt username.
     *
     * @return string|null
     */
    public function getDeviantArtUsername()
    {
        return $this->deviantArtUsername;
    }

    /**
     * Set DeviantArt access token.
     *
     * @param string|null $accessToken
     *
     * @return self
     */
    public function setDeviantArtAccessToken($accessToken)
    {
        $this->deviantArtAccessToken = $deviantArtAccessToken;

        return $this;
    }

    /**
     * Sets the DeviantArt data.
     *
     * @param array|null $deviantArtData the deviantArt data
     *
     * @return self
     */
    public function setDeviantArtData(array $deviantArtData = null)
    {
        $this->deviantArtData = $deviantArtData;

        return $this;
    }

    /**
     * Set DeviantArt email.
     *
     * @param string|null $email
     *
     * @return self
     */
    public function setDeviantArtEmail($email)
    {
        $this->deviantArtEmail = $deviantArtEmail;

        return $this;
    }

    /**
     * Set DeviantArt expires in.
     *
     * @param string|null $expiresIn
     *
     * @return self
     */
    public function setDeviantArtExpiresIn($expiresIn)
    {
        $this->deviantArtExpiresIn = $deviantArtExpiresIn;

        return $this;
    }

    /**
     * Set DeviantArt first name.
     *
     * @param string|null $firstName
     *
     * @return self
     */
    public function setDeviantArtFirstName($firstName)
    {
        $this->deviantArtFirstName = $deviantArtFirstName;

        return $this;
    }

    /**
     * Set DeviantArt last name.
     *
     * @param string|null $lastName
     *
     * @return self
     */
    public function setDeviantArtLastName($lastName)
    {
        $this->deviantArtLastName = $deviantArtLastName;

        return $this;
    }

    /**
     * Set DeviantArt nickname.
     *
     * @param string|null $nickname
     *
     * @return self
     */
    public function setDeviantArtNickname($nickname)
    {
        $this->deviantArtNickname = $deviantArtNickname;

        return $this;
    }

    /**
     * Set DeviantArt profile picture.
     *
     * @param string|null $profilePicture
     *
     * @return self
     */
    public function setDeviantArtProfilePicture($profilePicture)
    {
        $this->deviantArtProfilePicture = $deviantArtProfilePicture;

        return $this;
    }

    /**
     * Set DeviantArt real name.
     *
     * @param string|null $realName
     *
     * @return self
     */
    public function setDeviantArtRealName($realName)
    {
        $this->deviantArtRealName = $deviantArtRealName;

        return $this;
    }

    /**
     * Set DeviantArt refresh token.
     *
     * @param string|null $refreshToken
     *
     * @return self
     */
    public function setDeviantArtRefreshToken($refreshToken)
    {
        $this->deviantArtRefreshToken = $deviantArtRefreshToken;

        return $this;
    }

    /**
     * Set DeviantArt username.
     *
     * @param string|null $username
     *
     * @return self
     */
    public function setDeviantArtUsername($username)
    {
        $this->deviantArtUsername = $deviantArtUsername;

        return $this;
    }
}
