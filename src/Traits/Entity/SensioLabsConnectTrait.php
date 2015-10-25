<?php

namespace EmanueleMinotto\HwiOauthBridge\Traits\Entity;

use Doctrine\ORM\Mapping as ORM;

trait SensioLabsConnectTrait
{
    /**
     * SensioLabsConnect username.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $sensioLabsConnectUsername;

    /**
     * SensioLabsConnect nickname.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $sensioLabsConnectNickname;

    /**
     * SensioLabsConnect first name.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $sensioLabsConnectFirstName;

    /**
     * SensioLabsConnect last name.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $sensioLabsConnectLastName;

    /**
     * SensioLabsConnect real name.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $sensioLabsConnectRealName;

    /**
     * SensioLabsConnect profilePicture.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $sensioLabsConnectEmail;

    /**
     * SensioLabsConnect profile picture.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $sensioLabsConnectProfilePicture;

    /**
     * SensioLabsConnect access token.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $sensioLabsConnectAccessToken;

    /**
     * SensioLabsConnect refresh token.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $sensioLabsConnectRefreshToken;

    /**
     * SensioLabsConnect expires in.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $sensioLabsConnectExpiresIn;

    /**
     * SensioLabsConnect data.
     *
     * @var array|null
     *
     * @ORM\Column(type = "json_array", nullable = true)
     */
    private $sensioLabsConnectData;

    /**
     * Get SensioLabsConnect access token.
     *
     * @return string|null
     */
    public function getSensioLabsConnectAccessToken()
    {
        return $this->sensioLabsConnectAccessToken;
    }

    /**
     * Gets the SensioLabsConnect data.
     *
     * @return array|null
     */
    public function getSensioLabsConnectData()
    {
        return $this->sensioLabsConnectData;
    }

    /**
     * Get SensioLabsConnect email.
     *
     * @return string|null
     */
    public function getSensioLabsConnectEmail()
    {
        return $this->sensioLabsConnectEmail;
    }

    /**
     * Get SensioLabsConnect expires in.
     *
     * @return string|null
     */
    public function getSensioLabsConnectExpiresIn()
    {
        return $this->sensioLabsConnectExpiresIn;
    }

    /**
     * Get SensioLabsConnect first name.
     *
     * @return string|null
     */
    public function getSensioLabsConnectFirstName()
    {
        return $this->sensioLabsConnectFirstName;
    }

    /**
     * Get SensioLabsConnect last name.
     *
     * @return string|null
     */
    public function getSensioLabsConnectLastName()
    {
        return $this->sensioLabsConnectLastName;
    }

    /**
     * Get SensioLabsConnect nickname.
     *
     * @return string|null
     */
    public function getSensioLabsConnectNickname()
    {
        return $this->sensioLabsConnectNickname;
    }

    /**
     * Get SensioLabsConnect profile picture.
     *
     * @return string|null
     */
    public function getSensioLabsConnectProfilePicture()
    {
        return $this->sensioLabsConnectProfilePicture;
    }

    /**
     * Get SensioLabsConnect real name.
     *
     * @return string|null
     */
    public function getSensioLabsConnectRealName()
    {
        return $this->sensioLabsConnectRealName;
    }

    /**
     * Get SensioLabsConnect refresh token.
     *
     * @return string|null
     */
    public function getSensioLabsConnectRefreshToken()
    {
        return $this->sensioLabsConnectRefreshToken;
    }

    /**
     * Get SensioLabsConnect username.
     *
     * @return string|null
     */
    public function getSensioLabsConnectUsername()
    {
        return $this->sensioLabsConnectUsername;
    }

    /**
     * Set SensioLabsConnect access token.
     *
     * @param string|null $accessToken
     *
     * @return self
     */
    public function setSensioLabsConnectAccessToken($accessToken)
    {
        $this->sensioLabsConnectAccessToken = $accessToken;

        return $this;
    }

    /**
     * Sets the SensioLabsConnect data.
     *
     * @param array|null $data
     *
     * @return self
     */
    public function setSensioLabsConnectData(array $data = null)
    {
        $this->sensioLabsConnectData = $data;

        return $this;
    }

    /**
     * Set SensioLabsConnect email.
     *
     * @param string|null $email
     *
     * @return self
     */
    public function setSensioLabsConnectEmail($email)
    {
        $this->sensioLabsConnectEmail = $email;

        return $this;
    }

    /**
     * Set SensioLabsConnect expires in.
     *
     * @param string|null $expiresIn
     *
     * @return self
     */
    public function setSensioLabsConnectExpiresIn($expiresIn)
    {
        $this->sensioLabsConnectExpiresIn = $expiresIn;

        return $this;
    }

    /**
     * Set SensioLabsConnect first name.
     *
     * @param string|null $firstName
     *
     * @return self
     */
    public function setSensioLabsConnectFirstName($firstName)
    {
        $this->sensioLabsConnectFirstName = $firstName;

        return $this;
    }

    /**
     * Set SensioLabsConnect last name.
     *
     * @param string|null $lastName
     *
     * @return self
     */
    public function setSensioLabsConnectLastName($lastName)
    {
        $this->sensioLabsConnectLastName = $lastName;

        return $this;
    }

    /**
     * Set SensioLabsConnect nickname.
     *
     * @param string|null $nickname
     *
     * @return self
     */
    public function setSensioLabsConnectNickname($nickname)
    {
        $this->sensioLabsConnectNickname = $nickname;

        return $this;
    }

    /**
     * Set SensioLabsConnect profile picture.
     *
     * @param string|null $profilePicture
     *
     * @return self
     */
    public function setSensioLabsConnectProfilePicture($profilePicture)
    {
        $this->sensioLabsConnectProfilePicture = $profilePicture;

        return $this;
    }

    /**
     * Set SensioLabsConnect real name.
     *
     * @param string|null $realName
     *
     * @return self
     */
    public function setSensioLabsConnectRealName($realName)
    {
        $this->sensioLabsConnectRealName = $realName;

        return $this;
    }

    /**
     * Set SensioLabsConnect refresh token.
     *
     * @param string|null $refreshToken
     *
     * @return self
     */
    public function setSensioLabsConnectRefreshToken($refreshToken)
    {
        $this->sensioLabsConnectRefreshToken = $refreshToken;

        return $this;
    }

    /**
     * Set SensioLabsConnect username.
     *
     * @param string|null $username
     *
     * @return self
     */
    public function setSensioLabsConnectUsername($username)
    {
        $this->sensioLabsConnectUsername = $username;

        return $this;
    }
}
