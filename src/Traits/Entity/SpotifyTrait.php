<?php

namespace EmanueleMinotto\HwiOauthBridge\Traits\Entity;

use Doctrine\ORM\Mapping as ORM;

trait SpotifyTrait
{
    /**
     * Spotify username.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $spotifyUsername;

    /**
     * Spotify nickname.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $spotifyNickname;

    /**
     * Spotify first name.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $spotifyFirstName;

    /**
     * Spotify last name.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $spotifyLastName;

    /**
     * Spotify real name.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $spotifyRealName;

    /**
     * Spotify profilePicture.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $spotifyEmail;

    /**
     * Spotify profile picture.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $spotifyProfilePicture;

    /**
     * Spotify access token.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $spotifyAccessToken;

    /**
     * Spotify refresh token.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $spotifyRefreshToken;

    /**
     * Spotify expires in.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $spotifyExpiresIn;

    /**
     * Spotify expires in.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $spotifyExpiresIn;

    /**
     * Spotify data.
     *
     * @var array|null
     *
     * @ORM\Column(type = "json_array", nullable = true)
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
        $this->spotifyAccessToken = $accessToken;

        return $this;
    }

    /**
     * Sets the Spotify data.
     *
     * @param array|null $spotifyData the spotify data
     *
     * @return self
     */
    public function setSpotifyData(array $data = null)
    {
        $this->spotifyData = $data;

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
        $this->spotifyEmail = $email;

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
        $this->spotifyExpiresIn = $expiresIn;

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
        $this->spotifyFirstName = $firstName;

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
        $this->spotifyLastName = $lastName;

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
        $this->spotifyNickname = $nickname;

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
        $this->spotifyProfilePicture = $profilePicture;

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
        $this->spotifyRealName = $realName;

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
        $this->spotifyRefreshToken = $refreshToken;

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
        $this->spotifyUsername = $username;

        return $this;
    }
}
