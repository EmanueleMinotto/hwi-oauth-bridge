<?php

namespace EmanueleMinotto\HwiOauthBridge\Traits\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;

trait JiraTrait
{
    /**
     * Jira username.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $jiraUsername;

    /**
     * Jira nickname.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $jiraNickname;

    /**
     * Jira first name.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $jiraFirstName;

    /**
     * Jira last name.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $jiraLastName;

    /**
     * Jira real name.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $jiraRealName;

    /**
     * Jira profilePicture.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $jiraEmail;

    /**
     * Jira profile picture.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $jiraProfilePicture;

    /**
     * Jira access token.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $jiraAccessToken;

    /**
     * Jira refresh token.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $jiraRefreshToken;

    /**
     * Jira expires in.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $jiraExpiresIn;

    /**
     * Jira expires in.
     *
     * @var string|null
     *
     * @ODM\String
     */
    private $jiraExpiresIn;

    /**
     * Jira data.
     *
     * @var array|null
     *
     * @ODM\Hash
     */
    private $jiraData;

    /**
     * Get Jira access token.
     *
     * @return string|null
     */
    public function getJiraAccessToken()
    {
        return $this->jiraAccessToken;
    }

    /**
     * Gets the Jira data.
     *
     * @return array|null
     */
    public function getJiraData()
    {
        return $this->jiraData;
    }

    /**
     * Get Jira email.
     *
     * @return string|null
     */
    public function getJiraEmail()
    {
        return $this->jiraEmail;
    }

    /**
     * Get Jira expires in.
     *
     * @return string|null
     */
    public function getJiraExpiresIn()
    {
        return $this->jiraExpiresIn;
    }

    /**
     * Get Jira first name.
     *
     * @return string|null
     */
    public function getJiraFirstName()
    {
        return $this->jiraFirstName;
    }

    /**
     * Get Jira last name.
     *
     * @return string|null
     */
    public function getJiraLastName()
    {
        return $this->jiraLastName;
    }

    /**
     * Get Jira nickname.
     *
     * @return string|null
     */
    public function getJiraNickname()
    {
        return $this->jiraNickname;
    }

    /**
     * Get Jira profile picture.
     *
     * @return string|null
     */
    public function getJiraProfilePicture()
    {
        return $this->jiraProfilePicture;
    }

    /**
     * Get Jira real name.
     *
     * @return string|null
     */
    public function getJiraRealName()
    {
        return $this->jiraRealName;
    }

    /**
     * Get Jira refresh token.
     *
     * @return string|null
     */
    public function getJiraRefreshToken()
    {
        return $this->jiraRefreshToken;
    }

    /**
     * Get Jira username.
     *
     * @return string|null
     */
    public function getJiraUsername()
    {
        return $this->jiraUsername;
    }

    /**
     * Set Jira access token.
     *
     * @param string|null $accessToken
     *
     * @return self
     */
    public function setJiraAccessToken($accessToken)
    {
        $this->jiraAccessToken = $accessToken;

        return $this;
    }

    /**
     * Sets the Jira data.
     *
     * @param array|null $jiraData the jira data
     *
     * @return self
     */
    public function setJiraData(array $data = null)
    {
        $this->jiraData = $data;

        return $this;
    }

    /**
     * Set Jira email.
     *
     * @param string|null $email
     *
     * @return self
     */
    public function setJiraEmail($email)
    {
        $this->jiraEmail = $email;

        return $this;
    }

    /**
     * Set Jira expires in.
     *
     * @param string|null $expiresIn
     *
     * @return self
     */
    public function setJiraExpiresIn($expiresIn)
    {
        $this->jiraExpiresIn = $expiresIn;

        return $this;
    }

    /**
     * Set Jira first name.
     *
     * @param string|null $firstName
     *
     * @return self
     */
    public function setJiraFirstName($firstName)
    {
        $this->jiraFirstName = $firstName;

        return $this;
    }

    /**
     * Set Jira last name.
     *
     * @param string|null $lastName
     *
     * @return self
     */
    public function setJiraLastName($lastName)
    {
        $this->jiraLastName = $lastName;

        return $this;
    }

    /**
     * Set Jira nickname.
     *
     * @param string|null $nickname
     *
     * @return self
     */
    public function setJiraNickname($nickname)
    {
        $this->jiraNickname = $nickname;

        return $this;
    }

    /**
     * Set Jira profile picture.
     *
     * @param string|null $profilePicture
     *
     * @return self
     */
    public function setJiraProfilePicture($profilePicture)
    {
        $this->jiraProfilePicture = $profilePicture;

        return $this;
    }

    /**
     * Set Jira real name.
     *
     * @param string|null $realName
     *
     * @return self
     */
    public function setJiraRealName($realName)
    {
        $this->jiraRealName = $realName;

        return $this;
    }

    /**
     * Set Jira refresh token.
     *
     * @param string|null $refreshToken
     *
     * @return self
     */
    public function setJiraRefreshToken($refreshToken)
    {
        $this->jiraRefreshToken = $refreshToken;

        return $this;
    }

    /**
     * Set Jira username.
     *
     * @param string|null $username
     *
     * @return self
     */
    public function setJiraUsername($username)
    {
        $this->jiraUsername = $username;

        return $this;
    }
}
