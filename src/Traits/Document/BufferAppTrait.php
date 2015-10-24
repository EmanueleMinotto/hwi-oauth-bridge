<?php

namespace EmanueleMinotto\HwiOauthBridge\Traits\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;

trait BufferAppTrait
{
    /**
     * BufferApp username.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $bufferAppUsername;

    /**
     * BufferApp nickname.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $bufferAppNickname;

    /**
     * BufferApp first name.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $bufferAppFirstName;

    /**
     * BufferApp last name.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $bufferAppLastName;

    /**
     * BufferApp real name.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $bufferAppRealName;

    /**
     * BufferApp profilePicture.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $bufferAppEmail;

    /**
     * BufferApp profile picture.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $bufferAppProfilePicture;

    /**
     * BufferApp access token.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $bufferAppAccessToken;

    /**
     * BufferApp refresh token.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $bufferAppRefreshToken;

    /**
     * BufferApp expires in.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $bufferAppExpiresIn;

    /**
     * BufferApp expires in.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $bufferAppExpiresIn;

    /**
     * BufferApp data.
     *
     * @var array|null
     *
     * @ODM\Hash
     */
    private $bufferAppData;

    /**
     * Get BufferApp access token.
     *
     * @return string|null
     */
    public function getBufferAppAccessToken()
    {
        return $this->bufferAppAccessToken;
    }

    /**
     * Gets the BufferApp data.
     *
     * @return array|null
     */
    public function getBufferAppData()
    {
        return $this->bufferAppData;
    }

    /**
     * Get BufferApp email.
     *
     * @return string|null
     */
    public function getBufferAppEmail()
    {
        return $this->bufferAppEmail;
    }

    /**
     * Get BufferApp expires in.
     *
     * @return string|null
     */
    public function getBufferAppExpiresIn()
    {
        return $this->bufferAppExpiresIn;
    }

    /**
     * Get BufferApp first name.
     *
     * @return string|null
     */
    public function getBufferAppFirstName()
    {
        return $this->bufferAppFirstName;
    }

    /**
     * Get BufferApp last name.
     *
     * @return string|null
     */
    public function getBufferAppLastName()
    {
        return $this->bufferAppLastName;
    }

    /**
     * Get BufferApp nickname.
     *
     * @return string|null
     */
    public function getBufferAppNickname()
    {
        return $this->bufferAppNickname;
    }

    /**
     * Get BufferApp profile picture.
     *
     * @return string|null
     */
    public function getBufferAppProfilePicture()
    {
        return $this->bufferAppProfilePicture;
    }

    /**
     * Get BufferApp real name.
     *
     * @return string|null
     */
    public function getBufferAppRealName()
    {
        return $this->bufferAppRealName;
    }

    /**
     * Get BufferApp refresh token.
     *
     * @return string|null
     */
    public function getBufferAppRefreshToken()
    {
        return $this->bufferAppRefreshToken;
    }

    /**
     * Get BufferApp username.
     *
     * @return string|null
     */
    public function getBufferAppUsername()
    {
        return $this->bufferAppUsername;
    }

    /**
     * Set BufferApp access token.
     *
     * @param string|null $accessToken
     *
     * @return self
     */
    public function setBufferAppAccessToken($accessToken)
    {
        $this->bufferAppAccessToken = $bufferAppAccessToken;

        return $this;
    }

    /**
     * Sets the BufferApp data.
     *
     * @param array|null $bufferAppData the bufferApp data
     *
     * @return self
     */
    public function setBufferAppData(array $bufferAppData = null)
    {
        $this->bufferAppData = $bufferAppData;

        return $this;
    }

    /**
     * Set BufferApp email.
     *
     * @param string|null $email
     *
     * @return self
     */
    public function setBufferAppEmail($email)
    {
        $this->bufferAppEmail = $bufferAppEmail;

        return $this;
    }

    /**
     * Set BufferApp expires in.
     *
     * @param string|null $expiresIn
     *
     * @return self
     */
    public function setBufferAppExpiresIn($expiresIn)
    {
        $this->bufferAppExpiresIn = $bufferAppExpiresIn;

        return $this;
    }

    /**
     * Set BufferApp first name.
     *
     * @param string|null $firstName
     *
     * @return self
     */
    public function setBufferAppFirstName($firstName)
    {
        $this->bufferAppFirstName = $bufferAppFirstName;

        return $this;
    }

    /**
     * Set BufferApp last name.
     *
     * @param string|null $lastName
     *
     * @return self
     */
    public function setBufferAppLastName($lastName)
    {
        $this->bufferAppLastName = $bufferAppLastName;

        return $this;
    }

    /**
     * Set BufferApp nickname.
     *
     * @param string|null $nickname
     *
     * @return self
     */
    public function setBufferAppNickname($nickname)
    {
        $this->bufferAppNickname = $bufferAppNickname;

        return $this;
    }

    /**
     * Set BufferApp profile picture.
     *
     * @param string|null $profilePicture
     *
     * @return self
     */
    public function setBufferAppProfilePicture($profilePicture)
    {
        $this->bufferAppProfilePicture = $bufferAppProfilePicture;

        return $this;
    }

    /**
     * Set BufferApp real name.
     *
     * @param string|null $realName
     *
     * @return self
     */
    public function setBufferAppRealName($realName)
    {
        $this->bufferAppRealName = $bufferAppRealName;

        return $this;
    }

    /**
     * Set BufferApp refresh token.
     *
     * @param string|null $refreshToken
     *
     * @return self
     */
    public function setBufferAppRefreshToken($refreshToken)
    {
        $this->bufferAppRefreshToken = $bufferAppRefreshToken;

        return $this;
    }

    /**
     * Set BufferApp username.
     *
     * @param string|null $username
     *
     * @return self
     */
    public function setBufferAppUsername($username)
    {
        $this->bufferAppUsername = $bufferAppUsername;

        return $this;
    }
}
