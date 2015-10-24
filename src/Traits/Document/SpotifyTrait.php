<?php

namespace EmanueleMinotto\HwiOauthBridge\Traits\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;

trait SpotifyTrait
{
    /**
     * Spotify username.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $spotifyUsername;

    /**
     * Spotify nickname.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $spotifyNickname;

    /**
     * Spotify first name.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $spotifyFirstName;

    /**
     * Spotify last name.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $spotifyLastName;

    /**
     * Spotify real name.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $spotifyRealName;

    /**
     * Spotify profilePicture.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $spotifyEmail;

    /**
     * Spotify profile picture.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $spotifyProfilePicture;

    /**
     * Spotify access token.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $spotifyAccessToken;

    /**
     * Spotify refresh token.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $spotifyRefreshToken;

    /**
     * Spotify expires in.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $spotifyExpiresIn;

    /**
     * Spotify expires in.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $spotifyExpiresIn;

    /**
     * Spotify data.
     *
     * @var array|null
     *
     * @ODM\Hash
     */
    private $spotifyData;

    /**
     * Get Spotify access token.
     *
     * @return string|null
     */
    public function getSpotifyAccessToken()
    {
        return $this->spotifyAccessToken;
    }

    /**
     * Gets the Spotify data.
     *
     * @return array|null
     */
    public function getSpotifyData()
    {
        return $this->spotifyData;
    }

    /**
     * Get Spotify email.
     *
     * @return string|null
     */
    public function getSpotifyEmail()
    {
        return $this->spotifyEmail;
    }

    /**
     * Get Spotify expires in.
     *
     * @return string|null
     */
    public function getSpotifyExpiresIn()
    {
        return $this->spotifyExpiresIn;
    }

    /**
     * Get Spotify first name.
     *
     * @return string|null
     */
    public function getSpotifyFirstName()
    {
        return $this->spotifyFirstName;
    }

    /**
     * Get Spotify last name.
     *
     * @return string|null
     */
    public function getSpotifyLastName()
    {
        return $this->spotifyLastName;
    }

    /**
     * Get Spotify nickname.
     *
     * @return string|null
     */
    public function getSpotifyNickname()
    {
        return $this->spotifyNickname;
    }

    /**
     * Get Spotify profile picture.
     *
     * @return string|null
     */
    public function getSpotifyProfilePicture()
    {
        return $this->spotifyProfilePicture;
    }

    /**
     * Get Spotify real name.
     *
     * @return string|null
     */
    public function getSpotifyRealName()
    {
        return $this->spotifyRealName;
    }

    /**
     * Get Spotify refresh token.
     *
     * @return string|null
     */
    public function getSpotifyRefreshToken()
    {
        return $this->spotifyRefreshToken;
    }

    /**
     * Get Spotify username.
     *
     * @return string|null
     */
    public function getSpotifyUsername()
    {
        return $this->spotifyUsername;
    }

    /**
     * Set Spotify access token.
     *
     * @param string|null $accessToken
     *
     * @return self
     */
    public function setSpotifyAccessToken($accessToken)
    {
        $this->spotifyAccessToken = $spotifyAccessToken;

        return $this;
    }

    /**
     * Sets the Spotify data.
     *
     * @param array|null $spotifyData the spotify data
     *
     * @return self
     */
    public function setSpotifyData(array $spotifyData = null)
    {
        $this->spotifyData = $spotifyData;

        return $this;
    }

    /**
     * Set Spotify email.
     *
     * @param string|null $email
     *
     * @return self
     */
    public function setSpotifyEmail($email)
    {
        $this->spotifyEmail = $spotifyEmail;

        return $this;
    }

    /**
     * Set Spotify expires in.
     *
     * @param string|null $expiresIn
     *
     * @return self
     */
    public function setSpotifyExpiresIn($expiresIn)
    {
        $this->spotifyExpiresIn = $spotifyExpiresIn;

        return $this;
    }

    /**
     * Set Spotify first name.
     *
     * @param string|null $firstName
     *
     * @return self
     */
    public function setSpotifyFirstName($firstName)
    {
        $this->spotifyFirstName = $spotifyFirstName;

        return $this;
    }

    /**
     * Set Spotify last name.
     *
     * @param string|null $lastName
     *
     * @return self
     */
    public function setSpotifyLastName($lastName)
    {
        $this->spotifyLastName = $spotifyLastName;

        return $this;
    }

    /**
     * Set Spotify nickname.
     *
     * @param string|null $nickname
     *
     * @return self
     */
    public function setSpotifyNickname($nickname)
    {
        $this->spotifyNickname = $spotifyNickname;

        return $this;
    }

    /**
     * Set Spotify profile picture.
     *
     * @param string|null $profilePicture
     *
     * @return self
     */
    public function setSpotifyProfilePicture($profilePicture)
    {
        $this->spotifyProfilePicture = $spotifyProfilePicture;

        return $this;
    }

    /**
     * Set Spotify real name.
     *
     * @param string|null $realName
     *
     * @return self
     */
    public function setSpotifyRealName($realName)
    {
        $this->spotifyRealName = $spotifyRealName;

        return $this;
    }

    /**
     * Set Spotify refresh token.
     *
     * @param string|null $refreshToken
     *
     * @return self
     */
    public function setSpotifyRefreshToken($refreshToken)
    {
        $this->spotifyRefreshToken = $spotifyRefreshToken;

        return $this;
    }

    /**
     * Set Spotify username.
     *
     * @param string|null $username
     *
     * @return self
     */
    public function setSpotifyUsername($username)
    {
        $this->spotifyUsername = $spotifyUsername;

        return $this;
    }
}
