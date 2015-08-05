<?php

namespace CL\Slack\Model;

class Team extends AbstractModel
{
    /**
     * @var string
     */
    private $id;

    /**
     * @var string|null
     */
    private $name;

    /**
     * @var string
     */
    private $domain;

    /**
     * @var string|null
     */
    private $emailDomain;

    /**
     * @var TeamIcon|null
     */
    private $icon;

    /**
     * @return string The ID of this team.
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string|null The name of this team
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return string The domain of this team
     */
    public function getDomain()
    {
        return $this->domain;
    }

    /**
     * @return string|null The eamil domain of this team
     */
    public function getEmailDomain()
    {
        return $this->emailDomain;
    }

    /**
     * @return TeamIcon The icon object for this team
     */
    public function getIcon()
    {
        return $this->icon;
    }
}
