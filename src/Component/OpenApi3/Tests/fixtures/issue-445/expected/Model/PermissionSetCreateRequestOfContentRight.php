<?php

namespace PicturePark\API\Model;

class PermissionSetCreateRequestOfContentRight
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
     * Language specific permission set names.
     *
     * @var mixed
     */
    protected $names;
    /**
     * A list of content or metadata rights authorizing operations on Content Items or List Items.
     *
     * @var list<UserRoleRightsOfContentRight>|null
     */
    protected $userRolesRights;
    /**
     * A list of permission set rights authorizing operations on this permission set.
     *
     * @var list<UserRoleRightsOfPermissionSetRight>|null
     */
    protected $userRolesPermissionSetRights;
    /**
     * When true this permission set will derogate all other configured permission sets on Content Items or List Items.
     *
     * @var bool
     */
    protected $exclusive;
    /**
     * Optional client reference for this request.
     * Will be returned back in response to make easier for clients to match request items with the respective results.
     * It is not persisted anywhere and it is ignored in single operations.
     *
     * @var string|null
     */
    protected $requestId;
    /**
     * Language specific permission set names.
     *
     * @return mixed
     */
    public function getNames()
    {
        return $this->names;
    }
    /**
     * Language specific permission set names.
     *
     * @param mixed $names
     *
     * @return self
     */
    public function setNames($names): self
    {
        $this->initialized['names'] = true;
        $this->names = $names;
        return $this;
    }
    /**
     * A list of content or metadata rights authorizing operations on Content Items or List Items.
     *
     * @return list<UserRoleRightsOfContentRight>|null
     */
    public function getUserRolesRights(): ?array
    {
        return $this->userRolesRights;
    }
    /**
     * A list of content or metadata rights authorizing operations on Content Items or List Items.
     *
     * @param list<UserRoleRightsOfContentRight>|null $userRolesRights
     *
     * @return self
     */
    public function setUserRolesRights(?array $userRolesRights): self
    {
        $this->initialized['userRolesRights'] = true;
        $this->userRolesRights = $userRolesRights;
        return $this;
    }
    /**
     * A list of permission set rights authorizing operations on this permission set.
     *
     * @return list<UserRoleRightsOfPermissionSetRight>|null
     */
    public function getUserRolesPermissionSetRights(): ?array
    {
        return $this->userRolesPermissionSetRights;
    }
    /**
     * A list of permission set rights authorizing operations on this permission set.
     *
     * @param list<UserRoleRightsOfPermissionSetRight>|null $userRolesPermissionSetRights
     *
     * @return self
     */
    public function setUserRolesPermissionSetRights(?array $userRolesPermissionSetRights): self
    {
        $this->initialized['userRolesPermissionSetRights'] = true;
        $this->userRolesPermissionSetRights = $userRolesPermissionSetRights;
        return $this;
    }
    /**
     * When true this permission set will derogate all other configured permission sets on Content Items or List Items.
     *
     * @return bool
     */
    public function getExclusive(): bool
    {
        return $this->exclusive;
    }
    /**
     * When true this permission set will derogate all other configured permission sets on Content Items or List Items.
     *
     * @param bool $exclusive
     *
     * @return self
     */
    public function setExclusive(bool $exclusive): self
    {
        $this->initialized['exclusive'] = true;
        $this->exclusive = $exclusive;
        return $this;
    }
    /**
     * Optional client reference for this request.
     * Will be returned back in response to make easier for clients to match request items with the respective results.
     * It is not persisted anywhere and it is ignored in single operations.
     *
     * @return string|null
     */
    public function getRequestId(): ?string
    {
        return $this->requestId;
    }
    /**
    * Optional client reference for this request.
    Will be returned back in response to make easier for clients to match request items with the respective results.
    It is not persisted anywhere and it is ignored in single operations.
    *
    * @param string|null $requestId
    *
    * @return self
    */
    public function setRequestId(?string $requestId): self
    {
        $this->initialized['requestId'] = true;
        $this->requestId = $requestId;
        return $this;
    }
}