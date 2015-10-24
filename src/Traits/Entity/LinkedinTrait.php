<?php

namespace EmanueleMinotto\HwiOauthBridge\Traits\Entity;

use Doctrine\ORM\Mapping as ORM;

trait LinkedinTrait
{
    /**
     * Linkedin username.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $linkedinUsername;

    /**
     * Linkedin nickname.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $linkedinNickname;

    /**
     * Linkedin first name.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $linkedinFirstName;

    /**
     * Linkedin last name.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $linkedinLastName;

    /**
     * Linkedin real name.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $linkedinRealName;

    /**
     * Linkedin profilePicture.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $linkedinEmail;

    /**
     * Linkedin profile picture.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $linkedinProfilePicture;

    /**
     * Linkedin access token.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $linkedinAccessToken;

    /**
     * Linkedin refresh token.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $linkedinRefreshToken;

    /**
     * Linkedin expires in.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $linkedinExpiresIn;

    /**
     * Linkedin expires in.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $linkedinExpiresIn;

    /**
     * Linkedin data.
     *
     * @var array|null
     *
     * @ORM\Column(type = "json_array", nullable = true)
     */
    private $linkedinData;

    /**
     * Get Linkedin access token.
     *
     * @return string|null
     */
    public function getLinkedinAccessToken()
    {
        return $this->linkedinAccessToken;
    }

    /**
     * Gets the Linkedin data.
     *
     * @return array|null
     */
    public function getLinkedinData()
    {
        return $this->linkedinData;
    }

    /**
     * Get Linkedin email.
     *
     * @return string|null
     */
    public function getLinkedinEmail()
    {
        return $this->linkedinEmail;
    }

    /**
     * Get Linkedin expires in.
     *
     * @return string|null
     */
    public function getLinkedinExpiresIn()
    {
        return $this->linkedinExpiresIn;
    }

    /**
     * Get Linkedin first name.
     *
     * @return string|null
     */
    public function getLinkedinFirstName()
    {
        return $this->linkedinFirstName;
    }

    /**
     * Get Linkedin last name.
     *
     * @return string|null
     */
    public function getLinkedinLastName()
    {
        return $this->linkedinLastName;
    }

    /**
     * Get Linkedin nickname.
     *
     * @return string|null
     */
    public function getLinkedinNickname()
    {
        return $this->linkedinNickname;
    }

    /**
     * Get Linkedin profile picture.
     *
     * @return string|null
     */
    public function getLinkedinProfilePicture()
    {
        return $this->linkedinProfilePicture;
    }

    /**
     * Get Linkedin real name.
     *
     * @return string|null
     */
    public function getLinkedinRealName()
    {
        return $this->linkedinRealName;
    }

    /**
     * Get Linkedin refresh token.
     *
     * @return string|null
     */
    public function getLinkedinRefreshToken()
    {
        return $this->linkedinRefreshToken;
    }

    /**
     * Get Linkedin username.
     *
     * @return string|null
     */
    public function getLinkedinUsername()
    {
        return $this->linkedinUsername;
    }

    /**
     * Set Linkedin access token.
     *
     * @param string|null $accessToken
     *
     * @return self
     */
    public function setLinkedinAccessToken($accessToken)
    {
        $this->linkedinAccessToken = $accessToken;

        return $this;
    }

    /**
     * Sets the Linkedin data.
     *
     * @param array|null $linkedinData the linkedin data
     *
     * @return self
     */
    public function setLinkedinData(array $data = null)
    {
        $this->linkedinData = $data;

        return $this;
    }

    /**
     * Set Linkedin email.
     *
     * @param string|null $email
     *
     * @return self
     */
    public function setLinkedinEmail($email)
    {
        $this->linkedinEmail = $email;

        return $this;
    }

    /**
     * Set Linkedin expires in.
     *
     * @param string|null $expiresIn
     *
     * @return self
     */
    public function setLinkedinExpiresIn($expiresIn)
    {
        $this->linkedinExpiresIn = $expiresIn;

        return $this;
    }

    /**
     * Set Linkedin first name.
     *
     * @param string|null $firstName
     *
     * @return self
     */
    public function setLinkedinFirstName($firstName)
    {
        $this->linkedinFirstName = $firstName;

        return $this;
    }

    /**
     * Set Linkedin last name.
     *
     * @param string|null $lastName
     *
     * @return self
     */
    public function setLinkedinLastName($lastName)
    {
        $this->linkedinLastName = $lastName;

        return $this;
    }

    /**
     * Set Linkedin nickname.
     *
     * @param string|null $nickname
     *
     * @return self
     */
    public function setLinkedinNickname($nickname)
    {
        $this->linkedinNickname = $nickname;

        return $this;
    }

    /**
     * Set Linkedin profile picture.
     *
     * @param string|null $profilePicture
     *
     * @return self
     */
    public function setLinkedinProfilePicture($profilePicture)
    {
        $this->linkedinProfilePicture = $profilePicture;

        return $this;
    }

    /**
     * Set Linkedin real name.
     *
     * @param string|null $realName
     *
     * @return self
     */
    public function setLinkedinRealName($realName)
    {
        $this->linkedinRealName = $realName;

        return $this;
    }

    /**
     * Set Linkedin refresh token.
     *
     * @param string|null $refreshToken
     *
     * @return self
     */
    public function setLinkedinRefreshToken($refreshToken)
    {
        $this->linkedinRefreshToken = $refreshToken;

        return $this;
    }

    /**
     * Set Linkedin username.
     *
     * @param string|null $username
     *
     * @return self
     */
    public function setLinkedinUsername($username)
    {
        $this->linkedinUsername = $username;

        return $this;
    }
}
