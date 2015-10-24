<?php

namespace EmanueleMinotto\HwiOauthBridge\Traits\Entity;

use Doctrine\ORM\Mapping as ORM;

trait GoogleTrait
{
    /**
     * Google username.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $googleUsername;

    /**
     * Google nickname.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $googleNickname;

    /**
     * Google first name.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $googleFirstName;

    /**
     * Google last name.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $googleLastName;

    /**
     * Google real name.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $googleRealName;

    /**
     * Google profilePicture.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $googleEmail;

    /**
     * Google profile picture.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $googleProfilePicture;

    /**
     * Google access token.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $googleAccessToken;

    /**
     * Google refresh token.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $googleRefreshToken;

    /**
     * Google expires in.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $googleExpiresIn;

    /**
     * Google expires in.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $googleExpiresIn;

    /**
     * Google data.
     *
     * @var array|null
     *
     * @ORM\Column(type = "json_array", nullable = true)
     */
    private $googleData;

    /**
     * Get Google access token.
     *
     * @return string|null
     */
    public function getGoogleAccessToken()
    {
        return $this->googleAccessToken;
    }

    /**
     * Gets the Google data.
     *
     * @return array|null
     */
    public function getGoogleData()
    {
        return $this->googleData;
    }

    /**
     * Get Google email.
     *
     * @return string|null
     */
    public function getGoogleEmail()
    {
        return $this->googleEmail;
    }

    /**
     * Get Google expires in.
     *
     * @return string|null
     */
    public function getGoogleExpiresIn()
    {
        return $this->googleExpiresIn;
    }

    /**
     * Get Google first name.
     *
     * @return string|null
     */
    public function getGoogleFirstName()
    {
        return $this->googleFirstName;
    }

    /**
     * Get Google last name.
     *
     * @return string|null
     */
    public function getGoogleLastName()
    {
        return $this->googleLastName;
    }

    /**
     * Get Google nickname.
     *
     * @return string|null
     */
    public function getGoogleNickname()
    {
        return $this->googleNickname;
    }

    /**
     * Get Google profile picture.
     *
     * @return string|null
     */
    public function getGoogleProfilePicture()
    {
        return $this->googleProfilePicture;
    }

    /**
     * Get Google real name.
     *
     * @return string|null
     */
    public function getGoogleRealName()
    {
        return $this->googleRealName;
    }

    /**
     * Get Google refresh token.
     *
     * @return string|null
     */
    public function getGoogleRefreshToken()
    {
        return $this->googleRefreshToken;
    }

    /**
     * Get Google username.
     *
     * @return string|null
     */
    public function getGoogleUsername()
    {
        return $this->googleUsername;
    }

    /**
     * Set Google access token.
     *
     * @param string|null $accessToken
     *
     * @return self
     */
    public function setGoogleAccessToken($accessToken)
    {
        $this->googleAccessToken = $accessToken;

        return $this;
    }

    /**
     * Sets the Google data.
     *
     * @param array|null $googleData the google data
     *
     * @return self
     */
    public function setGoogleData(array $data = null)
    {
        $this->googleData = $data;

        return $this;
    }

    /**
     * Set Google email.
     *
     * @param string|null $email
     *
     * @return self
     */
    public function setGoogleEmail($email)
    {
        $this->googleEmail = $email;

        return $this;
    }

    /**
     * Set Google expires in.
     *
     * @param string|null $expiresIn
     *
     * @return self
     */
    public function setGoogleExpiresIn($expiresIn)
    {
        $this->googleExpiresIn = $expiresIn;

        return $this;
    }

    /**
     * Set Google first name.
     *
     * @param string|null $firstName
     *
     * @return self
     */
    public function setGoogleFirstName($firstName)
    {
        $this->googleFirstName = $firstName;

        return $this;
    }

    /**
     * Set Google last name.
     *
     * @param string|null $lastName
     *
     * @return self
     */
    public function setGoogleLastName($lastName)
    {
        $this->googleLastName = $lastName;

        return $this;
    }

    /**
     * Set Google nickname.
     *
     * @param string|null $nickname
     *
     * @return self
     */
    public function setGoogleNickname($nickname)
    {
        $this->googleNickname = $nickname;

        return $this;
    }

    /**
     * Set Google profile picture.
     *
     * @param string|null $profilePicture
     *
     * @return self
     */
    public function setGoogleProfilePicture($profilePicture)
    {
        $this->googleProfilePicture = $profilePicture;

        return $this;
    }

    /**
     * Set Google real name.
     *
     * @param string|null $realName
     *
     * @return self
     */
    public function setGoogleRealName($realName)
    {
        $this->googleRealName = $realName;

        return $this;
    }

    /**
     * Set Google refresh token.
     *
     * @param string|null $refreshToken
     *
     * @return self
     */
    public function setGoogleRefreshToken($refreshToken)
    {
        $this->googleRefreshToken = $refreshToken;

        return $this;
    }

    /**
     * Set Google username.
     *
     * @param string|null $username
     *
     * @return self
     */
    public function setGoogleUsername($username)
    {
        $this->googleUsername = $username;

        return $this;
    }
}
