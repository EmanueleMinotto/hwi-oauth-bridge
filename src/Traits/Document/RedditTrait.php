<?php

namespace EmanueleMinotto\HwiOauthBridge\Traits\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;

trait RedditTrait
{
    /**
     * Reddit username.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $redditUsername;

    /**
     * Reddit nickname.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $redditNickname;

    /**
     * Reddit first name.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $redditFirstName;

    /**
     * Reddit last name.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $redditLastName;

    /**
     * Reddit real name.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $redditRealName;

    /**
     * Reddit profilePicture.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $redditEmail;

    /**
     * Reddit profile picture.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $redditProfilePicture;

    /**
     * Reddit access token.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $redditAccessToken;

    /**
     * Reddit refresh token.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $redditRefreshToken;

    /**
     * Reddit expires in.
     *
     * @var string|null
     *
     * @ODMString
     */
    private $redditExpiresIn;

    /**
     * Reddit data.
     *
     * @var array|null
     *
     * @ODM\Hash
     */
    private $redditData;

    /**
     * Get Reddit access token.
     *
     * @return string|null
     */
    public function getRedditAccessToken()
    {
        return $this->redditAccessToken;
    }

    /**
     * Gets the Reddit data.
     *
     * @return array|null
     */
    public function getRedditData()
    {
        return $this->redditData;
    }

    /**
     * Get Reddit email.
     *
     * @return string|null
     */
    public function getRedditEmail()
    {
        return $this->redditEmail;
    }

    /**
     * Get Reddit expires in.
     *
     * @return string|null
     */
    public function getRedditExpiresIn()
    {
        return $this->redditExpiresIn;
    }

    /**
     * Get Reddit first name.
     *
     * @return string|null
     */
    public function getRedditFirstName()
    {
        return $this->redditFirstName;
    }

    /**
     * Get Reddit last name.
     *
     * @return string|null
     */
    public function getRedditLastName()
    {
        return $this->redditLastName;
    }

    /**
     * Get Reddit nickname.
     *
     * @return string|null
     */
    public function getRedditNickname()
    {
        return $this->redditNickname;
    }

    /**
     * Get Reddit profile picture.
     *
     * @return string|null
     */
    public function getRedditProfilePicture()
    {
        return $this->redditProfilePicture;
    }

    /**
     * Get Reddit real name.
     *
     * @return string|null
     */
    public function getRedditRealName()
    {
        return $this->redditRealName;
    }

    /**
     * Get Reddit refresh token.
     *
     * @return string|null
     */
    public function getRedditRefreshToken()
    {
        return $this->redditRefreshToken;
    }

    /**
     * Get Reddit username.
     *
     * @return string|null
     */
    public function getRedditUsername()
    {
        return $this->redditUsername;
    }

    /**
     * Set Reddit access token.
     *
     * @param string|null $accessToken
     *
     * @return self
     */
    public function setRedditAccessToken($accessToken)
    {
        $this->redditAccessToken = $accessToken;

        return $this;
    }

    /**
     * Sets the Reddit data.
     *
     * @param array|null $data the reddit data
     *
     * @return self
     */
    public function setRedditData(array $data = null)
    {
        $this->redditData = $data;

        return $this;
    }

    /**
     * Set Reddit email.
     *
     * @param string|null $email
     *
     * @return self
     */
    public function setRedditEmail($email)
    {
        $this->redditEmail = $email;

        return $this;
    }

    /**
     * Set Reddit expires in.
     *
     * @param string|null $expiresIn
     *
     * @return self
     */
    public function setRedditExpiresIn($expiresIn)
    {
        $this->redditExpiresIn = $expiresIn;

        return $this;
    }

    /**
     * Set Reddit first name.
     *
     * @param string|null $firstName
     *
     * @return self
     */
    public function setRedditFirstName($firstName)
    {
        $this->redditFirstName = $firstName;

        return $this;
    }

    /**
     * Set Reddit last name.
     *
     * @param string|null $lastName
     *
     * @return self
     */
    public function setRedditLastName($lastName)
    {
        $this->redditLastName = $lastName;

        return $this;
    }

    /**
     * Set Reddit nickname.
     *
     * @param string|null $nickname
     *
     * @return self
     */
    public function setRedditNickname($nickname)
    {
        $this->redditNickname = $nickname;

        return $this;
    }

    /**
     * Set Reddit profile picture.
     *
     * @param string|null $profilePicture
     *
     * @return self
     */
    public function setRedditProfilePicture($profilePicture)
    {
        $this->redditProfilePicture = $profilePicture;

        return $this;
    }

    /**
     * Set Reddit real name.
     *
     * @param string|null $realName
     *
     * @return self
     */
    public function setRedditRealName($realName)
    {
        $this->redditRealName = $realName;

        return $this;
    }

    /**
     * Set Reddit refresh token.
     *
     * @param string|null $refreshToken
     *
     * @return self
     */
    public function setRedditRefreshToken($refreshToken)
    {
        $this->redditRefreshToken = $refreshToken;

        return $this;
    }

    /**
     * Set Reddit username.
     *
     * @param string|null $username
     *
     * @return self
     */
    public function setRedditUsername($username)
    {
        $this->redditUsername = $username;

        return $this;
    }
}
