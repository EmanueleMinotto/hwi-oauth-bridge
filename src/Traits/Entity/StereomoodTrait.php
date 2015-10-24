<?php

namespace EmanueleMinotto\HwiOauthBridge\Traits\Entity;

use Doctrine\ORM\Mapping as ORM;

trait StereomoodTrait
{
    /**
     * Stereomood username.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $stereomoodUsername;

    /**
     * Stereomood nickname.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $stereomoodNickname;

    /**
     * Stereomood first name.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $stereomoodFirstName;

    /**
     * Stereomood last name.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $stereomoodLastName;

    /**
     * Stereomood real name.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $stereomoodRealName;

    /**
     * Stereomood profilePicture.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $stereomoodEmail;

    /**
     * Stereomood profile picture.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $stereomoodProfilePicture;

    /**
     * Stereomood access token.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $stereomoodAccessToken;

    /**
     * Stereomood refresh token.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $stereomoodRefreshToken;

    /**
     * Stereomood expires in.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $stereomoodExpiresIn;

    /**
     * Stereomood data.
     *
     * @var array|null
     *
     * @ORM\Column(type = "json_array", nullable = true)
     */
    private $stereomoodData;

    /**
     * Get Stereomood access token.
     *
     * @return string|null
     */
    public function getStereomoodAccessToken()
    {
        return $this->stereomoodAccessToken;
    }

    /**
     * Gets the Stereomood data.
     *
     * @return array|null
     */
    public function getStereomoodData()
    {
        return $this->stereomoodData;
    }

    /**
     * Get Stereomood email.
     *
     * @return string|null
     */
    public function getStereomoodEmail()
    {
        return $this->stereomoodEmail;
    }

    /**
     * Get Stereomood expires in.
     *
     * @return string|null
     */
    public function getStereomoodExpiresIn()
    {
        return $this->stereomoodExpiresIn;
    }

    /**
     * Get Stereomood first name.
     *
     * @return string|null
     */
    public function getStereomoodFirstName()
    {
        return $this->stereomoodFirstName;
    }

    /**
     * Get Stereomood last name.
     *
     * @return string|null
     */
    public function getStereomoodLastName()
    {
        return $this->stereomoodLastName;
    }

    /**
     * Get Stereomood nickname.
     *
     * @return string|null
     */
    public function getStereomoodNickname()
    {
        return $this->stereomoodNickname;
    }

    /**
     * Get Stereomood profile picture.
     *
     * @return string|null
     */
    public function getStereomoodProfilePicture()
    {
        return $this->stereomoodProfilePicture;
    }

    /**
     * Get Stereomood real name.
     *
     * @return string|null
     */
    public function getStereomoodRealName()
    {
        return $this->stereomoodRealName;
    }

    /**
     * Get Stereomood refresh token.
     *
     * @return string|null
     */
    public function getStereomoodRefreshToken()
    {
        return $this->stereomoodRefreshToken;
    }

    /**
     * Get Stereomood username.
     *
     * @return string|null
     */
    public function getStereomoodUsername()
    {
        return $this->stereomoodUsername;
    }

    /**
     * Set Stereomood access token.
     *
     * @param string|null $accessToken
     *
     * @return self
     */
    public function setStereomoodAccessToken($accessToken)
    {
        $this->stereomoodAccessToken = $accessToken;

        return $this;
    }

    /**
     * Sets the Stereomood data.
     *
     * @param array|null $data the stereomood data
     *
     * @return self
     */
    public function setStereomoodData(array $data = null)
    {
        $this->stereomoodData = $data;

        return $this;
    }

    /**
     * Set Stereomood email.
     *
     * @param string|null $email
     *
     * @return self
     */
    public function setStereomoodEmail($email)
    {
        $this->stereomoodEmail = $email;

        return $this;
    }

    /**
     * Set Stereomood expires in.
     *
     * @param string|null $expiresIn
     *
     * @return self
     */
    public function setStereomoodExpiresIn($expiresIn)
    {
        $this->stereomoodExpiresIn = $expiresIn;

        return $this;
    }

    /**
     * Set Stereomood first name.
     *
     * @param string|null $firstName
     *
     * @return self
     */
    public function setStereomoodFirstName($firstName)
    {
        $this->stereomoodFirstName = $firstName;

        return $this;
    }

    /**
     * Set Stereomood last name.
     *
     * @param string|null $lastName
     *
     * @return self
     */
    public function setStereomoodLastName($lastName)
    {
        $this->stereomoodLastName = $lastName;

        return $this;
    }

    /**
     * Set Stereomood nickname.
     *
     * @param string|null $nickname
     *
     * @return self
     */
    public function setStereomoodNickname($nickname)
    {
        $this->stereomoodNickname = $nickname;

        return $this;
    }

    /**
     * Set Stereomood profile picture.
     *
     * @param string|null $profilePicture
     *
     * @return self
     */
    public function setStereomoodProfilePicture($profilePicture)
    {
        $this->stereomoodProfilePicture = $profilePicture;

        return $this;
    }

    /**
     * Set Stereomood real name.
     *
     * @param string|null $realName
     *
     * @return self
     */
    public function setStereomoodRealName($realName)
    {
        $this->stereomoodRealName = $realName;

        return $this;
    }

    /**
     * Set Stereomood refresh token.
     *
     * @param string|null $refreshToken
     *
     * @return self
     */
    public function setStereomoodRefreshToken($refreshToken)
    {
        $this->stereomoodRefreshToken = $refreshToken;

        return $this;
    }

    /**
     * Set Stereomood username.
     *
     * @param string|null $username
     *
     * @return self
     */
    public function setStereomoodUsername($username)
    {
        $this->stereomoodUsername = $username;

        return $this;
    }
}
