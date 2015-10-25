<?php

namespace EmanueleMinotto\HwiOauthBridge\Traits\Entity;

use Doctrine\ORM\Mapping as ORM;

trait GitHubTrait
{
    /**
     * GitHub username.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $gitHubUsername;

    /**
     * GitHub nickname.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $gitHubNickname;

    /**
     * GitHub first name.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $gitHubFirstName;

    /**
     * GitHub last name.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $gitHubLastName;

    /**
     * GitHub real name.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $gitHubRealName;

    /**
     * GitHub profilePicture.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $gitHubEmail;

    /**
     * GitHub profile picture.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $gitHubProfilePicture;

    /**
     * GitHub access token.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $gitHubAccessToken;

    /**
     * GitHub refresh token.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $gitHubRefreshToken;

    /**
     * GitHub expires in.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $gitHubExpiresIn;

    /**
     * GitHub data.
     *
     * @var array|null
     *
     * @ORM\Column(type = "json_array", nullable = true)
     */
    private $gitHubData;

    /**
     * Get GitHub access token.
     *
     * @return string|null
     */
    public function getGitHubAccessToken()
    {
        return $this->gitHubAccessToken;
    }

    /**
     * Gets the GitHub data.
     *
     * @return array|null
     */
    public function getGitHubData()
    {
        return $this->gitHubData;
    }

    /**
     * Get GitHub email.
     *
     * @return string|null
     */
    public function getGitHubEmail()
    {
        return $this->gitHubEmail;
    }

    /**
     * Get GitHub expires in.
     *
     * @return string|null
     */
    public function getGitHubExpiresIn()
    {
        return $this->gitHubExpiresIn;
    }

    /**
     * Get GitHub first name.
     *
     * @return string|null
     */
    public function getGitHubFirstName()
    {
        return $this->gitHubFirstName;
    }

    /**
     * Get GitHub last name.
     *
     * @return string|null
     */
    public function getGitHubLastName()
    {
        return $this->gitHubLastName;
    }

    /**
     * Get GitHub nickname.
     *
     * @return string|null
     */
    public function getGitHubNickname()
    {
        return $this->gitHubNickname;
    }

    /**
     * Get GitHub profile picture.
     *
     * @return string|null
     */
    public function getGitHubProfilePicture()
    {
        return $this->gitHubProfilePicture;
    }

    /**
     * Get GitHub real name.
     *
     * @return string|null
     */
    public function getGitHubRealName()
    {
        return $this->gitHubRealName;
    }

    /**
     * Get GitHub refresh token.
     *
     * @return string|null
     */
    public function getGitHubRefreshToken()
    {
        return $this->gitHubRefreshToken;
    }

    /**
     * Get GitHub username.
     *
     * @return string|null
     */
    public function getGitHubUsername()
    {
        return $this->gitHubUsername;
    }

    /**
     * Set GitHub access token.
     *
     * @param string|null $accessToken
     *
     * @return self
     */
    public function setGitHubAccessToken($accessToken)
    {
        $this->gitHubAccessToken = $accessToken;

        return $this;
    }

    /**
     * Sets the GitHub data.
     *
     * @param array|null $data
     *
     * @return self
     */
    public function setGitHubData(array $data = null)
    {
        $this->gitHubData = $data;

        return $this;
    }

    /**
     * Set GitHub email.
     *
     * @param string|null $email
     *
     * @return self
     */
    public function setGitHubEmail($email)
    {
        $this->gitHubEmail = $email;

        return $this;
    }

    /**
     * Set GitHub expires in.
     *
     * @param string|null $expiresIn
     *
     * @return self
     */
    public function setGitHubExpiresIn($expiresIn)
    {
        $this->gitHubExpiresIn = $expiresIn;

        return $this;
    }

    /**
     * Set GitHub first name.
     *
     * @param string|null $firstName
     *
     * @return self
     */
    public function setGitHubFirstName($firstName)
    {
        $this->gitHubFirstName = $firstName;

        return $this;
    }

    /**
     * Set GitHub last name.
     *
     * @param string|null $lastName
     *
     * @return self
     */
    public function setGitHubLastName($lastName)
    {
        $this->gitHubLastName = $lastName;

        return $this;
    }

    /**
     * Set GitHub nickname.
     *
     * @param string|null $nickname
     *
     * @return self
     */
    public function setGitHubNickname($nickname)
    {
        $this->gitHubNickname = $nickname;

        return $this;
    }

    /**
     * Set GitHub profile picture.
     *
     * @param string|null $profilePicture
     *
     * @return self
     */
    public function setGitHubProfilePicture($profilePicture)
    {
        $this->gitHubProfilePicture = $profilePicture;

        return $this;
    }

    /**
     * Set GitHub real name.
     *
     * @param string|null $realName
     *
     * @return self
     */
    public function setGitHubRealName($realName)
    {
        $this->gitHubRealName = $realName;

        return $this;
    }

    /**
     * Set GitHub refresh token.
     *
     * @param string|null $refreshToken
     *
     * @return self
     */
    public function setGitHubRefreshToken($refreshToken)
    {
        $this->gitHubRefreshToken = $refreshToken;

        return $this;
    }

    /**
     * Set GitHub username.
     *
     * @param string|null $username
     *
     * @return self
     */
    public function setGitHubUsername($username)
    {
        $this->gitHubUsername = $username;

        return $this;
    }
}
