<?php

namespace EmanueleMinotto\HwiOauthBridge\Traits\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;

trait FlickrTrait
{
    /**
     * Flickr username.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $flickrUsername;

    /**
     * Flickr nickname.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $flickrNickname;

    /**
     * Flickr first name.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $flickrFirstName;

    /**
     * Flickr last name.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $flickrLastName;

    /**
     * Flickr real name.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $flickrRealName;

    /**
     * Flickr profilePicture.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $flickrEmail;

    /**
     * Flickr profile picture.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $flickrProfilePicture;

    /**
     * Flickr access token.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $flickrAccessToken;

    /**
     * Flickr refresh token.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $flickrRefreshToken;

    /**
     * Flickr expires in.
     *
     * @var string|null
     *
     * @ODMString
     */
    private $flickrExpiresIn;

    /**
     * Flickr data.
     *
     * @var array|null
     *
     * @ODM\Hash
     */
    private $flickrData;

    /**
     * Get Flickr access token.
     *
     * @return string|null
     */
    public function getFlickrAccessToken()
    {
        return $this->flickrAccessToken;
    }

    /**
     * Gets the Flickr data.
     *
     * @return array|null
     */
    public function getFlickrData()
    {
        return $this->flickrData;
    }

    /**
     * Get Flickr email.
     *
     * @return string|null
     */
    public function getFlickrEmail()
    {
        return $this->flickrEmail;
    }

    /**
     * Get Flickr expires in.
     *
     * @return string|null
     */
    public function getFlickrExpiresIn()
    {
        return $this->flickrExpiresIn;
    }

    /**
     * Get Flickr first name.
     *
     * @return string|null
     */
    public function getFlickrFirstName()
    {
        return $this->flickrFirstName;
    }

    /**
     * Get Flickr last name.
     *
     * @return string|null
     */
    public function getFlickrLastName()
    {
        return $this->flickrLastName;
    }

    /**
     * Get Flickr nickname.
     *
     * @return string|null
     */
    public function getFlickrNickname()
    {
        return $this->flickrNickname;
    }

    /**
     * Get Flickr profile picture.
     *
     * @return string|null
     */
    public function getFlickrProfilePicture()
    {
        return $this->flickrProfilePicture;
    }

    /**
     * Get Flickr real name.
     *
     * @return string|null
     */
    public function getFlickrRealName()
    {
        return $this->flickrRealName;
    }

    /**
     * Get Flickr refresh token.
     *
     * @return string|null
     */
    public function getFlickrRefreshToken()
    {
        return $this->flickrRefreshToken;
    }

    /**
     * Get Flickr username.
     *
     * @return string|null
     */
    public function getFlickrUsername()
    {
        return $this->flickrUsername;
    }

    /**
     * Set Flickr access token.
     *
     * @param string|null $accessToken
     *
     * @return self
     */
    public function setFlickrAccessToken($accessToken)
    {
        $this->flickrAccessToken = $accessToken;

        return $this;
    }

    /**
     * Sets the Flickr data.
     *
     * @param array|null $data the flickr data
     *
     * @return self
     */
    public function setFlickrData(array $data = null)
    {
        $this->flickrData = $data;

        return $this;
    }

    /**
     * Set Flickr email.
     *
     * @param string|null $email
     *
     * @return self
     */
    public function setFlickrEmail($email)
    {
        $this->flickrEmail = $email;

        return $this;
    }

    /**
     * Set Flickr expires in.
     *
     * @param string|null $expiresIn
     *
     * @return self
     */
    public function setFlickrExpiresIn($expiresIn)
    {
        $this->flickrExpiresIn = $expiresIn;

        return $this;
    }

    /**
     * Set Flickr first name.
     *
     * @param string|null $firstName
     *
     * @return self
     */
    public function setFlickrFirstName($firstName)
    {
        $this->flickrFirstName = $firstName;

        return $this;
    }

    /**
     * Set Flickr last name.
     *
     * @param string|null $lastName
     *
     * @return self
     */
    public function setFlickrLastName($lastName)
    {
        $this->flickrLastName = $lastName;

        return $this;
    }

    /**
     * Set Flickr nickname.
     *
     * @param string|null $nickname
     *
     * @return self
     */
    public function setFlickrNickname($nickname)
    {
        $this->flickrNickname = $nickname;

        return $this;
    }

    /**
     * Set Flickr profile picture.
     *
     * @param string|null $profilePicture
     *
     * @return self
     */
    public function setFlickrProfilePicture($profilePicture)
    {
        $this->flickrProfilePicture = $profilePicture;

        return $this;
    }

    /**
     * Set Flickr real name.
     *
     * @param string|null $realName
     *
     * @return self
     */
    public function setFlickrRealName($realName)
    {
        $this->flickrRealName = $realName;

        return $this;
    }

    /**
     * Set Flickr refresh token.
     *
     * @param string|null $refreshToken
     *
     * @return self
     */
    public function setFlickrRefreshToken($refreshToken)
    {
        $this->flickrRefreshToken = $refreshToken;

        return $this;
    }

    /**
     * Set Flickr username.
     *
     * @param string|null $username
     *
     * @return self
     */
    public function setFlickrUsername($username)
    {
        $this->flickrUsername = $username;

        return $this;
    }
}
