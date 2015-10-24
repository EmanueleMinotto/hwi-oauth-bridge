<?php

namespace EmanueleMinotto\HwiOauthBridge\Traits\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;

trait SalesforceTrait
{
    /**
     * Salesforce username.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $salesforceUsername;

    /**
     * Salesforce nickname.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $salesforceNickname;

    /**
     * Salesforce first name.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $salesforceFirstName;

    /**
     * Salesforce last name.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $salesforceLastName;

    /**
     * Salesforce real name.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $salesforceRealName;

    /**
     * Salesforce profilePicture.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $salesforceEmail;

    /**
     * Salesforce profile picture.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $salesforceProfilePicture;

    /**
     * Salesforce access token.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $salesforceAccessToken;

    /**
     * Salesforce refresh token.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $salesforceRefreshToken;

    /**
     * Salesforce expires in.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $salesforceExpiresIn;

    /**
     * Salesforce expires in.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $salesforceExpiresIn;

    /**
     * Salesforce data.
     *
     * @var array|null
     *
     * @ODM\Hash
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
        $this->salesforceAccessToken = $accessToken;

        return $this;
    }

    /**
     * Sets the Salesforce data.
     *
     * @param array|null $salesforceData the salesforce data
     *
     * @return self
     */
    public function setSalesforceData(array $data = null)
    {
        $this->salesforceData = $data;

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
        $this->salesforceEmail = $email;

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
        $this->salesforceExpiresIn = $expiresIn;

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
        $this->salesforceFirstName = $firstName;

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
        $this->salesforceLastName = $lastName;

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
        $this->salesforceNickname = $nickname;

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
        $this->salesforceProfilePicture = $profilePicture;

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
        $this->salesforceRealName = $realName;

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
        $this->salesforceRefreshToken = $refreshToken;

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
        $this->salesforceUsername = $username;

        return $this;
    }
}
