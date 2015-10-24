<?php

namespace EmanueleMinotto\HwiOauthBridge\Traits\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;

trait DropboxTrait
{
    /**
     * Dropbox username.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $dropboxUsername;

    /**
     * Dropbox nickname.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $dropboxNickname;

    /**
     * Dropbox first name.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $dropboxFirstName;

    /**
     * Dropbox last name.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $dropboxLastName;

    /**
     * Dropbox real name.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $dropboxRealName;

    /**
     * Dropbox profilePicture.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $dropboxEmail;

    /**
     * Dropbox profile picture.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $dropboxProfilePicture;

    /**
     * Dropbox access token.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $dropboxAccessToken;

    /**
     * Dropbox refresh token.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $dropboxRefreshToken;

    /**
     * Dropbox expires in.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $dropboxExpiresIn;

    /**
     * Dropbox expires in.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $dropboxExpiresIn;

    /**
     * Dropbox data.
     *
     * @var array|null
     *
     * @ODM\Hash
     */
    private $dropboxData;

    /**
     * Get Dropbox access token.
     *
     * @return string|null
     */
    public function getDropboxAccessToken()
    {
        return $this->dropboxAccessToken;
    }

    /**
     * Gets the Dropbox data.
     *
     * @return array|null
     */
    public function getDropboxData()
    {
        return $this->dropboxData;
    }

    /**
     * Get Dropbox email.
     *
     * @return string|null
     */
    public function getDropboxEmail()
    {
        return $this->dropboxEmail;
    }

    /**
     * Get Dropbox expires in.
     *
     * @return string|null
     */
    public function getDropboxExpiresIn()
    {
        return $this->dropboxExpiresIn;
    }

    /**
     * Get Dropbox first name.
     *
     * @return string|null
     */
    public function getDropboxFirstName()
    {
        return $this->dropboxFirstName;
    }

    /**
     * Get Dropbox last name.
     *
     * @return string|null
     */
    public function getDropboxLastName()
    {
        return $this->dropboxLastName;
    }

    /**
     * Get Dropbox nickname.
     *
     * @return string|null
     */
    public function getDropboxNickname()
    {
        return $this->dropboxNickname;
    }

    /**
     * Get Dropbox profile picture.
     *
     * @return string|null
     */
    public function getDropboxProfilePicture()
    {
        return $this->dropboxProfilePicture;
    }

    /**
     * Get Dropbox real name.
     *
     * @return string|null
     */
    public function getDropboxRealName()
    {
        return $this->dropboxRealName;
    }

    /**
     * Get Dropbox refresh token.
     *
     * @return string|null
     */
    public function getDropboxRefreshToken()
    {
        return $this->dropboxRefreshToken;
    }

    /**
     * Get Dropbox username.
     *
     * @return string|null
     */
    public function getDropboxUsername()
    {
        return $this->dropboxUsername;
    }

    /**
     * Set Dropbox access token.
     *
     * @param string|null $accessToken
     *
     * @return self
     */
    public function setDropboxAccessToken($accessToken)
    {
        $this->dropboxAccessToken = $accessToken;

        return $this;
    }

    /**
     * Sets the Dropbox data.
     *
     * @param array|null $dropboxData the dropbox data
     *
     * @return self
     */
    public function setDropboxData(array $data = null)
    {
        $this->dropboxData = $data;

        return $this;
    }

    /**
     * Set Dropbox email.
     *
     * @param string|null $email
     *
     * @return self
     */
    public function setDropboxEmail($email)
    {
        $this->dropboxEmail = $email;

        return $this;
    }

    /**
     * Set Dropbox expires in.
     *
     * @param string|null $expiresIn
     *
     * @return self
     */
    public function setDropboxExpiresIn($expiresIn)
    {
        $this->dropboxExpiresIn = $expiresIn;

        return $this;
    }

    /**
     * Set Dropbox first name.
     *
     * @param string|null $firstName
     *
     * @return self
     */
    public function setDropboxFirstName($firstName)
    {
        $this->dropboxFirstName = $firstName;

        return $this;
    }

    /**
     * Set Dropbox last name.
     *
     * @param string|null $lastName
     *
     * @return self
     */
    public function setDropboxLastName($lastName)
    {
        $this->dropboxLastName = $lastName;

        return $this;
    }

    /**
     * Set Dropbox nickname.
     *
     * @param string|null $nickname
     *
     * @return self
     */
    public function setDropboxNickname($nickname)
    {
        $this->dropboxNickname = $nickname;

        return $this;
    }

    /**
     * Set Dropbox profile picture.
     *
     * @param string|null $profilePicture
     *
     * @return self
     */
    public function setDropboxProfilePicture($profilePicture)
    {
        $this->dropboxProfilePicture = $profilePicture;

        return $this;
    }

    /**
     * Set Dropbox real name.
     *
     * @param string|null $realName
     *
     * @return self
     */
    public function setDropboxRealName($realName)
    {
        $this->dropboxRealName = $realName;

        return $this;
    }

    /**
     * Set Dropbox refresh token.
     *
     * @param string|null $refreshToken
     *
     * @return self
     */
    public function setDropboxRefreshToken($refreshToken)
    {
        $this->dropboxRefreshToken = $refreshToken;

        return $this;
    }

    /**
     * Set Dropbox username.
     *
     * @param string|null $username
     *
     * @return self
     */
    public function setDropboxUsername($username)
    {
        $this->dropboxUsername = $username;

        return $this;
    }
}
