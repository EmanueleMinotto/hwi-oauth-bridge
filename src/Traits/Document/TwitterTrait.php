<?php

namespace EmanueleMinotto\HwiOauthBridge\Traits\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;

trait TwitterTrait
{
    /**
     * Twitter username.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $twitterUsername;

    /**
     * Twitter nickname.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $twitterNickname;

    /**
     * Twitter first name.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $twitterFirstName;

    /**
     * Twitter last name.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $twitterLastName;

    /**
     * Twitter real name.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $twitterRealName;

    /**
     * Twitter profilePicture.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $twitterEmail;

    /**
     * Twitter profile picture.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $twitterProfilePicture;

    /**
     * Twitter access token.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $twitterAccessToken;

    /**
     * Twitter refresh token.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $twitterRefreshToken;

    /**
     * Twitter expires in.
     *
     * @var string|null
     *
     * @ODMString
     */
    private $twitterExpiresIn;

    /**
     * Twitter data.
     *
     * @var array|null
     *
     * @ODM\Hash
     */
    private $twitterData;

    /**
     * Get Twitter access token.
     *
     * @return string|null
     */
    public function getTwitterAccessToken()
    {
        return $this->twitterAccessToken;
    }

    /**
     * Gets the Twitter data.
     *
     * @return array|null
     */
    public function getTwitterData()
    {
        return $this->twitterData;
    }

    /**
     * Get Twitter email.
     *
     * @return string|null
     */
    public function getTwitterEmail()
    {
        return $this->twitterEmail;
    }

    /**
     * Get Twitter expires in.
     *
     * @return string|null
     */
    public function getTwitterExpiresIn()
    {
        return $this->twitterExpiresIn;
    }

    /**
     * Get Twitter first name.
     *
     * @return string|null
     */
    public function getTwitterFirstName()
    {
        return $this->twitterFirstName;
    }

    /**
     * Get Twitter last name.
     *
     * @return string|null
     */
    public function getTwitterLastName()
    {
        return $this->twitterLastName;
    }

    /**
     * Get Twitter nickname.
     *
     * @return string|null
     */
    public function getTwitterNickname()
    {
        return $this->twitterNickname;
    }

    /**
     * Get Twitter profile picture.
     *
     * @return string|null
     */
    public function getTwitterProfilePicture()
    {
        return $this->twitterProfilePicture;
    }

    /**
     * Get Twitter real name.
     *
     * @return string|null
     */
    public function getTwitterRealName()
    {
        return $this->twitterRealName;
    }

    /**
     * Get Twitter refresh token.
     *
     * @return string|null
     */
    public function getTwitterRefreshToken()
    {
        return $this->twitterRefreshToken;
    }

    /**
     * Get Twitter username.
     *
     * @return string|null
     */
    public function getTwitterUsername()
    {
        return $this->twitterUsername;
    }

    /**
     * Set Twitter access token.
     *
     * @param string|null $accessToken
     *
     * @return self
     */
    public function setTwitterAccessToken($accessToken)
    {
        $this->twitterAccessToken = $accessToken;

        return $this;
    }

    /**
     * Sets the Twitter data.
     *
     * @param array|null $data
     *
     * @return self
     */
    public function setTwitterData(array $data = null)
    {
        $this->twitterData = $data;

        return $this;
    }

    /**
     * Set Twitter email.
     *
     * @param string|null $email
     *
     * @return self
     */
    public function setTwitterEmail($email)
    {
        $this->twitterEmail = $email;

        return $this;
    }

    /**
     * Set Twitter expires in.
     *
     * @param string|null $expiresIn
     *
     * @return self
     */
    public function setTwitterExpiresIn($expiresIn)
    {
        $this->twitterExpiresIn = $expiresIn;

        return $this;
    }

    /**
     * Set Twitter first name.
     *
     * @param string|null $firstName
     *
     * @return self
     */
    public function setTwitterFirstName($firstName)
    {
        $this->twitterFirstName = $firstName;

        return $this;
    }

    /**
     * Set Twitter last name.
     *
     * @param string|null $lastName
     *
     * @return self
     */
    public function setTwitterLastName($lastName)
    {
        $this->twitterLastName = $lastName;

        return $this;
    }

    /**
     * Set Twitter nickname.
     *
     * @param string|null $nickname
     *
     * @return self
     */
    public function setTwitterNickname($nickname)
    {
        $this->twitterNickname = $nickname;

        return $this;
    }

    /**
     * Set Twitter profile picture.
     *
     * @param string|null $profilePicture
     *
     * @return self
     */
    public function setTwitterProfilePicture($profilePicture)
    {
        $this->twitterProfilePicture = $profilePicture;

        return $this;
    }

    /**
     * Set Twitter real name.
     *
     * @param string|null $realName
     *
     * @return self
     */
    public function setTwitterRealName($realName)
    {
        $this->twitterRealName = $realName;

        return $this;
    }

    /**
     * Set Twitter refresh token.
     *
     * @param string|null $refreshToken
     *
     * @return self
     */
    public function setTwitterRefreshToken($refreshToken)
    {
        $this->twitterRefreshToken = $refreshToken;

        return $this;
    }

    /**
     * Set Twitter username.
     *
     * @param string|null $username
     *
     * @return self
     */
    public function setTwitterUsername($username)
    {
        $this->twitterUsername = $username;

        return $this;
    }
}
