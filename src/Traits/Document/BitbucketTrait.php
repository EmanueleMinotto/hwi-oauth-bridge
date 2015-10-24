<?php

namespace EmanueleMinotto\HwiOauthBridge\Traits\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;

trait BitbucketTrait
{
    /**
     * Bitbucket username.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $bitbucketUsername;

    /**
     * Bitbucket nickname.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $bitbucketNickname;

    /**
     * Bitbucket first name.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $bitbucketFirstName;

    /**
     * Bitbucket last name.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $bitbucketLastName;

    /**
     * Bitbucket real name.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $bitbucketRealName;

    /**
     * Bitbucket profilePicture.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $bitbucketEmail;

    /**
     * Bitbucket profile picture.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $bitbucketProfilePicture;

    /**
     * Bitbucket access token.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $bitbucketAccessToken;

    /**
     * Bitbucket refresh token.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $bitbucketRefreshToken;

    /**
     * Bitbucket expires in.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $bitbucketExpiresIn;

    /**
     * Bitbucket expires in.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $bitbucketExpiresIn;

    /**
     * Bitbucket data.
     *
     * @var array|null
     *
     * @ODM\Hash
     */
    private $bitbucketData;

    /**
     * Get Bitbucket access token.
     *
     * @return string|null
     */
    public function getBitbucketAccessToken()
    {
        return $this->bitbucketAccessToken;
    }

    /**
     * Gets the Bitbucket data.
     *
     * @return array|null
     */
    public function getBitbucketData()
    {
        return $this->bitbucketData;
    }

    /**
     * Get Bitbucket email.
     *
     * @return string|null
     */
    public function getBitbucketEmail()
    {
        return $this->bitbucketEmail;
    }

    /**
     * Get Bitbucket expires in.
     *
     * @return string|null
     */
    public function getBitbucketExpiresIn()
    {
        return $this->bitbucketExpiresIn;
    }

    /**
     * Get Bitbucket first name.
     *
     * @return string|null
     */
    public function getBitbucketFirstName()
    {
        return $this->bitbucketFirstName;
    }

    /**
     * Get Bitbucket last name.
     *
     * @return string|null
     */
    public function getBitbucketLastName()
    {
        return $this->bitbucketLastName;
    }

    /**
     * Get Bitbucket nickname.
     *
     * @return string|null
     */
    public function getBitbucketNickname()
    {
        return $this->bitbucketNickname;
    }

    /**
     * Get Bitbucket profile picture.
     *
     * @return string|null
     */
    public function getBitbucketProfilePicture()
    {
        return $this->bitbucketProfilePicture;
    }

    /**
     * Get Bitbucket real name.
     *
     * @return string|null
     */
    public function getBitbucketRealName()
    {
        return $this->bitbucketRealName;
    }

    /**
     * Get Bitbucket refresh token.
     *
     * @return string|null
     */
    public function getBitbucketRefreshToken()
    {
        return $this->bitbucketRefreshToken;
    }

    /**
     * Get Bitbucket username.
     *
     * @return string|null
     */
    public function getBitbucketUsername()
    {
        return $this->bitbucketUsername;
    }

    /**
     * Set Bitbucket access token.
     *
     * @param string|null $accessToken
     *
     * @return self
     */
    public function setBitbucketAccessToken($accessToken)
    {
        $this->bitbucketAccessToken = $accessToken;

        return $this;
    }

    /**
     * Sets the Bitbucket data.
     *
     * @param array|null $bitbucketData the bitbucket data
     *
     * @return self
     */
    public function setBitbucketData(array $data = null)
    {
        $this->bitbucketData = $data;

        return $this;
    }

    /**
     * Set Bitbucket email.
     *
     * @param string|null $email
     *
     * @return self
     */
    public function setBitbucketEmail($email)
    {
        $this->bitbucketEmail = $email;

        return $this;
    }

    /**
     * Set Bitbucket expires in.
     *
     * @param string|null $expiresIn
     *
     * @return self
     */
    public function setBitbucketExpiresIn($expiresIn)
    {
        $this->bitbucketExpiresIn = $expiresIn;

        return $this;
    }

    /**
     * Set Bitbucket first name.
     *
     * @param string|null $firstName
     *
     * @return self
     */
    public function setBitbucketFirstName($firstName)
    {
        $this->bitbucketFirstName = $firstName;

        return $this;
    }

    /**
     * Set Bitbucket last name.
     *
     * @param string|null $lastName
     *
     * @return self
     */
    public function setBitbucketLastName($lastName)
    {
        $this->bitbucketLastName = $lastName;

        return $this;
    }

    /**
     * Set Bitbucket nickname.
     *
     * @param string|null $nickname
     *
     * @return self
     */
    public function setBitbucketNickname($nickname)
    {
        $this->bitbucketNickname = $nickname;

        return $this;
    }

    /**
     * Set Bitbucket profile picture.
     *
     * @param string|null $profilePicture
     *
     * @return self
     */
    public function setBitbucketProfilePicture($profilePicture)
    {
        $this->bitbucketProfilePicture = $profilePicture;

        return $this;
    }

    /**
     * Set Bitbucket real name.
     *
     * @param string|null $realName
     *
     * @return self
     */
    public function setBitbucketRealName($realName)
    {
        $this->bitbucketRealName = $realName;

        return $this;
    }

    /**
     * Set Bitbucket refresh token.
     *
     * @param string|null $refreshToken
     *
     * @return self
     */
    public function setBitbucketRefreshToken($refreshToken)
    {
        $this->bitbucketRefreshToken = $refreshToken;

        return $this;
    }

    /**
     * Set Bitbucket username.
     *
     * @param string|null $username
     *
     * @return self
     */
    public function setBitbucketUsername($username)
    {
        $this->bitbucketUsername = $username;

        return $this;
    }
}
