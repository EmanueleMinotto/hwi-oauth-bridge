<?php

namespace EmanueleMinotto\HwiOauthBridge\Traits\Entity;

use Doctrine\ORM\Mapping as ORM;

trait EveOnlineTrait
{
    /**
     * EveOnline username.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $eveOnlineUsername;

    /**
     * EveOnline nickname.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $eveOnlineNickname;

    /**
     * EveOnline first name.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $eveOnlineFirstName;

    /**
     * EveOnline last name.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $eveOnlineLastName;

    /**
     * EveOnline real name.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $eveOnlineRealName;

    /**
     * EveOnline profilePicture.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $eveOnlineEmail;

    /**
     * EveOnline profile picture.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $eveOnlineProfilePicture;

    /**
     * EveOnline access token.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $eveOnlineAccessToken;

    /**
     * EveOnline refresh token.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $eveOnlineRefreshToken;

    /**
     * EveOnline expires in.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $eveOnlineExpiresIn;

    /**
     * EveOnline data.
     *
     * @var array|null
     *
     * @ORM\Column(type = "json_array", nullable = true)
     */
    private $eveOnlineData;

    /**
     * Get EveOnline access token.
     *
     * @return string|null
     */
    public function getEveOnlineAccessToken()
    {
        return $this->eveOnlineAccessToken;
    }

    /**
     * Gets the EveOnline data.
     *
     * @return array|null
     */
    public function getEveOnlineData()
    {
        return $this->eveOnlineData;
    }

    /**
     * Get EveOnline email.
     *
     * @return string|null
     */
    public function getEveOnlineEmail()
    {
        return $this->eveOnlineEmail;
    }

    /**
     * Get EveOnline expires in.
     *
     * @return string|null
     */
    public function getEveOnlineExpiresIn()
    {
        return $this->eveOnlineExpiresIn;
    }

    /**
     * Get EveOnline first name.
     *
     * @return string|null
     */
    public function getEveOnlineFirstName()
    {
        return $this->eveOnlineFirstName;
    }

    /**
     * Get EveOnline last name.
     *
     * @return string|null
     */
    public function getEveOnlineLastName()
    {
        return $this->eveOnlineLastName;
    }

    /**
     * Get EveOnline nickname.
     *
     * @return string|null
     */
    public function getEveOnlineNickname()
    {
        return $this->eveOnlineNickname;
    }

    /**
     * Get EveOnline profile picture.
     *
     * @return string|null
     */
    public function getEveOnlineProfilePicture()
    {
        return $this->eveOnlineProfilePicture;
    }

    /**
     * Get EveOnline real name.
     *
     * @return string|null
     */
    public function getEveOnlineRealName()
    {
        return $this->eveOnlineRealName;
    }

    /**
     * Get EveOnline refresh token.
     *
     * @return string|null
     */
    public function getEveOnlineRefreshToken()
    {
        return $this->eveOnlineRefreshToken;
    }

    /**
     * Get EveOnline username.
     *
     * @return string|null
     */
    public function getEveOnlineUsername()
    {
        return $this->eveOnlineUsername;
    }

    /**
     * Set EveOnline access token.
     *
     * @param string|null $accessToken
     *
     * @return self
     */
    public function setEveOnlineAccessToken($accessToken)
    {
        $this->eveOnlineAccessToken = $accessToken;

        return $this;
    }

    /**
     * Sets the EveOnline data.
     *
     * @param array|null $data
     *
     * @return self
     */
    public function setEveOnlineData(array $data = null)
    {
        $this->eveOnlineData = $data;

        return $this;
    }

    /**
     * Set EveOnline email.
     *
     * @param string|null $email
     *
     * @return self
     */
    public function setEveOnlineEmail($email)
    {
        $this->eveOnlineEmail = $email;

        return $this;
    }

    /**
     * Set EveOnline expires in.
     *
     * @param string|null $expiresIn
     *
     * @return self
     */
    public function setEveOnlineExpiresIn($expiresIn)
    {
        $this->eveOnlineExpiresIn = $expiresIn;

        return $this;
    }

    /**
     * Set EveOnline first name.
     *
     * @param string|null $firstName
     *
     * @return self
     */
    public function setEveOnlineFirstName($firstName)
    {
        $this->eveOnlineFirstName = $firstName;

        return $this;
    }

    /**
     * Set EveOnline last name.
     *
     * @param string|null $lastName
     *
     * @return self
     */
    public function setEveOnlineLastName($lastName)
    {
        $this->eveOnlineLastName = $lastName;

        return $this;
    }

    /**
     * Set EveOnline nickname.
     *
     * @param string|null $nickname
     *
     * @return self
     */
    public function setEveOnlineNickname($nickname)
    {
        $this->eveOnlineNickname = $nickname;

        return $this;
    }

    /**
     * Set EveOnline profile picture.
     *
     * @param string|null $profilePicture
     *
     * @return self
     */
    public function setEveOnlineProfilePicture($profilePicture)
    {
        $this->eveOnlineProfilePicture = $profilePicture;

        return $this;
    }

    /**
     * Set EveOnline real name.
     *
     * @param string|null $realName
     *
     * @return self
     */
    public function setEveOnlineRealName($realName)
    {
        $this->eveOnlineRealName = $realName;

        return $this;
    }

    /**
     * Set EveOnline refresh token.
     *
     * @param string|null $refreshToken
     *
     * @return self
     */
    public function setEveOnlineRefreshToken($refreshToken)
    {
        $this->eveOnlineRefreshToken = $refreshToken;

        return $this;
    }

    /**
     * Set EveOnline username.
     *
     * @param string|null $username
     *
     * @return self
     */
    public function setEveOnlineUsername($username)
    {
        $this->eveOnlineUsername = $username;

        return $this;
    }
}
