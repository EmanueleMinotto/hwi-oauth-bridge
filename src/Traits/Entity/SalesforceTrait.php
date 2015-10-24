<?php

namespace EmanueleMinotto\HwiOauthBridge\Traits\Entity;

use Doctrine\ORM\Mapping as ORM;

trait SalesforceTrait
{
    /**
     * Salesforce username.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $salesforceUsername;

    /**
     * Salesforce nickname.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $salesforceNickname;

    /**
     * Salesforce first name.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $salesforceFirstName;

    /**
     * Salesforce last name.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $salesforceLastName;

    /**
     * Salesforce real name.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $salesforceRealName;

    /**
     * Salesforce profilePicture.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $salesforceEmail;

    /**
     * Salesforce profile picture.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $salesforceProfilePicture;

    /**
     * Salesforce access token.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $salesforceAccessToken;

    /**
     * Salesforce refresh token.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $salesforceRefreshToken;

    /**
     * Salesforce expires in.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $salesforceExpiresIn;

    /**
     * Salesforce expires in.
     *
     * @var string|null
     *
     * @ORM\Column(nullable = true)
     */
    private $salesforceExpiresIn;

    /**
     * Salesforce data.
     *
     * @var array|null
     *
     * @ORM\Column(type = "json_array", nullable = true)
     */
    private $salesforceData;

    /**
     * Get Salesforce access token.
     *
     * @return string|null
     */
    public function getSalesforceAccessToken()
    {
        return $this->salesforceAccessToken;
    }

    /**
     * Gets the Salesforce data.
     *
     * @return array|null
     */
    public function getSalesforceData()
    {
        return $this->salesforceData;
    }

    /**
     * Get Salesforce email.
     *
     * @return string|null
     */
    public function getSalesforceEmail()
    {
        return $this->salesforceEmail;
    }

    /**
     * Get Salesforce expires in.
     *
     * @return string|null
     */
    public function getSalesforceExpiresIn()
    {
        return $this->salesforceExpiresIn;
    }

    /**
     * Get Salesforce first name.
     *
     * @return string|null
     */
    public function getSalesforceFirstName()
    {
        return $this->salesforceFirstName;
    }

    /**
     * Get Salesforce last name.
     *
     * @return string|null
     */
    public function getSalesforceLastName()
    {
        return $this->salesforceLastName;
    }

    /**
     * Get Salesforce nickname.
     *
     * @return string|null
     */
    public function getSalesforceNickname()
    {
        return $this->salesforceNickname;
    }

    /**
     * Get Salesforce profile picture.
     *
     * @return string|null
     */
    public function getSalesforceProfilePicture()
    {
        return $this->salesforceProfilePicture;
    }

    /**
     * Get Salesforce real name.
     *
     * @return string|null
     */
    public function getSalesforceRealName()
    {
        return $this->salesforceRealName;
    }

    /**
     * Get Salesforce refresh token.
     *
     * @return string|null
     */
    public function getSalesforceRefreshToken()
    {
        return $this->salesforceRefreshToken;
    }

    /**
     * Get Salesforce username.
     *
     * @return string|null
     */
    public function getSalesforceUsername()
    {
        return $this->salesforceUsername;
    }

    /**
     * Set Salesforce access token.
     *
     * @param string|null $accessToken
     *
     * @return self
     */
    public function setSalesforceAccessToken($accessToken)
    {
        $this->salesforceAccessToken = $salesforceAccessToken;

        return $this;
    }

    /**
     * Sets the Salesforce data.
     *
     * @param array|null $salesforceData the salesforce data
     *
     * @return self
     */
    public function setSalesforceData(array $salesforceData = null)
    {
        $this->salesforceData = $salesforceData;

        return $this;
    }

    /**
     * Set Salesforce email.
     *
     * @param string|null $email
     *
     * @return self
     */
    public function setSalesforceEmail($email)
    {
        $this->salesforceEmail = $salesforceEmail;

        return $this;
    }

    /**
     * Set Salesforce expires in.
     *
     * @param string|null $expiresIn
     *
     * @return self
     */
    public function setSalesforceExpiresIn($expiresIn)
    {
        $this->salesforceExpiresIn = $salesforceExpiresIn;

        return $this;
    }

    /**
     * Set Salesforce first name.
     *
     * @param string|null $firstName
     *
     * @return self
     */
    public function setSalesforceFirstName($firstName)
    {
        $this->salesforceFirstName = $salesforceFirstName;

        return $this;
    }

    /**
     * Set Salesforce last name.
     *
     * @param string|null $lastName
     *
     * @return self
     */
    public function setSalesforceLastName($lastName)
    {
        $this->salesforceLastName = $salesforceLastName;

        return $this;
    }

    /**
     * Set Salesforce nickname.
     *
     * @param string|null $nickname
     *
     * @return self
     */
    public function setSalesforceNickname($nickname)
    {
        $this->salesforceNickname = $salesforceNickname;

        return $this;
    }

    /**
     * Set Salesforce profile picture.
     *
     * @param string|null $profilePicture
     *
     * @return self
     */
    public function setSalesforceProfilePicture($profilePicture)
    {
        $this->salesforceProfilePicture = $salesforceProfilePicture;

        return $this;
    }

    /**
     * Set Salesforce real name.
     *
     * @param string|null $realName
     *
     * @return self
     */
    public function setSalesforceRealName($realName)
    {
        $this->salesforceRealName = $salesforceRealName;

        return $this;
    }

    /**
     * Set Salesforce refresh token.
     *
     * @param string|null $refreshToken
     *
     * @return self
     */
    public function setSalesforceRefreshToken($refreshToken)
    {
        $this->salesforceRefreshToken = $salesforceRefreshToken;

        return $this;
    }

    /**
     * Set Salesforce username.
     *
     * @param string|null $username
     *
     * @return self
     */
    public function setSalesforceUsername($username)
    {
        $this->salesforceUsername = $salesforceUsername;

        return $this;
    }
}
