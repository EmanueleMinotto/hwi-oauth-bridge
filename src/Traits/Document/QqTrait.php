<?php

namespace EmanueleMinotto\HwiOauthBridge\Traits\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;

trait QqTrait
{
    /**
     * Qq username.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $qqUsername;

    /**
     * Qq nickname.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $qqNickname;

    /**
     * Qq first name.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $qqFirstName;

    /**
     * Qq last name.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $qqLastName;

    /**
     * Qq real name.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $qqRealName;

    /**
     * Qq profilePicture.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $qqEmail;

    /**
     * Qq profile picture.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $qqProfilePicture;

    /**
     * Qq access token.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $qqAccessToken;

    /**
     * Qq refresh token.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $qqRefreshToken;

    /**
     * Qq expires in.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $qqExpiresIn;

    /**
     * Qq expires in.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $qqExpiresIn;

    /**
     * Qq data.
     *
     * @var array|null
     *
     * @ODM\Hash
     */
    private $qqData;

    /**
     * Get Qq access token.
     *
     * @return string|null
     */
    public function getQqAccessToken()
    {
        return $this->qqAccessToken;
    }

    /**
     * Gets the Qq data.
     *
     * @return array|null
     */
    public function getQqData()
    {
        return $this->qqData;
    }

    /**
     * Get Qq email.
     *
     * @return string|null
     */
    public function getQqEmail()
    {
        return $this->qqEmail;
    }

    /**
     * Get Qq expires in.
     *
     * @return string|null
     */
    public function getQqExpiresIn()
    {
        return $this->qqExpiresIn;
    }

    /**
     * Get Qq first name.
     *
     * @return string|null
     */
    public function getQqFirstName()
    {
        return $this->qqFirstName;
    }

    /**
     * Get Qq last name.
     *
     * @return string|null
     */
    public function getQqLastName()
    {
        return $this->qqLastName;
    }

    /**
     * Get Qq nickname.
     *
     * @return string|null
     */
    public function getQqNickname()
    {
        return $this->qqNickname;
    }

    /**
     * Get Qq profile picture.
     *
     * @return string|null
     */
    public function getQqProfilePicture()
    {
        return $this->qqProfilePicture;
    }

    /**
     * Get Qq real name.
     *
     * @return string|null
     */
    public function getQqRealName()
    {
        return $this->qqRealName;
    }

    /**
     * Get Qq refresh token.
     *
     * @return string|null
     */
    public function getQqRefreshToken()
    {
        return $this->qqRefreshToken;
    }

    /**
     * Get Qq username.
     *
     * @return string|null
     */
    public function getQqUsername()
    {
        return $this->qqUsername;
    }

    /**
     * Set Qq access token.
     *
     * @param string|null $accessToken
     *
     * @return self
     */
    public function setQqAccessToken($accessToken)
    {
        $this->qqAccessToken = $accessToken;

        return $this;
    }

    /**
     * Sets the Qq data.
     *
     * @param array|null $data the qq data
     *
     * @return self
     */
    public function setQqData(array $data = null)
    {
        $this->qqData = $data;

        return $this;
    }

    /**
     * Set Qq email.
     *
     * @param string|null $email
     *
     * @return self
     */
    public function setQqEmail($email)
    {
        $this->qqEmail = $email;

        return $this;
    }

    /**
     * Set Qq expires in.
     *
     * @param string|null $expiresIn
     *
     * @return self
     */
    public function setQqExpiresIn($expiresIn)
    {
        $this->qqExpiresIn = $expiresIn;

        return $this;
    }

    /**
     * Set Qq first name.
     *
     * @param string|null $firstName
     *
     * @return self
     */
    public function setQqFirstName($firstName)
    {
        $this->qqFirstName = $firstName;

        return $this;
    }

    /**
     * Set Qq last name.
     *
     * @param string|null $lastName
     *
     * @return self
     */
    public function setQqLastName($lastName)
    {
        $this->qqLastName = $lastName;

        return $this;
    }

    /**
     * Set Qq nickname.
     *
     * @param string|null $nickname
     *
     * @return self
     */
    public function setQqNickname($nickname)
    {
        $this->qqNickname = $nickname;

        return $this;
    }

    /**
     * Set Qq profile picture.
     *
     * @param string|null $profilePicture
     *
     * @return self
     */
    public function setQqProfilePicture($profilePicture)
    {
        $this->qqProfilePicture = $profilePicture;

        return $this;
    }

    /**
     * Set Qq real name.
     *
     * @param string|null $realName
     *
     * @return self
     */
    public function setQqRealName($realName)
    {
        $this->qqRealName = $realName;

        return $this;
    }

    /**
     * Set Qq refresh token.
     *
     * @param string|null $refreshToken
     *
     * @return self
     */
    public function setQqRefreshToken($refreshToken)
    {
        $this->qqRefreshToken = $refreshToken;

        return $this;
    }

    /**
     * Set Qq username.
     *
     * @param string|null $username
     *
     * @return self
     */
    public function setQqUsername($username)
    {
        $this->qqUsername = $username;

        return $this;
    }
}
