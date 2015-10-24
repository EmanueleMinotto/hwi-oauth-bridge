<?php

namespace EmanueleMinotto\HwiOauthBridge\Traits\Entity;

use Doctrine\ORM\Mapping as ORM;

trait DiscogsTrait
{
    /**
     * Discogs username.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $discogsUsername;

    /**
     * Discogs nickname.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $discogsNickname;

    /**
     * Discogs first name.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $discogsFirstName;

    /**
     * Discogs last name.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $discogsLastName;

    /**
     * Discogs real name.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $discogsRealName;

    /**
     * Discogs profilePicture.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $discogsEmail;

    /**
     * Discogs profile picture.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $discogsProfilePicture;

    /**
     * Discogs access token.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $discogsAccessToken;

    /**
     * Discogs refresh token.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $discogsRefreshToken;

    /**
     * Discogs expires in.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $discogsExpiresIn;

    /**
     * Discogs expires in.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $discogsExpiresIn;

    /**
     * Discogs data.
     *
     * @var array|null
     *
     * @ORM\Column(type = "json_array", nullable = true)
     */
    private $discogsData;

    /**
     * Get Discogs access token.
     *
     * @return string|null
     */
    public function getDiscogsAccessToken()
    {
        return $this->discogsAccessToken;
    }

    /**
     * Gets the Discogs data.
     *
     * @return array|null
     */
    public function getDiscogsData()
    {
        return $this->discogsData;
    }

    /**
     * Get Discogs email.
     *
     * @return string|null
     */
    public function getDiscogsEmail()
    {
        return $this->discogsEmail;
    }

    /**
     * Get Discogs expires in.
     *
     * @return string|null
     */
    public function getDiscogsExpiresIn()
    {
        return $this->discogsExpiresIn;
    }

    /**
     * Get Discogs first name.
     *
     * @return string|null
     */
    public function getDiscogsFirstName()
    {
        return $this->discogsFirstName;
    }

    /**
     * Get Discogs last name.
     *
     * @return string|null
     */
    public function getDiscogsLastName()
    {
        return $this->discogsLastName;
    }

    /**
     * Get Discogs nickname.
     *
     * @return string|null
     */
    public function getDiscogsNickname()
    {
        return $this->discogsNickname;
    }

    /**
     * Get Discogs profile picture.
     *
     * @return string|null
     */
    public function getDiscogsProfilePicture()
    {
        return $this->discogsProfilePicture;
    }

    /**
     * Get Discogs real name.
     *
     * @return string|null
     */
    public function getDiscogsRealName()
    {
        return $this->discogsRealName;
    }

    /**
     * Get Discogs refresh token.
     *
     * @return string|null
     */
    public function getDiscogsRefreshToken()
    {
        return $this->discogsRefreshToken;
    }

    /**
     * Get Discogs username.
     *
     * @return string|null
     */
    public function getDiscogsUsername()
    {
        return $this->discogsUsername;
    }

    /**
     * Set Discogs access token.
     *
     * @param string|null $accessToken
     *
     * @return self
     */
    public function setDiscogsAccessToken($accessToken)
    {
        $this->discogsAccessToken = $discogsAccessToken;

        return $this;
    }

    /**
     * Sets the Discogs data.
     *
     * @param array|null $discogsData the discogs data
     *
     * @return self
     */
    public function setDiscogsData(array $discogsData = null)
    {
        $this->discogsData = $discogsData;

        return $this;
    }

    /**
     * Set Discogs email.
     *
     * @param string|null $email
     *
     * @return self
     */
    public function setDiscogsEmail($email)
    {
        $this->discogsEmail = $discogsEmail;

        return $this;
    }

    /**
     * Set Discogs expires in.
     *
     * @param string|null $expiresIn
     *
     * @return self
     */
    public function setDiscogsExpiresIn($expiresIn)
    {
        $this->discogsExpiresIn = $discogsExpiresIn;

        return $this;
    }

    /**
     * Set Discogs first name.
     *
     * @param string|null $firstName
     *
     * @return self
     */
    public function setDiscogsFirstName($firstName)
    {
        $this->discogsFirstName = $discogsFirstName;

        return $this;
    }

    /**
     * Set Discogs last name.
     *
     * @param string|null $lastName
     *
     * @return self
     */
    public function setDiscogsLastName($lastName)
    {
        $this->discogsLastName = $discogsLastName;

        return $this;
    }

    /**
     * Set Discogs nickname.
     *
     * @param string|null $nickname
     *
     * @return self
     */
    public function setDiscogsNickname($nickname)
    {
        $this->discogsNickname = $discogsNickname;

        return $this;
    }

    /**
     * Set Discogs profile picture.
     *
     * @param string|null $profilePicture
     *
     * @return self
     */
    public function setDiscogsProfilePicture($profilePicture)
    {
        $this->discogsProfilePicture = $discogsProfilePicture;

        return $this;
    }

    /**
     * Set Discogs real name.
     *
     * @param string|null $realName
     *
     * @return self
     */
    public function setDiscogsRealName($realName)
    {
        $this->discogsRealName = $discogsRealName;

        return $this;
    }

    /**
     * Set Discogs refresh token.
     *
     * @param string|null $refreshToken
     *
     * @return self
     */
    public function setDiscogsRefreshToken($refreshToken)
    {
        $this->discogsRefreshToken = $discogsRefreshToken;

        return $this;
    }

    /**
     * Set Discogs username.
     *
     * @param string|null $username
     *
     * @return self
     */
    public function setDiscogsUsername($username)
    {
        $this->discogsUsername = $discogsUsername;

        return $this;
    }
}
