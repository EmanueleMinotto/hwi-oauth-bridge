<?php

namespace EmanueleMinotto\HwiOauthBridge\Traits\Entity;

use Doctrine\ORM\Mapping as ORM;

trait FiwareTrait
{
    /**
     * Fiware username.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $fiwareUsername;

    /**
     * Fiware nickname.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $fiwareNickname;

    /**
     * Fiware first name.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $fiwareFirstName;

    /**
     * Fiware last name.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $fiwareLastName;

    /**
     * Fiware real name.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $fiwareRealName;

    /**
     * Fiware profilePicture.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $fiwareEmail;

    /**
     * Fiware profile picture.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $fiwareProfilePicture;

    /**
     * Fiware access token.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $fiwareAccessToken;

    /**
     * Fiware refresh token.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $fiwareRefreshToken;

    /**
     * Fiware expires in.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $fiwareExpiresIn;

    /**
     * Fiware expires in.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $fiwareExpiresIn;

    /**
     * Fiware data.
     *
     * @var array|null
     *
     * @ORM\Column(type = "json_array", nullable = true)
     */
    private $fiwareData;

    /**
     * Get Fiware access token.
     *
     * @return string|null
     */
    public function getFiwareAccessToken()
    {
        return $this->fiwareAccessToken;
    }

    /**
     * Gets the Fiware data.
     *
     * @return array|null
     */
    public function getFiwareData()
    {
        return $this->fiwareData;
    }

    /**
     * Get Fiware email.
     *
     * @return string|null
     */
    public function getFiwareEmail()
    {
        return $this->fiwareEmail;
    }

    /**
     * Get Fiware expires in.
     *
     * @return string|null
     */
    public function getFiwareExpiresIn()
    {
        return $this->fiwareExpiresIn;
    }

    /**
     * Get Fiware first name.
     *
     * @return string|null
     */
    public function getFiwareFirstName()
    {
        return $this->fiwareFirstName;
    }

    /**
     * Get Fiware last name.
     *
     * @return string|null
     */
    public function getFiwareLastName()
    {
        return $this->fiwareLastName;
    }

    /**
     * Get Fiware nickname.
     *
     * @return string|null
     */
    public function getFiwareNickname()
    {
        return $this->fiwareNickname;
    }

    /**
     * Get Fiware profile picture.
     *
     * @return string|null
     */
    public function getFiwareProfilePicture()
    {
        return $this->fiwareProfilePicture;
    }

    /**
     * Get Fiware real name.
     *
     * @return string|null
     */
    public function getFiwareRealName()
    {
        return $this->fiwareRealName;
    }

    /**
     * Get Fiware refresh token.
     *
     * @return string|null
     */
    public function getFiwareRefreshToken()
    {
        return $this->fiwareRefreshToken;
    }

    /**
     * Get Fiware username.
     *
     * @return string|null
     */
    public function getFiwareUsername()
    {
        return $this->fiwareUsername;
    }

    /**
     * Set Fiware access token.
     *
     * @param string|null $accessToken
     *
     * @return self
     */
    public function setFiwareAccessToken($accessToken)
    {
        $this->fiwareAccessToken = $fiwareAccessToken;

        return $this;
    }

    /**
     * Sets the Fiware data.
     *
     * @param array|null $fiwareData the fiware data
     *
     * @return self
     */
    public function setFiwareData(array $fiwareData = null)
    {
        $this->fiwareData = $fiwareData;

        return $this;
    }

    /**
     * Set Fiware email.
     *
     * @param string|null $email
     *
     * @return self
     */
    public function setFiwareEmail($email)
    {
        $this->fiwareEmail = $fiwareEmail;

        return $this;
    }

    /**
     * Set Fiware expires in.
     *
     * @param string|null $expiresIn
     *
     * @return self
     */
    public function setFiwareExpiresIn($expiresIn)
    {
        $this->fiwareExpiresIn = $fiwareExpiresIn;

        return $this;
    }

    /**
     * Set Fiware first name.
     *
     * @param string|null $firstName
     *
     * @return self
     */
    public function setFiwareFirstName($firstName)
    {
        $this->fiwareFirstName = $fiwareFirstName;

        return $this;
    }

    /**
     * Set Fiware last name.
     *
     * @param string|null $lastName
     *
     * @return self
     */
    public function setFiwareLastName($lastName)
    {
        $this->fiwareLastName = $fiwareLastName;

        return $this;
    }

    /**
     * Set Fiware nickname.
     *
     * @param string|null $nickname
     *
     * @return self
     */
    public function setFiwareNickname($nickname)
    {
        $this->fiwareNickname = $fiwareNickname;

        return $this;
    }

    /**
     * Set Fiware profile picture.
     *
     * @param string|null $profilePicture
     *
     * @return self
     */
    public function setFiwareProfilePicture($profilePicture)
    {
        $this->fiwareProfilePicture = $fiwareProfilePicture;

        return $this;
    }

    /**
     * Set Fiware real name.
     *
     * @param string|null $realName
     *
     * @return self
     */
    public function setFiwareRealName($realName)
    {
        $this->fiwareRealName = $fiwareRealName;

        return $this;
    }

    /**
     * Set Fiware refresh token.
     *
     * @param string|null $refreshToken
     *
     * @return self
     */
    public function setFiwareRefreshToken($refreshToken)
    {
        $this->fiwareRefreshToken = $fiwareRefreshToken;

        return $this;
    }

    /**
     * Set Fiware username.
     *
     * @param string|null $username
     *
     * @return self
     */
    public function setFiwareUsername($username)
    {
        $this->fiwareUsername = $fiwareUsername;

        return $this;
    }
}
