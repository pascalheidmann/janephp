<?php

namespace Github\Model;

class ReposOwnerRepoBranchesBranchProtectionPutBodyRequiredPullRequestReviewsDismissalRestrictions extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * The list of user `login`s with dismissal access
     *
     * @var list<string>
     */
    protected $users;
    /**
     * The list of team `slug`s with dismissal access
     *
     * @var list<string>
     */
    protected $teams;
    /**
     * The list of user `login`s with dismissal access
     *
     * @return list<string>
     */
    public function getUsers(): array
    {
        return $this->users;
    }
    /**
     * The list of user `login`s with dismissal access
     *
     * @param list<string> $users
     *
     * @return self
     */
    public function setUsers(array $users): self
    {
        $this->initialized['users'] = true;
        $this->users = $users;
        return $this;
    }
    /**
     * The list of team `slug`s with dismissal access
     *
     * @return list<string>
     */
    public function getTeams(): array
    {
        return $this->teams;
    }
    /**
     * The list of team `slug`s with dismissal access
     *
     * @param list<string> $teams
     *
     * @return self
     */
    public function setTeams(array $teams): self
    {
        $this->initialized['teams'] = true;
        $this->teams = $teams;
        return $this;
    }
}