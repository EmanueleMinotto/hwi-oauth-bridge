<?php

namespace EmanueleMinotto\HwiOauthBridge\Traits\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;

trait SoundcloudTrait
{
    /**
     * Soundcloud username.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $soundcloudUsername;

    /**
     * Soundcloud nickname.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $soundcloudNickname;

    /**
     * Soundcloud first name.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $soundcloudFirstName;

    /**
     * Soundcloud last name.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $soundcloudLastName;

    /**
     * Soundcloud real name.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $soundcloudRealName;

    /**
     * Soundcloud profilePicture.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $soundcloudEmail;

    /**
     * Soundcloud profile picture.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $soundcloudProfilePicture;

    /**
     * Soundcloud access token.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $soundcloudAccessToken;

    /**
     * Soundcloud refresh token.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $soundcloudRefreshToken;

    /**
     * Soundcloud expires in.
     *
     * @var string|null
     *
     * @ODMString
     */
    private $soundcloudExpiresIn;

    /**
     * Soundcloud data.
     *
     * @var array|null
     *
     * @ODM\Hash
     */
    private $soundcloudData;

    /**
     * Get Soundcloud access token.
     *
     * @return string|null
     */
    public function getSoundcloudAccessToken()
    {
        return $this->soundcloudAccessToken;
    }

    /**
     * Gets the Soundcloud data.
     *
     * @return array|null
     */
    public function getSoundcloudData()
    {
        return $this->soundcloudData;
    }

    /**
     * Get Soundcloud email.
     *
     * @return string|null
     */
    public function getSoundcloudEmail()
    {
        return $this->soundcloudEmail;
    }

    /**
     * Get Soundcloud expires in.
     *
     * @return string|null
     */
    public function getSoundcloudExpiresIn()
    {
        return $this->soundcloudExpiresIn;
    }

    /**
     * Get Soundcloud first name.
     *
     * @return string|null
     */
    public function getSoundcloudFirstName()
    {
        return $this->soundcloudFirstName;
    }

    /**
     * Get Soundcloud last name.
     *
     * @return string|null
     */
    public function getSoundcloudLastName()
    {
        return $this->soundcloudLastName;
    }

    /**
     * Get Soundcloud nickname.
     *
     * @return string|null
     */
    public function getSoundcloudNickname()
    {
        return $this->soundcloudNickname;
    }

    /**
     * Get Soundcloud profile picture.
     *
     * @return string|null
     */
    public function getSoundcloudProfilePicture()
    {
        return $this->soundcloudProfilePicture;
    }

    /**
     * Get Soundcloud real name.
     *
     * @return string|null
     */
    public function getSoundcloudRealName()
    {
        return $this->soundcloudRealName;
    }

    /**
     * Get Soundcloud refresh token.
     *
     * @return string|null
     */
    public function getSoundcloudRefreshToken()
    {
        return $this->soundcloudRefreshToken;
    }

    /**
     * Get Soundcloud username.
     *
     * @return string|null
     */
    public function getSoundcloudUsername()
    {
        return $this->soundcloudUsername;
    }

    /**
     * Set Soundcloud access token.
     *
     * @param string|null $accessToken
     *
     * @return self
     */
    public function setSoundcloudAccessToken($accessToken)
    {
        $this->soundcloudAccessToken = $accessToken;

        return $this;
    }

    /**
     * Sets the Soundcloud data.
     *
     * @param array|null $data the soundcloud data
     *
     * @return self
     */
    public function setSoundcloudData(array $data = null)
    {
        $this->soundcloudData = $data;

        return $this;
    }

    /**
     * Set Soundcloud email.
     *
     * @param string|null $email
     *
     * @return self
     */
    public function setSoundcloudEmail($email)
    {
        $this->soundcloudEmail = $email;

        return $this;
    }

    /**
     * Set Soundcloud expires in.
     *
     * @param string|null $expiresIn
     *
     * @return self
     */
    public function setSoundcloudExpiresIn($expiresIn)
    {
        $this->soundcloudExpiresIn = $expiresIn;

        return $this;
    }

    /**
     * Set Soundcloud first name.
     *
     * @param string|null $firstName
     *
     * @return self
     */
    public function setSoundcloudFirstName($firstName)
    {
        $this->soundcloudFirstName = $firstName;

        return $this;
    }

    /**
     * Set Soundcloud last name.
     *
     * @param string|null $lastName
     *
     * @return self
     */
    public function setSoundcloudLastName($lastName)
    {
        $this->soundcloudLastName = $lastName;

        return $this;
    }

    /**
     * Set Soundcloud nickname.
     *
     * @param string|null $nickname
     *
     * @return self
     */
    public function setSoundcloudNickname($nickname)
    {
        $this->soundcloudNickname = $nickname;

        return $this;
    }

    /**
     * Set Soundcloud profile picture.
     *
     * @param string|null $profilePicture
     *
     * @return self
     */
    public function setSoundcloudProfilePicture($profilePicture)
    {
        $this->soundcloudProfilePicture = $profilePicture;

        return $this;
    }

    /**
     * Set Soundcloud real name.
     *
     * @param string|null $realName
     *
     * @return self
     */
    public function setSoundcloudRealName($realName)
    {
        $this->soundcloudRealName = $realName;

        return $this;
    }

    /**
     * Set Soundcloud refresh token.
     *
     * @param string|null $refreshToken
     *
     * @return self
     */
    public function setSoundcloudRefreshToken($refreshToken)
    {
        $this->soundcloudRefreshToken = $refreshToken;

        return $this;
    }

    /**
     * Set Soundcloud username.
     *
     * @param string|null $username
     *
     * @return self
     */
    public function setSoundcloudUsername($username)
    {
        $this->soundcloudUsername = $username;

        return $this;
    }
}
