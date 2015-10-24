<?php

namespace EmanueleMinotto\HwiOauthBridge\Traits\Entity;

use Doctrine\ORM\Mapping as ORM;

trait MailruTrait
{
    /**
     * Mailru username.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $mailruUsername;

    /**
     * Mailru nickname.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $mailruNickname;

    /**
     * Mailru first name.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $mailruFirstName;

    /**
     * Mailru last name.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $mailruLastName;

    /**
     * Mailru real name.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $mailruRealName;

    /**
     * Mailru profilePicture.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $mailruEmail;

    /**
     * Mailru profile picture.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $mailruProfilePicture;

    /**
     * Mailru access token.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $mailruAccessToken;

    /**
     * Mailru refresh token.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $mailruRefreshToken;

    /**
     * Mailru expires in.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $mailruExpiresIn;

    /**
     * Mailru expires in.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $mailruExpiresIn;

    /**
     * Mailru data.
     *
     * @var array|null
     *
     * @ORM\Column(type = "json_array", nullable = true)
     */
    private $mailruData;

    /**
     * Get Mailru access token.
     *
     * @return string|null
     */
    public function getMailruAccessToken()
    {
        return $this->mailruAccessToken;
    }

    /**
     * Gets the Mailru data.
     *
     * @return array|null
     */
    public function getMailruData()
    {
        return $this->mailruData;
    }

    /**
     * Get Mailru email.
     *
     * @return string|null
     */
    public function getMailruEmail()
    {
        return $this->mailruEmail;
    }

    /**
     * Get Mailru expires in.
     *
     * @return string|null
     */
    public function getMailruExpiresIn()
    {
        return $this->mailruExpiresIn;
    }

    /**
     * Get Mailru first name.
     *
     * @return string|null
     */
    public function getMailruFirstName()
    {
        return $this->mailruFirstName;
    }

    /**
     * Get Mailru last name.
     *
     * @return string|null
     */
    public function getMailruLastName()
    {
        return $this->mailruLastName;
    }

    /**
     * Get Mailru nickname.
     *
     * @return string|null
     */
    public function getMailruNickname()
    {
        return $this->mailruNickname;
    }

    /**
     * Get Mailru profile picture.
     *
     * @return string|null
     */
    public function getMailruProfilePicture()
    {
        return $this->mailruProfilePicture;
    }

    /**
     * Get Mailru real name.
     *
     * @return string|null
     */
    public function getMailruRealName()
    {
        return $this->mailruRealName;
    }

    /**
     * Get Mailru refresh token.
     *
     * @return string|null
     */
    public function getMailruRefreshToken()
    {
        return $this->mailruRefreshToken;
    }

    /**
     * Get Mailru username.
     *
     * @return string|null
     */
    public function getMailruUsername()
    {
        return $this->mailruUsername;
    }

    /**
     * Set Mailru access token.
     *
     * @param string|null $accessToken
     *
     * @return self
     */
    public function setMailruAccessToken($accessToken)
    {
        $this->mailruAccessToken = $accessToken;

        return $this;
    }

    /**
     * Sets the Mailru data.
     *
     * @param array|null $data the mailru data
     *
     * @return self
     */
    public function setMailruData(array $data = null)
    {
        $this->mailruData = $data;

        return $this;
    }

    /**
     * Set Mailru email.
     *
     * @param string|null $email
     *
     * @return self
     */
    public function setMailruEmail($email)
    {
        $this->mailruEmail = $email;

        return $this;
    }

    /**
     * Set Mailru expires in.
     *
     * @param string|null $expiresIn
     *
     * @return self
     */
    public function setMailruExpiresIn($expiresIn)
    {
        $this->mailruExpiresIn = $expiresIn;

        return $this;
    }

    /**
     * Set Mailru first name.
     *
     * @param string|null $firstName
     *
     * @return self
     */
    public function setMailruFirstName($firstName)
    {
        $this->mailruFirstName = $firstName;

        return $this;
    }

    /**
     * Set Mailru last name.
     *
     * @param string|null $lastName
     *
     * @return self
     */
    public function setMailruLastName($lastName)
    {
        $this->mailruLastName = $lastName;

        return $this;
    }

    /**
     * Set Mailru nickname.
     *
     * @param string|null $nickname
     *
     * @return self
     */
    public function setMailruNickname($nickname)
    {
        $this->mailruNickname = $nickname;

        return $this;
    }

    /**
     * Set Mailru profile picture.
     *
     * @param string|null $profilePicture
     *
     * @return self
     */
    public function setMailruProfilePicture($profilePicture)
    {
        $this->mailruProfilePicture = $profilePicture;

        return $this;
    }

    /**
     * Set Mailru real name.
     *
     * @param string|null $realName
     *
     * @return self
     */
    public function setMailruRealName($realName)
    {
        $this->mailruRealName = $realName;

        return $this;
    }

    /**
     * Set Mailru refresh token.
     *
     * @param string|null $refreshToken
     *
     * @return self
     */
    public function setMailruRefreshToken($refreshToken)
    {
        $this->mailruRefreshToken = $refreshToken;

        return $this;
    }

    /**
     * Set Mailru username.
     *
     * @param string|null $username
     *
     * @return self
     */
    public function setMailruUsername($username)
    {
        $this->mailruUsername = $username;

        return $this;
    }
}
