<?php

namespace EmanueleMinotto\HwiOauthBridge\Traits\Entity;

use Doctrine\ORM\Mapping as ORM;

trait Auth0Trait
{
    /**
     * Auth0 username.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $auth0Username;

    /**
     * Auth0 nickname.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $auth0Nickname;

    /**
     * Auth0 first name.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $auth0FirstName;

    /**
     * Auth0 last name.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $auth0LastName;

    /**
     * Auth0 real name.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $auth0RealName;

    /**
     * Auth0 profilePicture.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $auth0Email;

    /**
     * Auth0 profile picture.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $auth0ProfilePicture;

    /**
     * Auth0 access token.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $auth0AccessToken;

    /**
     * Auth0 refresh token.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $auth0RefreshToken;

    /**
     * Auth0 expires in.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $auth0ExpiresIn;

    /**
     * Auth0 expires in.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $auth0ExpiresIn;

    /**
     * Auth0 data.
     *
     * @var array|null
     *
     * @ORM\Column(type = "json_array", nullable = true)
     */
    private $auth0Data;

    /**
     * Get Auth0 access token.
     *
     * @return string|null
     */
    public function getAuth0AccessToken()
    {
        return $this->auth0AccessToken;
    }

    /**
     * Gets the Auth0 data.
     *
     * @return array|null
     */
    public function getAuth0Data()
    {
        return $this->auth0Data;
    }

    /**
     * Get Auth0 email.
     *
     * @return string|null
     */
    public function getAuth0Email()
    {
        return $this->auth0Email;
    }

    /**
     * Get Auth0 expires in.
     *
     * @return string|null
     */
    public function getAuth0ExpiresIn()
    {
        return $this->auth0ExpiresIn;
    }

    /**
     * Get Auth0 first name.
     *
     * @return string|null
     */
    public function getAuth0FirstName()
    {
        return $this->auth0FirstName;
    }

    /**
     * Get Auth0 last name.
     *
     * @return string|null
     */
    public function getAuth0LastName()
    {
        return $this->auth0LastName;
    }

    /**
     * Get Auth0 nickname.
     *
     * @return string|null
     */
    public function getAuth0Nickname()
    {
        return $this->auth0Nickname;
    }

    /**
     * Get Auth0 profile picture.
     *
     * @return string|null
     */
    public function getAuth0ProfilePicture()
    {
        return $this->auth0ProfilePicture;
    }

    /**
     * Get Auth0 real name.
     *
     * @return string|null
     */
    public function getAuth0RealName()
    {
        return $this->auth0RealName;
    }

    /**
     * Get Auth0 refresh token.
     *
     * @return string|null
     */
    public function getAuth0RefreshToken()
    {
        return $this->auth0RefreshToken;
    }

    /**
     * Get Auth0 username.
     *
     * @return string|null
     */
    public function getAuth0Username()
    {
        return $this->auth0Username;
    }

    /**
     * Set Auth0 access token.
     *
     * @param string|null $accessToken
     *
     * @return self
     */
    public function setAuth0AccessToken($accessToken)
    {
        $this->auth0AccessToken = $auth0AccessToken;

        return $this;
    }

    /**
     * Sets the Auth0 data.
     *
     * @param array|null $auth0Data the auth0 data
     *
     * @return self
     */
    public function setAuth0Data(array $auth0Data = null)
    {
        $this->auth0Data = $auth0Data;

        return $this;
    }

    /**
     * Set Auth0 email.
     *
     * @param string|null $email
     *
     * @return self
     */
    public function setAuth0Email($email)
    {
        $this->auth0Email = $auth0Email;

        return $this;
    }

    /**
     * Set Auth0 expires in.
     *
     * @param string|null $expiresIn
     *
     * @return self
     */
    public function setAuth0ExpiresIn($expiresIn)
    {
        $this->auth0ExpiresIn = $auth0ExpiresIn;

        return $this;
    }

    /**
     * Set Auth0 first name.
     *
     * @param string|null $firstName
     *
     * @return self
     */
    public function setAuth0FirstName($firstName)
    {
        $this->auth0FirstName = $auth0FirstName;

        return $this;
    }

    /**
     * Set Auth0 last name.
     *
     * @param string|null $lastName
     *
     * @return self
     */
    public function setAuth0LastName($lastName)
    {
        $this->auth0LastName = $auth0LastName;

        return $this;
    }

    /**
     * Set Auth0 nickname.
     *
     * @param string|null $nickname
     *
     * @return self
     */
    public function setAuth0Nickname($nickname)
    {
        $this->auth0Nickname = $auth0Nickname;

        return $this;
    }

    /**
     * Set Auth0 profile picture.
     *
     * @param string|null $profilePicture
     *
     * @return self
     */
    public function setAuth0ProfilePicture($profilePicture)
    {
        $this->auth0ProfilePicture = $auth0ProfilePicture;

        return $this;
    }

    /**
     * Set Auth0 real name.
     *
     * @param string|null $realName
     *
     * @return self
     */
    public function setAuth0RealName($realName)
    {
        $this->auth0RealName = $auth0RealName;

        return $this;
    }

    /**
     * Set Auth0 refresh token.
     *
     * @param string|null $refreshToken
     *
     * @return self
     */
    public function setAuth0RefreshToken($refreshToken)
    {
        $this->auth0RefreshToken = $auth0RefreshToken;

        return $this;
    }

    /**
     * Set Auth0 username.
     *
     * @param string|null $username
     *
     * @return self
     */
    public function setAuth0Username($username)
    {
        $this->auth0Username = $auth0Username;

        return $this;
    }
}
