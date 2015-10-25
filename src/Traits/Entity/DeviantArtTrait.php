<?php

namespace EmanueleMinotto\HwiOauthBridge\Traits\Entity;

use Doctrine\ORM\Mapping as ORM;

trait DeviantArtTrait
{
    /**
     * DeviantArt username.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $deviantArtUsername;

    /**
     * DeviantArt nickname.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $deviantArtNickname;

    /**
     * DeviantArt first name.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $deviantArtFirstName;

    /**
     * DeviantArt last name.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $deviantArtLastName;

    /**
     * DeviantArt real name.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $deviantArtRealName;

    /**
     * DeviantArt profilePicture.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $deviantArtEmail;

    /**
     * DeviantArt profile picture.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $deviantArtProfilePicture;

    /**
     * DeviantArt access token.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $deviantArtAccessToken;

    /**
     * DeviantArt refresh token.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $deviantArtRefreshToken;

    /**
     * DeviantArt expires in.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $deviantArtExpiresIn;

    /**
     * DeviantArt data.
     *
     * @var array|null
     *
     * @ORM\Column(type = "json_array", nullable = true)
     */
    private $deviantArtData;

    /**
     * Get DeviantArt access token.
     *
     * @return string|null
     */
    public function getDeviantArtAccessToken()
    {
        return $this->deviantArtAccessToken;
    }

    /**
     * Gets the DeviantArt data.
     *
     * @return array|null
     */
    public function getDeviantArtData()
    {
        return $this->deviantArtData;
    }

    /**
     * Get DeviantArt email.
     *
     * @return string|null
     */
    public function getDeviantArtEmail()
    {
        return $this->deviantArtEmail;
    }

    /**
     * Get DeviantArt expires in.
     *
     * @return string|null
     */
    public function getDeviantArtExpiresIn()
    {
        return $this->deviantArtExpiresIn;
    }

    /**
     * Get DeviantArt first name.
     *
     * @return string|null
     */
    public function getDeviantArtFirstName()
    {
        return $this->deviantArtFirstName;
    }

    /**
     * Get DeviantArt last name.
     *
     * @return string|null
     */
    public function getDeviantArtLastName()
    {
        return $this->deviantArtLastName;
    }

    /**
     * Get DeviantArt nickname.
     *
     * @return string|null
     */
    public function getDeviantArtNickname()
    {
        return $this->deviantArtNickname;
    }

    /**
     * Get DeviantArt profile picture.
     *
     * @return string|null
     */
    public function getDeviantArtProfilePicture()
    {
        return $this->deviantArtProfilePicture;
    }

    /**
     * Get DeviantArt real name.
     *
     * @return string|null
     */
    public function getDeviantArtRealName()
    {
        return $this->deviantArtRealName;
    }

    /**
     * Get DeviantArt refresh token.
     *
     * @return string|null
     */
    public function getDeviantArtRefreshToken()
    {
        return $this->deviantArtRefreshToken;
    }

    /**
     * Get DeviantArt username.
     *
     * @return string|null
     */
    public function getDeviantArtUsername()
    {
        return $this->deviantArtUsername;
    }

    /**
     * Set DeviantArt access token.
     *
     * @param string|null $accessToken
     *
     * @return self
     */
    public function setDeviantArtAccessToken($accessToken)
    {
        $this->deviantArtAccessToken = $accessToken;

        return $this;
    }

    /**
     * Sets the DeviantArt data.
     *
     * @param array|null $data
     *
     * @return self
     */
    public function setDeviantArtData(array $data = null)
    {
        $this->deviantArtData = $data;

        return $this;
    }

    /**
     * Set DeviantArt email.
     *
     * @param string|null $email
     *
     * @return self
     */
    public function setDeviantArtEmail($email)
    {
        $this->deviantArtEmail = $email;

        return $this;
    }

    /**
     * Set DeviantArt expires in.
     *
     * @param string|null $expiresIn
     *
     * @return self
     */
    public function setDeviantArtExpiresIn($expiresIn)
    {
        $this->deviantArtExpiresIn = $expiresIn;

        return $this;
    }

    /**
     * Set DeviantArt first name.
     *
     * @param string|null $firstName
     *
     * @return self
     */
    public function setDeviantArtFirstName($firstName)
    {
        $this->deviantArtFirstName = $firstName;

        return $this;
    }

    /**
     * Set DeviantArt last name.
     *
     * @param string|null $lastName
     *
     * @return self
     */
    public function setDeviantArtLastName($lastName)
    {
        $this->deviantArtLastName = $lastName;

        return $this;
    }

    /**
     * Set DeviantArt nickname.
     *
     * @param string|null $nickname
     *
     * @return self
     */
    public function setDeviantArtNickname($nickname)
    {
        $this->deviantArtNickname = $nickname;

        return $this;
    }

    /**
     * Set DeviantArt profile picture.
     *
     * @param string|null $profilePicture
     *
     * @return self
     */
    public function setDeviantArtProfilePicture($profilePicture)
    {
        $this->deviantArtProfilePicture = $profilePicture;

        return $this;
    }

    /**
     * Set DeviantArt real name.
     *
     * @param string|null $realName
     *
     * @return self
     */
    public function setDeviantArtRealName($realName)
    {
        $this->deviantArtRealName = $realName;

        return $this;
    }

    /**
     * Set DeviantArt refresh token.
     *
     * @param string|null $refreshToken
     *
     * @return self
     */
    public function setDeviantArtRefreshToken($refreshToken)
    {
        $this->deviantArtRefreshToken = $refreshToken;

        return $this;
    }

    /**
     * Set DeviantArt username.
     *
     * @param string|null $username
     *
     * @return self
     */
    public function setDeviantArtUsername($username)
    {
        $this->deviantArtUsername = $username;

        return $this;
    }
}
