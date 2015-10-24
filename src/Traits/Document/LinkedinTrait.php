<?php

namespace EmanueleMinotto\HwiOauthBridge\Traits\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;

trait LinkedinTrait
{
    /**
     * Linkedin username.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $linkedinUsername;

    /**
     * Linkedin nickname.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $linkedinNickname;

    /**
     * Linkedin first name.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $linkedinFirstName;

    /**
     * Linkedin last name.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $linkedinLastName;

    /**
     * Linkedin real name.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $linkedinRealName;

    /**
     * Linkedin profilePicture.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $linkedinEmail;

    /**
     * Linkedin profile picture.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $linkedinProfilePicture;

    /**
     * Linkedin access token.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $linkedinAccessToken;

    /**
     * Linkedin refresh token.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $linkedinRefreshToken;

    /**
     * Linkedin expires in.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $linkedinExpiresIn;

    /**
     * Linkedin expires in.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $linkedinExpiresIn;

    /**
     * Linkedin data.
     *
     * @var array|null
     *
     * @ODM\Hash
     */
    private $linkedinData;

    /**
     * Get Linkedin access token.
     *
     * @return string|null
     */
    public function getLinkedinAccessToken()
    {
        return $this->linkedinAccessToken;
    }

    /**
     * Gets the Linkedin data.
     *
     * @return array|null
     */
    public function getLinkedinData()
    {
        return $this->linkedinData;
    }

    /**
     * Get Linkedin email.
     *
     * @return string|null
     */
    public function getLinkedinEmail()
    {
        return $this->linkedinEmail;
    }

    /**
     * Get Linkedin expires in.
     *
     * @return string|null
     */
    public function getLinkedinExpiresIn()
    {
        return $this->linkedinExpiresIn;
    }

    /**
     * Get Linkedin first name.
     *
     * @return string|null
     */
    public function getLinkedinFirstName()
    {
        return $this->linkedinFirstName;
    }

    /**
     * Get Linkedin last name.
     *
     * @return string|null
     */
    public function getLinkedinLastName()
    {
        return $this->linkedinLastName;
    }

    /**
     * Get Linkedin nickname.
     *
     * @return string|null
     */
    public function getLinkedinNickname()
    {
        return $this->linkedinNickname;
    }

    /**
     * Get Linkedin profile picture.
     *
     * @return string|null
     */
    public function getLinkedinProfilePicture()
    {
        return $this->linkedinProfilePicture;
    }

    /**
     * Get Linkedin real name.
     *
     * @return string|null
     */
    public function getLinkedinRealName()
    {
        return $this->linkedinRealName;
    }

    /**
     * Get Linkedin refresh token.
     *
     * @return string|null
     */
    public function getLinkedinRefreshToken()
    {
        return $this->linkedinRefreshToken;
    }

    /**
     * Get Linkedin username.
     *
     * @return string|null
     */
    public function getLinkedinUsername()
    {
        return $this->linkedinUsername;
    }

    /**
     * Set Linkedin access token.
     *
     * @param string|null $accessToken
     *
     * @return self
     */
    public function setLinkedinAccessToken($accessToken)
    {
        $this->linkedinAccessToken = $linkedinAccessToken;

        return $this;
    }

    /**
     * Sets the Linkedin data.
     *
     * @param array|null $linkedinData the linkedin data
     *
     * @return self
     */
    public function setLinkedinData(array $linkedinData = null)
    {
        $this->linkedinData = $linkedinData;

        return $this;
    }

    /**
     * Set Linkedin email.
     *
     * @param string|null $email
     *
     * @return self
     */
    public function setLinkedinEmail($email)
    {
        $this->linkedinEmail = $linkedinEmail;

        return $this;
    }

    /**
     * Set Linkedin expires in.
     *
     * @param string|null $expiresIn
     *
     * @return self
     */
    public function setLinkedinExpiresIn($expiresIn)
    {
        $this->linkedinExpiresIn = $linkedinExpiresIn;

        return $this;
    }

    /**
     * Set Linkedin first name.
     *
     * @param string|null $firstName
     *
     * @return self
     */
    public function setLinkedinFirstName($firstName)
    {
        $this->linkedinFirstName = $linkedinFirstName;

        return $this;
    }

    /**
     * Set Linkedin last name.
     *
     * @param string|null $lastName
     *
     * @return self
     */
    public function setLinkedinLastName($lastName)
    {
        $this->linkedinLastName = $linkedinLastName;

        return $this;
    }

    /**
     * Set Linkedin nickname.
     *
     * @param string|null $nickname
     *
     * @return self
     */
    public function setLinkedinNickname($nickname)
    {
        $this->linkedinNickname = $linkedinNickname;

        return $this;
    }

    /**
     * Set Linkedin profile picture.
     *
     * @param string|null $profilePicture
     *
     * @return self
     */
    public function setLinkedinProfilePicture($profilePicture)
    {
        $this->linkedinProfilePicture = $linkedinProfilePicture;

        return $this;
    }

    /**
     * Set Linkedin real name.
     *
     * @param string|null $realName
     *
     * @return self
     */
    public function setLinkedinRealName($realName)
    {
        $this->linkedinRealName = $linkedinRealName;

        return $this;
    }

    /**
     * Set Linkedin refresh token.
     *
     * @param string|null $refreshToken
     *
     * @return self
     */
    public function setLinkedinRefreshToken($refreshToken)
    {
        $this->linkedinRefreshToken = $linkedinRefreshToken;

        return $this;
    }

    /**
     * Set Linkedin username.
     *
     * @param string|null $username
     *
     * @return self
     */
    public function setLinkedinUsername($username)
    {
        $this->linkedinUsername = $linkedinUsername;

        return $this;
    }
}
