<?php

namespace EmanueleMinotto\HwiOauthBridge\Traits\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;

trait WindowsLiveTrait
{
    /**
     * WindowsLive username.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $windowsLiveUsername;

    /**
     * WindowsLive nickname.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $windowsLiveNickname;

    /**
     * WindowsLive first name.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $windowsLiveFirstName;

    /**
     * WindowsLive last name.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $windowsLiveLastName;

    /**
     * WindowsLive real name.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $windowsLiveRealName;

    /**
     * WindowsLive profilePicture.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $windowsLiveEmail;

    /**
     * WindowsLive profile picture.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $windowsLiveProfilePicture;

    /**
     * WindowsLive access token.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $windowsLiveAccessToken;

    /**
     * WindowsLive refresh token.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $windowsLiveRefreshToken;

    /**
     * WindowsLive expires in.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $windowsLiveExpiresIn;

    /**
     * WindowsLive data.
     *
     * @var array|null
     *
     * @ODM\Hash
     */
    private $windowsLiveData;

    /**
     * Get WindowsLive access token.
     *
     * @return string|null
     */
    public function getWindowsLiveAccessToken()
    {
        return $this->windowsLiveAccessToken;
    }

    /**
     * Gets the WindowsLive data.
     *
     * @return array|null
     */
    public function getWindowsLiveData()
    {
        return $this->windowsLiveData;
    }

    /**
     * Get WindowsLive email.
     *
     * @return string|null
     */
    public function getWindowsLiveEmail()
    {
        return $this->windowsLiveEmail;
    }

    /**
     * Get WindowsLive expires in.
     *
     * @return string|null
     */
    public function getWindowsLiveExpiresIn()
    {
        return $this->windowsLiveExpiresIn;
    }

    /**
     * Get WindowsLive first name.
     *
     * @return string|null
     */
    public function getWindowsLiveFirstName()
    {
        return $this->windowsLiveFirstName;
    }

    /**
     * Get WindowsLive last name.
     *
     * @return string|null
     */
    public function getWindowsLiveLastName()
    {
        return $this->windowsLiveLastName;
    }

    /**
     * Get WindowsLive nickname.
     *
     * @return string|null
     */
    public function getWindowsLiveNickname()
    {
        return $this->windowsLiveNickname;
    }

    /**
     * Get WindowsLive profile picture.
     *
     * @return string|null
     */
    public function getWindowsLiveProfilePicture()
    {
        return $this->windowsLiveProfilePicture;
    }

    /**
     * Get WindowsLive real name.
     *
     * @return string|null
     */
    public function getWindowsLiveRealName()
    {
        return $this->windowsLiveRealName;
    }

    /**
     * Get WindowsLive refresh token.
     *
     * @return string|null
     */
    public function getWindowsLiveRefreshToken()
    {
        return $this->windowsLiveRefreshToken;
    }

    /**
     * Get WindowsLive username.
     *
     * @return string|null
     */
    public function getWindowsLiveUsername()
    {
        return $this->windowsLiveUsername;
    }

    /**
     * Set WindowsLive access token.
     *
     * @param string|null $accessToken
     *
     * @return self
     */
    public function setWindowsLiveAccessToken($accessToken)
    {
        $this->windowsLiveAccessToken = $accessToken;

        return $this;
    }

    /**
     * Sets the WindowsLive data.
     *
     * @param array|null $data
     *
     * @return self
     */
    public function setWindowsLiveData(array $data = null)
    {
        $this->windowsLiveData = $data;

        return $this;
    }

    /**
     * Set WindowsLive email.
     *
     * @param string|null $email
     *
     * @return self
     */
    public function setWindowsLiveEmail($email)
    {
        $this->windowsLiveEmail = $email;

        return $this;
    }

    /**
     * Set WindowsLive expires in.
     *
     * @param string|null $expiresIn
     *
     * @return self
     */
    public function setWindowsLiveExpiresIn($expiresIn)
    {
        $this->windowsLiveExpiresIn = $expiresIn;

        return $this;
    }

    /**
     * Set WindowsLive first name.
     *
     * @param string|null $firstName
     *
     * @return self
     */
    public function setWindowsLiveFirstName($firstName)
    {
        $this->windowsLiveFirstName = $firstName;

        return $this;
    }

    /**
     * Set WindowsLive last name.
     *
     * @param string|null $lastName
     *
     * @return self
     */
    public function setWindowsLiveLastName($lastName)
    {
        $this->windowsLiveLastName = $lastName;

        return $this;
    }

    /**
     * Set WindowsLive nickname.
     *
     * @param string|null $nickname
     *
     * @return self
     */
    public function setWindowsLiveNickname($nickname)
    {
        $this->windowsLiveNickname = $nickname;

        return $this;
    }

    /**
     * Set WindowsLive profile picture.
     *
     * @param string|null $profilePicture
     *
     * @return self
     */
    public function setWindowsLiveProfilePicture($profilePicture)
    {
        $this->windowsLiveProfilePicture = $profilePicture;

        return $this;
    }

    /**
     * Set WindowsLive real name.
     *
     * @param string|null $realName
     *
     * @return self
     */
    public function setWindowsLiveRealName($realName)
    {
        $this->windowsLiveRealName = $realName;

        return $this;
    }

    /**
     * Set WindowsLive refresh token.
     *
     * @param string|null $refreshToken
     *
     * @return self
     */
    public function setWindowsLiveRefreshToken($refreshToken)
    {
        $this->windowsLiveRefreshToken = $refreshToken;

        return $this;
    }

    /**
     * Set WindowsLive username.
     *
     * @param string|null $username
     *
     * @return self
     */
    public function setWindowsLiveUsername($username)
    {
        $this->windowsLiveUsername = $username;

        return $this;
    }
}
