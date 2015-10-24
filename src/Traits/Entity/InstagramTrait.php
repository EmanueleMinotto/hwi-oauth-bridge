<?php

namespace EmanueleMinotto\HwiOauthBridge\Traits\Entity;

use Doctrine\ORM\Mapping as ORM;

trait InstagramTrait
{
    /**
     * Instagram username.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $instagramUsername;

    /**
     * Instagram nickname.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $instagramNickname;

    /**
     * Instagram first name.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $instagramFirstName;

    /**
     * Instagram last name.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $instagramLastName;

    /**
     * Instagram real name.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $instagramRealName;

    /**
     * Instagram profilePicture.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $instagramEmail;

    /**
     * Instagram profile picture.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $instagramProfilePicture;

    /**
     * Instagram access token.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $instagramAccessToken;

    /**
     * Instagram refresh token.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $instagramRefreshToken;

    /**
     * Instagram expires in.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $instagramExpiresIn;

    /**
     * Instagram expires in.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $instagramExpiresIn;

    /**
     * Instagram data.
     *
     * @var array|null
     *
     * @ORM\Column(type = "json_array", nullable = true)
     */
    private $instagramData;

    /**
     * Get Instagram access token.
     *
     * @return string|null
     */
    public function getInstagramAccessToken()
    {
        return $this->instagramAccessToken;
    }

    /**
     * Gets the Instagram data.
     *
     * @return array|null
     */
    public function getInstagramData()
    {
        return $this->instagramData;
    }

    /**
     * Get Instagram email.
     *
     * @return string|null
     */
    public function getInstagramEmail()
    {
        return $this->instagramEmail;
    }

    /**
     * Get Instagram expires in.
     *
     * @return string|null
     */
    public function getInstagramExpiresIn()
    {
        return $this->instagramExpiresIn;
    }

    /**
     * Get Instagram first name.
     *
     * @return string|null
     */
    public function getInstagramFirstName()
    {
        return $this->instagramFirstName;
    }

    /**
     * Get Instagram last name.
     *
     * @return string|null
     */
    public function getInstagramLastName()
    {
        return $this->instagramLastName;
    }

    /**
     * Get Instagram nickname.
     *
     * @return string|null
     */
    public function getInstagramNickname()
    {
        return $this->instagramNickname;
    }

    /**
     * Get Instagram profile picture.
     *
     * @return string|null
     */
    public function getInstagramProfilePicture()
    {
        return $this->instagramProfilePicture;
    }

    /**
     * Get Instagram real name.
     *
     * @return string|null
     */
    public function getInstagramRealName()
    {
        return $this->instagramRealName;
    }

    /**
     * Get Instagram refresh token.
     *
     * @return string|null
     */
    public function getInstagramRefreshToken()
    {
        return $this->instagramRefreshToken;
    }

    /**
     * Get Instagram username.
     *
     * @return string|null
     */
    public function getInstagramUsername()
    {
        return $this->instagramUsername;
    }

    /**
     * Set Instagram access token.
     *
     * @param string|null $accessToken
     *
     * @return self
     */
    public function setInstagramAccessToken($accessToken)
    {
        $this->instagramAccessToken = $instagramAccessToken;

        return $this;
    }

    /**
     * Sets the Instagram data.
     *
     * @param array|null $instagramData the instagram data
     *
     * @return self
     */
    public function setInstagramData(array $instagramData = null)
    {
        $this->instagramData = $instagramData;

        return $this;
    }

    /**
     * Set Instagram email.
     *
     * @param string|null $email
     *
     * @return self
     */
    public function setInstagramEmail($email)
    {
        $this->instagramEmail = $instagramEmail;

        return $this;
    }

    /**
     * Set Instagram expires in.
     *
     * @param string|null $expiresIn
     *
     * @return self
     */
    public function setInstagramExpiresIn($expiresIn)
    {
        $this->instagramExpiresIn = $instagramExpiresIn;

        return $this;
    }

    /**
     * Set Instagram first name.
     *
     * @param string|null $firstName
     *
     * @return self
     */
    public function setInstagramFirstName($firstName)
    {
        $this->instagramFirstName = $instagramFirstName;

        return $this;
    }

    /**
     * Set Instagram last name.
     *
     * @param string|null $lastName
     *
     * @return self
     */
    public function setInstagramLastName($lastName)
    {
        $this->instagramLastName = $instagramLastName;

        return $this;
    }

    /**
     * Set Instagram nickname.
     *
     * @param string|null $nickname
     *
     * @return self
     */
    public function setInstagramNickname($nickname)
    {
        $this->instagramNickname = $instagramNickname;

        return $this;
    }

    /**
     * Set Instagram profile picture.
     *
     * @param string|null $profilePicture
     *
     * @return self
     */
    public function setInstagramProfilePicture($profilePicture)
    {
        $this->instagramProfilePicture = $instagramProfilePicture;

        return $this;
    }

    /**
     * Set Instagram real name.
     *
     * @param string|null $realName
     *
     * @return self
     */
    public function setInstagramRealName($realName)
    {
        $this->instagramRealName = $instagramRealName;

        return $this;
    }

    /**
     * Set Instagram refresh token.
     *
     * @param string|null $refreshToken
     *
     * @return self
     */
    public function setInstagramRefreshToken($refreshToken)
    {
        $this->instagramRefreshToken = $instagramRefreshToken;

        return $this;
    }

    /**
     * Set Instagram username.
     *
     * @param string|null $username
     *
     * @return self
     */
    public function setInstagramUsername($username)
    {
        $this->instagramUsername = $instagramUsername;

        return $this;
    }
}
