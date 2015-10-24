<?php

namespace EmanueleMinotto\HwiOauthBridge\Traits\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;

trait FacebookTrait
{
    /**
     * Facebook username.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $facebookUsername;

    /**
     * Facebook nickname.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $facebookNickname;

    /**
     * Facebook first name.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $facebookFirstName;

    /**
     * Facebook last name.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $facebookLastName;

    /**
     * Facebook real name.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $facebookRealName;

    /**
     * Facebook profilePicture.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $facebookEmail;

    /**
     * Facebook profile picture.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $facebookProfilePicture;

    /**
     * Facebook access token.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $facebookAccessToken;

    /**
     * Facebook refresh token.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $facebookRefreshToken;

    /**
     * Facebook expires in.
     *
     * @var string|null
     *
     * @ODMString
     */
    private $facebookExpiresIn;

    /**
     * Facebook data.
     *
     * @var array|null
     *
     * @ODM\Hash
     */
    private $facebookData;

    /**
     * Get Facebook access token.
     *
     * @return string|null
     */
    public function getFacebookAccessToken()
    {
        return $this->facebookAccessToken;
    }

    /**
     * Gets the Facebook data.
     *
     * @return array|null
     */
    public function getFacebookData()
    {
        return $this->facebookData;
    }

    /**
     * Get Facebook email.
     *
     * @return string|null
     */
    public function getFacebookEmail()
    {
        return $this->facebookEmail;
    }

    /**
     * Get Facebook expires in.
     *
     * @return string|null
     */
    public function getFacebookExpiresIn()
    {
        return $this->facebookExpiresIn;
    }

    /**
     * Get Facebook first name.
     *
     * @return string|null
     */
    public function getFacebookFirstName()
    {
        return $this->facebookFirstName;
    }

    /**
     * Get Facebook last name.
     *
     * @return string|null
     */
    public function getFacebookLastName()
    {
        return $this->facebookLastName;
    }

    /**
     * Get Facebook nickname.
     *
     * @return string|null
     */
    public function getFacebookNickname()
    {
        return $this->facebookNickname;
    }

    /**
     * Get Facebook profile picture.
     *
     * @return string|null
     */
    public function getFacebookProfilePicture()
    {
        return $this->facebookProfilePicture;
    }

    /**
     * Get Facebook real name.
     *
     * @return string|null
     */
    public function getFacebookRealName()
    {
        return $this->facebookRealName;
    }

    /**
     * Get Facebook refresh token.
     *
     * @return string|null
     */
    public function getFacebookRefreshToken()
    {
        return $this->facebookRefreshToken;
    }

    /**
     * Get Facebook username.
     *
     * @return string|null
     */
    public function getFacebookUsername()
    {
        return $this->facebookUsername;
    }

    /**
     * Set Facebook access token.
     *
     * @param string|null $accessToken
     *
     * @return self
     */
    public function setFacebookAccessToken($accessToken)
    {
        $this->facebookAccessToken = $accessToken;

        return $this;
    }

    /**
     * Sets the Facebook data.
     *
     * @param array|null $data the facebook data
     *
     * @return self
     */
    public function setFacebookData(array $data = null)
    {
        $this->facebookData = $data;

        return $this;
    }

    /**
     * Set Facebook email.
     *
     * @param string|null $email
     *
     * @return self
     */
    public function setFacebookEmail($email)
    {
        $this->facebookEmail = $email;

        return $this;
    }

    /**
     * Set Facebook expires in.
     *
     * @param string|null $expiresIn
     *
     * @return self
     */
    public function setFacebookExpiresIn($expiresIn)
    {
        $this->facebookExpiresIn = $expiresIn;

        return $this;
    }

    /**
     * Set Facebook first name.
     *
     * @param string|null $firstName
     *
     * @return self
     */
    public function setFacebookFirstName($firstName)
    {
        $this->facebookFirstName = $firstName;

        return $this;
    }

    /**
     * Set Facebook last name.
     *
     * @param string|null $lastName
     *
     * @return self
     */
    public function setFacebookLastName($lastName)
    {
        $this->facebookLastName = $lastName;

        return $this;
    }

    /**
     * Set Facebook nickname.
     *
     * @param string|null $nickname
     *
     * @return self
     */
    public function setFacebookNickname($nickname)
    {
        $this->facebookNickname = $nickname;

        return $this;
    }

    /**
     * Set Facebook profile picture.
     *
     * @param string|null $profilePicture
     *
     * @return self
     */
    public function setFacebookProfilePicture($profilePicture)
    {
        $this->facebookProfilePicture = $profilePicture;

        return $this;
    }

    /**
     * Set Facebook real name.
     *
     * @param string|null $realName
     *
     * @return self
     */
    public function setFacebookRealName($realName)
    {
        $this->facebookRealName = $realName;

        return $this;
    }

    /**
     * Set Facebook refresh token.
     *
     * @param string|null $refreshToken
     *
     * @return self
     */
    public function setFacebookRefreshToken($refreshToken)
    {
        $this->facebookRefreshToken = $refreshToken;

        return $this;
    }

    /**
     * Set Facebook username.
     *
     * @param string|null $username
     *
     * @return self
     */
    public function setFacebookUsername($username)
    {
        $this->facebookUsername = $username;

        return $this;
    }
}
