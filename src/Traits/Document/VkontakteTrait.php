<?php

namespace EmanueleMinotto\HwiOauthBridge\Traits\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;

trait VkontakteTrait
{
    /**
     * Vkontakte username.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $vkontakteUsername;

    /**
     * Vkontakte nickname.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $vkontakteNickname;

    /**
     * Vkontakte first name.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $vkontakteFirstName;

    /**
     * Vkontakte last name.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $vkontakteLastName;

    /**
     * Vkontakte real name.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $vkontakteRealName;

    /**
     * Vkontakte profilePicture.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $vkontakteEmail;

    /**
     * Vkontakte profile picture.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $vkontakteProfilePicture;

    /**
     * Vkontakte access token.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $vkontakteAccessToken;

    /**
     * Vkontakte refresh token.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $vkontakteRefreshToken;

    /**
     * Vkontakte expires in.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $vkontakteExpiresIn;

    /**
     * Vkontakte expires in.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $vkontakteExpiresIn;

    /**
     * Vkontakte data.
     *
     * @var array|null
     *
     * @ODM\Hash
     */
    private $vkontakteData;

    /**
     * Get Vkontakte access token.
     *
     * @return string|null
     */
    public function getVkontakteAccessToken()
    {
        return $this->vkontakteAccessToken;
    }

    /**
     * Gets the Vkontakte data.
     *
     * @return array|null
     */
    public function getVkontakteData()
    {
        return $this->vkontakteData;
    }

    /**
     * Get Vkontakte email.
     *
     * @return string|null
     */
    public function getVkontakteEmail()
    {
        return $this->vkontakteEmail;
    }

    /**
     * Get Vkontakte expires in.
     *
     * @return string|null
     */
    public function getVkontakteExpiresIn()
    {
        return $this->vkontakteExpiresIn;
    }

    /**
     * Get Vkontakte first name.
     *
     * @return string|null
     */
    public function getVkontakteFirstName()
    {
        return $this->vkontakteFirstName;
    }

    /**
     * Get Vkontakte last name.
     *
     * @return string|null
     */
    public function getVkontakteLastName()
    {
        return $this->vkontakteLastName;
    }

    /**
     * Get Vkontakte nickname.
     *
     * @return string|null
     */
    public function getVkontakteNickname()
    {
        return $this->vkontakteNickname;
    }

    /**
     * Get Vkontakte profile picture.
     *
     * @return string|null
     */
    public function getVkontakteProfilePicture()
    {
        return $this->vkontakteProfilePicture;
    }

    /**
     * Get Vkontakte real name.
     *
     * @return string|null
     */
    public function getVkontakteRealName()
    {
        return $this->vkontakteRealName;
    }

    /**
     * Get Vkontakte refresh token.
     *
     * @return string|null
     */
    public function getVkontakteRefreshToken()
    {
        return $this->vkontakteRefreshToken;
    }

    /**
     * Get Vkontakte username.
     *
     * @return string|null
     */
    public function getVkontakteUsername()
    {
        return $this->vkontakteUsername;
    }

    /**
     * Set Vkontakte access token.
     *
     * @param string|null $accessToken
     *
     * @return self
     */
    public function setVkontakteAccessToken($accessToken)
    {
        $this->vkontakteAccessToken = $accessToken;

        return $this;
    }

    /**
     * Sets the Vkontakte data.
     *
     * @param array|null $vkontakteData the vkontakte data
     *
     * @return self
     */
    public function setVkontakteData(array $data = null)
    {
        $this->vkontakteData = $data;

        return $this;
    }

    /**
     * Set Vkontakte email.
     *
     * @param string|null $email
     *
     * @return self
     */
    public function setVkontakteEmail($email)
    {
        $this->vkontakteEmail = $email;

        return $this;
    }

    /**
     * Set Vkontakte expires in.
     *
     * @param string|null $expiresIn
     *
     * @return self
     */
    public function setVkontakteExpiresIn($expiresIn)
    {
        $this->vkontakteExpiresIn = $expiresIn;

        return $this;
    }

    /**
     * Set Vkontakte first name.
     *
     * @param string|null $firstName
     *
     * @return self
     */
    public function setVkontakteFirstName($firstName)
    {
        $this->vkontakteFirstName = $firstName;

        return $this;
    }

    /**
     * Set Vkontakte last name.
     *
     * @param string|null $lastName
     *
     * @return self
     */
    public function setVkontakteLastName($lastName)
    {
        $this->vkontakteLastName = $lastName;

        return $this;
    }

    /**
     * Set Vkontakte nickname.
     *
     * @param string|null $nickname
     *
     * @return self
     */
    public function setVkontakteNickname($nickname)
    {
        $this->vkontakteNickname = $nickname;

        return $this;
    }

    /**
     * Set Vkontakte profile picture.
     *
     * @param string|null $profilePicture
     *
     * @return self
     */
    public function setVkontakteProfilePicture($profilePicture)
    {
        $this->vkontakteProfilePicture = $profilePicture;

        return $this;
    }

    /**
     * Set Vkontakte real name.
     *
     * @param string|null $realName
     *
     * @return self
     */
    public function setVkontakteRealName($realName)
    {
        $this->vkontakteRealName = $realName;

        return $this;
    }

    /**
     * Set Vkontakte refresh token.
     *
     * @param string|null $refreshToken
     *
     * @return self
     */
    public function setVkontakteRefreshToken($refreshToken)
    {
        $this->vkontakteRefreshToken = $refreshToken;

        return $this;
    }

    /**
     * Set Vkontakte username.
     *
     * @param string|null $username
     *
     * @return self
     */
    public function setVkontakteUsername($username)
    {
        $this->vkontakteUsername = $username;

        return $this;
    }
}
