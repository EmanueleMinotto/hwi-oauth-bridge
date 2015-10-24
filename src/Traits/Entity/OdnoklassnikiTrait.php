<?php

namespace EmanueleMinotto\HwiOauthBridge\Traits\Entity;

use Doctrine\ORM\Mapping as ORM;

trait OdnoklassnikiTrait
{
    /**
     * Odnoklassniki username.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $odnoklassnikiUsername;

    /**
     * Odnoklassniki nickname.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $odnoklassnikiNickname;

    /**
     * Odnoklassniki first name.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $odnoklassnikiFirstName;

    /**
     * Odnoklassniki last name.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $odnoklassnikiLastName;

    /**
     * Odnoklassniki real name.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $odnoklassnikiRealName;

    /**
     * Odnoklassniki profilePicture.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $odnoklassnikiEmail;

    /**
     * Odnoklassniki profile picture.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $odnoklassnikiProfilePicture;

    /**
     * Odnoklassniki access token.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $odnoklassnikiAccessToken;

    /**
     * Odnoklassniki refresh token.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $odnoklassnikiRefreshToken;

    /**
     * Odnoklassniki expires in.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $odnoklassnikiExpiresIn;

    /**
     * Odnoklassniki expires in.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $odnoklassnikiExpiresIn;

    /**
     * Odnoklassniki data.
     *
     * @var array|null
     *
     * @ORM\Column(type = "json_array", nullable = true)
     */
    private $odnoklassnikiData;

    /**
     * Get Odnoklassniki access token.
     *
     * @return string|null
     */
    public function getOdnoklassnikiAccessToken()
    {
        return $this->odnoklassnikiAccessToken;
    }

    /**
     * Gets the Odnoklassniki data.
     *
     * @return array|null
     */
    public function getOdnoklassnikiData()
    {
        return $this->odnoklassnikiData;
    }

    /**
     * Get Odnoklassniki email.
     *
     * @return string|null
     */
    public function getOdnoklassnikiEmail()
    {
        return $this->odnoklassnikiEmail;
    }

    /**
     * Get Odnoklassniki expires in.
     *
     * @return string|null
     */
    public function getOdnoklassnikiExpiresIn()
    {
        return $this->odnoklassnikiExpiresIn;
    }

    /**
     * Get Odnoklassniki first name.
     *
     * @return string|null
     */
    public function getOdnoklassnikiFirstName()
    {
        return $this->odnoklassnikiFirstName;
    }

    /**
     * Get Odnoklassniki last name.
     *
     * @return string|null
     */
    public function getOdnoklassnikiLastName()
    {
        return $this->odnoklassnikiLastName;
    }

    /**
     * Get Odnoklassniki nickname.
     *
     * @return string|null
     */
    public function getOdnoklassnikiNickname()
    {
        return $this->odnoklassnikiNickname;
    }

    /**
     * Get Odnoklassniki profile picture.
     *
     * @return string|null
     */
    public function getOdnoklassnikiProfilePicture()
    {
        return $this->odnoklassnikiProfilePicture;
    }

    /**
     * Get Odnoklassniki real name.
     *
     * @return string|null
     */
    public function getOdnoklassnikiRealName()
    {
        return $this->odnoklassnikiRealName;
    }

    /**
     * Get Odnoklassniki refresh token.
     *
     * @return string|null
     */
    public function getOdnoklassnikiRefreshToken()
    {
        return $this->odnoklassnikiRefreshToken;
    }

    /**
     * Get Odnoklassniki username.
     *
     * @return string|null
     */
    public function getOdnoklassnikiUsername()
    {
        return $this->odnoklassnikiUsername;
    }

    /**
     * Set Odnoklassniki access token.
     *
     * @param string|null $accessToken
     *
     * @return self
     */
    public function setOdnoklassnikiAccessToken($accessToken)
    {
        $this->odnoklassnikiAccessToken = $odnoklassnikiAccessToken;

        return $this;
    }

    /**
     * Sets the Odnoklassniki data.
     *
     * @param array|null $odnoklassnikiData the odnoklassniki data
     *
     * @return self
     */
    public function setOdnoklassnikiData(array $odnoklassnikiData = null)
    {
        $this->odnoklassnikiData = $odnoklassnikiData;

        return $this;
    }

    /**
     * Set Odnoklassniki email.
     *
     * @param string|null $email
     *
     * @return self
     */
    public function setOdnoklassnikiEmail($email)
    {
        $this->odnoklassnikiEmail = $odnoklassnikiEmail;

        return $this;
    }

    /**
     * Set Odnoklassniki expires in.
     *
     * @param string|null $expiresIn
     *
     * @return self
     */
    public function setOdnoklassnikiExpiresIn($expiresIn)
    {
        $this->odnoklassnikiExpiresIn = $odnoklassnikiExpiresIn;

        return $this;
    }

    /**
     * Set Odnoklassniki first name.
     *
     * @param string|null $firstName
     *
     * @return self
     */
    public function setOdnoklassnikiFirstName($firstName)
    {
        $this->odnoklassnikiFirstName = $odnoklassnikiFirstName;

        return $this;
    }

    /**
     * Set Odnoklassniki last name.
     *
     * @param string|null $lastName
     *
     * @return self
     */
    public function setOdnoklassnikiLastName($lastName)
    {
        $this->odnoklassnikiLastName = $odnoklassnikiLastName;

        return $this;
    }

    /**
     * Set Odnoklassniki nickname.
     *
     * @param string|null $nickname
     *
     * @return self
     */
    public function setOdnoklassnikiNickname($nickname)
    {
        $this->odnoklassnikiNickname = $odnoklassnikiNickname;

        return $this;
    }

    /**
     * Set Odnoklassniki profile picture.
     *
     * @param string|null $profilePicture
     *
     * @return self
     */
    public function setOdnoklassnikiProfilePicture($profilePicture)
    {
        $this->odnoklassnikiProfilePicture = $odnoklassnikiProfilePicture;

        return $this;
    }

    /**
     * Set Odnoklassniki real name.
     *
     * @param string|null $realName
     *
     * @return self
     */
    public function setOdnoklassnikiRealName($realName)
    {
        $this->odnoklassnikiRealName = $odnoklassnikiRealName;

        return $this;
    }

    /**
     * Set Odnoklassniki refresh token.
     *
     * @param string|null $refreshToken
     *
     * @return self
     */
    public function setOdnoklassnikiRefreshToken($refreshToken)
    {
        $this->odnoklassnikiRefreshToken = $odnoklassnikiRefreshToken;

        return $this;
    }

    /**
     * Set Odnoklassniki username.
     *
     * @param string|null $username
     *
     * @return self
     */
    public function setOdnoklassnikiUsername($username)
    {
        $this->odnoklassnikiUsername = $odnoklassnikiUsername;

        return $this;
    }
}
