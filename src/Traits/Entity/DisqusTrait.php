<?php

namespace EmanueleMinotto\HwiOauthBridge\Traits\Entity;

use Doctrine\ORM\Mapping as ORM;

trait DisqusTrait
{
    /**
     * Disqus username.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $disqusUsername;

    /**
     * Disqus nickname.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $disqusNickname;

    /**
     * Disqus first name.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $disqusFirstName;

    /**
     * Disqus last name.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $disqusLastName;

    /**
     * Disqus real name.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $disqusRealName;

    /**
     * Disqus profilePicture.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $disqusEmail;

    /**
     * Disqus profile picture.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $disqusProfilePicture;

    /**
     * Disqus access token.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $disqusAccessToken;

    /**
     * Disqus refresh token.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $disqusRefreshToken;

    /**
     * Disqus expires in.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $disqusExpiresIn;

    /**
     * Disqus data.
     *
     * @var array|null
     *
     * @ORM\Column(type = "json_array", nullable = true)
     */
    private $disqusData;

    /**
     * Get Disqus access token.
     *
     * @return string|null
     */
    public function getDisqusAccessToken()
    {
        return $this->disqusAccessToken;
    }

    /**
     * Gets the Disqus data.
     *
     * @return array|null
     */
    public function getDisqusData()
    {
        return $this->disqusData;
    }

    /**
     * Get Disqus email.
     *
     * @return string|null
     */
    public function getDisqusEmail()
    {
        return $this->disqusEmail;
    }

    /**
     * Get Disqus expires in.
     *
     * @return string|null
     */
    public function getDisqusExpiresIn()
    {
        return $this->disqusExpiresIn;
    }

    /**
     * Get Disqus first name.
     *
     * @return string|null
     */
    public function getDisqusFirstName()
    {
        return $this->disqusFirstName;
    }

    /**
     * Get Disqus last name.
     *
     * @return string|null
     */
    public function getDisqusLastName()
    {
        return $this->disqusLastName;
    }

    /**
     * Get Disqus nickname.
     *
     * @return string|null
     */
    public function getDisqusNickname()
    {
        return $this->disqusNickname;
    }

    /**
     * Get Disqus profile picture.
     *
     * @return string|null
     */
    public function getDisqusProfilePicture()
    {
        return $this->disqusProfilePicture;
    }

    /**
     * Get Disqus real name.
     *
     * @return string|null
     */
    public function getDisqusRealName()
    {
        return $this->disqusRealName;
    }

    /**
     * Get Disqus refresh token.
     *
     * @return string|null
     */
    public function getDisqusRefreshToken()
    {
        return $this->disqusRefreshToken;
    }

    /**
     * Get Disqus username.
     *
     * @return string|null
     */
    public function getDisqusUsername()
    {
        return $this->disqusUsername;
    }

    /**
     * Set Disqus access token.
     *
     * @param string|null $accessToken
     *
     * @return self
     */
    public function setDisqusAccessToken($accessToken)
    {
        $this->disqusAccessToken = $accessToken;

        return $this;
    }

    /**
     * Sets the Disqus data.
     *
     * @param array|null $data the disqus data
     *
     * @return self
     */
    public function setDisqusData(array $data = null)
    {
        $this->disqusData = $data;

        return $this;
    }

    /**
     * Set Disqus email.
     *
     * @param string|null $email
     *
     * @return self
     */
    public function setDisqusEmail($email)
    {
        $this->disqusEmail = $email;

        return $this;
    }

    /**
     * Set Disqus expires in.
     *
     * @param string|null $expiresIn
     *
     * @return self
     */
    public function setDisqusExpiresIn($expiresIn)
    {
        $this->disqusExpiresIn = $expiresIn;

        return $this;
    }

    /**
     * Set Disqus first name.
     *
     * @param string|null $firstName
     *
     * @return self
     */
    public function setDisqusFirstName($firstName)
    {
        $this->disqusFirstName = $firstName;

        return $this;
    }

    /**
     * Set Disqus last name.
     *
     * @param string|null $lastName
     *
     * @return self
     */
    public function setDisqusLastName($lastName)
    {
        $this->disqusLastName = $lastName;

        return $this;
    }

    /**
     * Set Disqus nickname.
     *
     * @param string|null $nickname
     *
     * @return self
     */
    public function setDisqusNickname($nickname)
    {
        $this->disqusNickname = $nickname;

        return $this;
    }

    /**
     * Set Disqus profile picture.
     *
     * @param string|null $profilePicture
     *
     * @return self
     */
    public function setDisqusProfilePicture($profilePicture)
    {
        $this->disqusProfilePicture = $profilePicture;

        return $this;
    }

    /**
     * Set Disqus real name.
     *
     * @param string|null $realName
     *
     * @return self
     */
    public function setDisqusRealName($realName)
    {
        $this->disqusRealName = $realName;

        return $this;
    }

    /**
     * Set Disqus refresh token.
     *
     * @param string|null $refreshToken
     *
     * @return self
     */
    public function setDisqusRefreshToken($refreshToken)
    {
        $this->disqusRefreshToken = $refreshToken;

        return $this;
    }

    /**
     * Set Disqus username.
     *
     * @param string|null $username
     *
     * @return self
     */
    public function setDisqusUsername($username)
    {
        $this->disqusUsername = $username;

        return $this;
    }
}
