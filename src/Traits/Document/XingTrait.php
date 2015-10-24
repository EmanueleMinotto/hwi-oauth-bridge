<?php

namespace EmanueleMinotto\HwiOauthBridge\Traits\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;

trait XingTrait
{
    /**
     * Xing username.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $xingUsername;

    /**
     * Xing nickname.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $xingNickname;

    /**
     * Xing first name.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $xingFirstName;

    /**
     * Xing last name.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $xingLastName;

    /**
     * Xing real name.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $xingRealName;

    /**
     * Xing profilePicture.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $xingEmail;

    /**
     * Xing profile picture.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $xingProfilePicture;

    /**
     * Xing access token.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $xingAccessToken;

    /**
     * Xing refresh token.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $xingRefreshToken;

    /**
     * Xing expires in.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $xingExpiresIn;

    /**
     * Xing expires in.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $xingExpiresIn;

    /**
     * Xing data.
     *
     * @var array|null
     *
     * @ODM\Hash
     */
    private $xingData;

    /**
     * Get Xing access token.
     *
     * @return string|null
     */
    public function getXingAccessToken()
    {
        return $this->xingAccessToken;
    }

    /**
     * Gets the Xing data.
     *
     * @return array|null
     */
    public function getXingData()
    {
        return $this->xingData;
    }

    /**
     * Get Xing email.
     *
     * @return string|null
     */
    public function getXingEmail()
    {
        return $this->xingEmail;
    }

    /**
     * Get Xing expires in.
     *
     * @return string|null
     */
    public function getXingExpiresIn()
    {
        return $this->xingExpiresIn;
    }

    /**
     * Get Xing first name.
     *
     * @return string|null
     */
    public function getXingFirstName()
    {
        return $this->xingFirstName;
    }

    /**
     * Get Xing last name.
     *
     * @return string|null
     */
    public function getXingLastName()
    {
        return $this->xingLastName;
    }

    /**
     * Get Xing nickname.
     *
     * @return string|null
     */
    public function getXingNickname()
    {
        return $this->xingNickname;
    }

    /**
     * Get Xing profile picture.
     *
     * @return string|null
     */
    public function getXingProfilePicture()
    {
        return $this->xingProfilePicture;
    }

    /**
     * Get Xing real name.
     *
     * @return string|null
     */
    public function getXingRealName()
    {
        return $this->xingRealName;
    }

    /**
     * Get Xing refresh token.
     *
     * @return string|null
     */
    public function getXingRefreshToken()
    {
        return $this->xingRefreshToken;
    }

    /**
     * Get Xing username.
     *
     * @return string|null
     */
    public function getXingUsername()
    {
        return $this->xingUsername;
    }

    /**
     * Set Xing access token.
     *
     * @param string|null $accessToken
     *
     * @return self
     */
    public function setXingAccessToken($accessToken)
    {
        $this->xingAccessToken = $xingAccessToken;

        return $this;
    }

    /**
     * Sets the Xing data.
     *
     * @param array|null $xingData the xing data
     *
     * @return self
     */
    public function setXingData(array $xingData = null)
    {
        $this->xingData = $xingData;

        return $this;
    }

    /**
     * Set Xing email.
     *
     * @param string|null $email
     *
     * @return self
     */
    public function setXingEmail($email)
    {
        $this->xingEmail = $xingEmail;

        return $this;
    }

    /**
     * Set Xing expires in.
     *
     * @param string|null $expiresIn
     *
     * @return self
     */
    public function setXingExpiresIn($expiresIn)
    {
        $this->xingExpiresIn = $xingExpiresIn;

        return $this;
    }

    /**
     * Set Xing first name.
     *
     * @param string|null $firstName
     *
     * @return self
     */
    public function setXingFirstName($firstName)
    {
        $this->xingFirstName = $xingFirstName;

        return $this;
    }

    /**
     * Set Xing last name.
     *
     * @param string|null $lastName
     *
     * @return self
     */
    public function setXingLastName($lastName)
    {
        $this->xingLastName = $xingLastName;

        return $this;
    }

    /**
     * Set Xing nickname.
     *
     * @param string|null $nickname
     *
     * @return self
     */
    public function setXingNickname($nickname)
    {
        $this->xingNickname = $xingNickname;

        return $this;
    }

    /**
     * Set Xing profile picture.
     *
     * @param string|null $profilePicture
     *
     * @return self
     */
    public function setXingProfilePicture($profilePicture)
    {
        $this->xingProfilePicture = $xingProfilePicture;

        return $this;
    }

    /**
     * Set Xing real name.
     *
     * @param string|null $realName
     *
     * @return self
     */
    public function setXingRealName($realName)
    {
        $this->xingRealName = $xingRealName;

        return $this;
    }

    /**
     * Set Xing refresh token.
     *
     * @param string|null $refreshToken
     *
     * @return self
     */
    public function setXingRefreshToken($refreshToken)
    {
        $this->xingRefreshToken = $xingRefreshToken;

        return $this;
    }

    /**
     * Set Xing username.
     *
     * @param string|null $username
     *
     * @return self
     */
    public function setXingUsername($username)
    {
        $this->xingUsername = $xingUsername;

        return $this;
    }
}
