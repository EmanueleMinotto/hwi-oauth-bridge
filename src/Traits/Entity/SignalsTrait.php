<?php

namespace EmanueleMinotto\HwiOauthBridge\Traits\Entity;

use Doctrine\ORM\Mapping as ORM;

trait SignalsTrait
{
    /**
     * Signals username.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $signalsUsername;

    /**
     * Signals nickname.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $signalsNickname;

    /**
     * Signals first name.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $signalsFirstName;

    /**
     * Signals last name.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $signalsLastName;

    /**
     * Signals real name.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $signalsRealName;

    /**
     * Signals profilePicture.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $signalsEmail;

    /**
     * Signals profile picture.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $signalsProfilePicture;

    /**
     * Signals access token.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $signalsAccessToken;

    /**
     * Signals refresh token.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $signalsRefreshToken;

    /**
     * Signals expires in.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $signalsExpiresIn;

    /**
     * Signals data.
     *
     * @var array|null
     *
     * @ORM\Column(type = "json_array", nullable = true)
     */
    private $signalsData;

    /**
     * Get Signals access token.
     *
     * @return string|null
     */
    public function getSignalsAccessToken()
    {
        return $this->signalsAccessToken;
    }

    /**
     * Gets the Signals data.
     *
     * @return array|null
     */
    public function getSignalsData()
    {
        return $this->signalsData;
    }

    /**
     * Get Signals email.
     *
     * @return string|null
     */
    public function getSignalsEmail()
    {
        return $this->signalsEmail;
    }

    /**
     * Get Signals expires in.
     *
     * @return string|null
     */
    public function getSignalsExpiresIn()
    {
        return $this->signalsExpiresIn;
    }

    /**
     * Get Signals first name.
     *
     * @return string|null
     */
    public function getSignalsFirstName()
    {
        return $this->signalsFirstName;
    }

    /**
     * Get Signals last name.
     *
     * @return string|null
     */
    public function getSignalsLastName()
    {
        return $this->signalsLastName;
    }

    /**
     * Get Signals nickname.
     *
     * @return string|null
     */
    public function getSignalsNickname()
    {
        return $this->signalsNickname;
    }

    /**
     * Get Signals profile picture.
     *
     * @return string|null
     */
    public function getSignalsProfilePicture()
    {
        return $this->signalsProfilePicture;
    }

    /**
     * Get Signals real name.
     *
     * @return string|null
     */
    public function getSignalsRealName()
    {
        return $this->signalsRealName;
    }

    /**
     * Get Signals refresh token.
     *
     * @return string|null
     */
    public function getSignalsRefreshToken()
    {
        return $this->signalsRefreshToken;
    }

    /**
     * Get Signals username.
     *
     * @return string|null
     */
    public function getSignalsUsername()
    {
        return $this->signalsUsername;
    }

    /**
     * Set Signals access token.
     *
     * @param string|null $accessToken
     *
     * @return self
     */
    public function setSignalsAccessToken($accessToken)
    {
        $this->signalsAccessToken = $accessToken;

        return $this;
    }

    /**
     * Sets the Signals data.
     *
     * @param array|null $data the signals data
     *
     * @return self
     */
    public function setSignalsData(array $data = null)
    {
        $this->signalsData = $data;

        return $this;
    }

    /**
     * Set Signals email.
     *
     * @param string|null $email
     *
     * @return self
     */
    public function setSignalsEmail($email)
    {
        $this->signalsEmail = $email;

        return $this;
    }

    /**
     * Set Signals expires in.
     *
     * @param string|null $expiresIn
     *
     * @return self
     */
    public function setSignalsExpiresIn($expiresIn)
    {
        $this->signalsExpiresIn = $expiresIn;

        return $this;
    }

    /**
     * Set Signals first name.
     *
     * @param string|null $firstName
     *
     * @return self
     */
    public function setSignalsFirstName($firstName)
    {
        $this->signalsFirstName = $firstName;

        return $this;
    }

    /**
     * Set Signals last name.
     *
     * @param string|null $lastName
     *
     * @return self
     */
    public function setSignalsLastName($lastName)
    {
        $this->signalsLastName = $lastName;

        return $this;
    }

    /**
     * Set Signals nickname.
     *
     * @param string|null $nickname
     *
     * @return self
     */
    public function setSignalsNickname($nickname)
    {
        $this->signalsNickname = $nickname;

        return $this;
    }

    /**
     * Set Signals profile picture.
     *
     * @param string|null $profilePicture
     *
     * @return self
     */
    public function setSignalsProfilePicture($profilePicture)
    {
        $this->signalsProfilePicture = $profilePicture;

        return $this;
    }

    /**
     * Set Signals real name.
     *
     * @param string|null $realName
     *
     * @return self
     */
    public function setSignalsRealName($realName)
    {
        $this->signalsRealName = $realName;

        return $this;
    }

    /**
     * Set Signals refresh token.
     *
     * @param string|null $refreshToken
     *
     * @return self
     */
    public function setSignalsRefreshToken($refreshToken)
    {
        $this->signalsRefreshToken = $refreshToken;

        return $this;
    }

    /**
     * Set Signals username.
     *
     * @param string|null $username
     *
     * @return self
     */
    public function setSignalsUsername($username)
    {
        $this->signalsUsername = $username;

        return $this;
    }
}
