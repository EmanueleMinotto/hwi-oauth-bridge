<?php

namespace EmanueleMinotto\HwiOauthBridge\Traits\Entity;

use Doctrine\ORM\Mapping as ORM;

trait SinaWeiboTrait
{
    /**
     * SinaWeibo username.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $sinaWeiboUsername;

    /**
     * SinaWeibo nickname.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $sinaWeiboNickname;

    /**
     * SinaWeibo first name.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $sinaWeiboFirstName;

    /**
     * SinaWeibo last name.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $sinaWeiboLastName;

    /**
     * SinaWeibo real name.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $sinaWeiboRealName;

    /**
     * SinaWeibo profilePicture.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $sinaWeiboEmail;

    /**
     * SinaWeibo profile picture.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $sinaWeiboProfilePicture;

    /**
     * SinaWeibo access token.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $sinaWeiboAccessToken;

    /**
     * SinaWeibo refresh token.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $sinaWeiboRefreshToken;

    /**
     * SinaWeibo expires in.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $sinaWeiboExpiresIn;

    /**
     * SinaWeibo expires in.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $sinaWeiboExpiresIn;

    /**
     * SinaWeibo data.
     *
     * @var array|null
     *
     * @ORM\Column(type = "json_array", nullable = true)
     */
    private $sinaWeiboData;

    /**
     * Get SinaWeibo access token.
     *
     * @return string|null
     */
    public function getSinaWeiboAccessToken()
    {
        return $this->sinaWeiboAccessToken;
    }

    /**
     * Gets the SinaWeibo data.
     *
     * @return array|null
     */
    public function getSinaWeiboData()
    {
        return $this->sinaWeiboData;
    }

    /**
     * Get SinaWeibo email.
     *
     * @return string|null
     */
    public function getSinaWeiboEmail()
    {
        return $this->sinaWeiboEmail;
    }

    /**
     * Get SinaWeibo expires in.
     *
     * @return string|null
     */
    public function getSinaWeiboExpiresIn()
    {
        return $this->sinaWeiboExpiresIn;
    }

    /**
     * Get SinaWeibo first name.
     *
     * @return string|null
     */
    public function getSinaWeiboFirstName()
    {
        return $this->sinaWeiboFirstName;
    }

    /**
     * Get SinaWeibo last name.
     *
     * @return string|null
     */
    public function getSinaWeiboLastName()
    {
        return $this->sinaWeiboLastName;
    }

    /**
     * Get SinaWeibo nickname.
     *
     * @return string|null
     */
    public function getSinaWeiboNickname()
    {
        return $this->sinaWeiboNickname;
    }

    /**
     * Get SinaWeibo profile picture.
     *
     * @return string|null
     */
    public function getSinaWeiboProfilePicture()
    {
        return $this->sinaWeiboProfilePicture;
    }

    /**
     * Get SinaWeibo real name.
     *
     * @return string|null
     */
    public function getSinaWeiboRealName()
    {
        return $this->sinaWeiboRealName;
    }

    /**
     * Get SinaWeibo refresh token.
     *
     * @return string|null
     */
    public function getSinaWeiboRefreshToken()
    {
        return $this->sinaWeiboRefreshToken;
    }

    /**
     * Get SinaWeibo username.
     *
     * @return string|null
     */
    public function getSinaWeiboUsername()
    {
        return $this->sinaWeiboUsername;
    }

    /**
     * Set SinaWeibo access token.
     *
     * @param string|null $accessToken
     *
     * @return self
     */
    public function setSinaWeiboAccessToken($accessToken)
    {
        $this->sinaWeiboAccessToken = $sinaWeiboAccessToken;

        return $this;
    }

    /**
     * Sets the SinaWeibo data.
     *
     * @param array|null $sinaWeiboData the sinaWeibo data
     *
     * @return self
     */
    public function setSinaWeiboData(array $sinaWeiboData = null)
    {
        $this->sinaWeiboData = $sinaWeiboData;

        return $this;
    }

    /**
     * Set SinaWeibo email.
     *
     * @param string|null $email
     *
     * @return self
     */
    public function setSinaWeiboEmail($email)
    {
        $this->sinaWeiboEmail = $sinaWeiboEmail;

        return $this;
    }

    /**
     * Set SinaWeibo expires in.
     *
     * @param string|null $expiresIn
     *
     * @return self
     */
    public function setSinaWeiboExpiresIn($expiresIn)
    {
        $this->sinaWeiboExpiresIn = $sinaWeiboExpiresIn;

        return $this;
    }

    /**
     * Set SinaWeibo first name.
     *
     * @param string|null $firstName
     *
     * @return self
     */
    public function setSinaWeiboFirstName($firstName)
    {
        $this->sinaWeiboFirstName = $sinaWeiboFirstName;

        return $this;
    }

    /**
     * Set SinaWeibo last name.
     *
     * @param string|null $lastName
     *
     * @return self
     */
    public function setSinaWeiboLastName($lastName)
    {
        $this->sinaWeiboLastName = $sinaWeiboLastName;

        return $this;
    }

    /**
     * Set SinaWeibo nickname.
     *
     * @param string|null $nickname
     *
     * @return self
     */
    public function setSinaWeiboNickname($nickname)
    {
        $this->sinaWeiboNickname = $sinaWeiboNickname;

        return $this;
    }

    /**
     * Set SinaWeibo profile picture.
     *
     * @param string|null $profilePicture
     *
     * @return self
     */
    public function setSinaWeiboProfilePicture($profilePicture)
    {
        $this->sinaWeiboProfilePicture = $sinaWeiboProfilePicture;

        return $this;
    }

    /**
     * Set SinaWeibo real name.
     *
     * @param string|null $realName
     *
     * @return self
     */
    public function setSinaWeiboRealName($realName)
    {
        $this->sinaWeiboRealName = $sinaWeiboRealName;

        return $this;
    }

    /**
     * Set SinaWeibo refresh token.
     *
     * @param string|null $refreshToken
     *
     * @return self
     */
    public function setSinaWeiboRefreshToken($refreshToken)
    {
        $this->sinaWeiboRefreshToken = $sinaWeiboRefreshToken;

        return $this;
    }

    /**
     * Set SinaWeibo username.
     *
     * @param string|null $username
     *
     * @return self
     */
    public function setSinaWeiboUsername($username)
    {
        $this->sinaWeiboUsername = $sinaWeiboUsername;

        return $this;
    }
}
