<?php

namespace CreditSafe\API\Model;

class GbPeopleReportReponseReportDirectorshipsPreviousItemPosition extends \ArrayObject
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
     * @var string
     */
    protected $resignationDate;
    /**
     * @var string
     */
    protected $dateAppointed;
    /**
     * @var string
     */
    protected $positionName;
    /**
     * @return string
     */
    public function getResignationDate(): string
    {
        return $this->resignationDate;
    }
    /**
     * @param string $resignationDate
     *
     * @return self
     */
    public function setResignationDate(string $resignationDate): self
    {
        $this->initialized['resignationDate'] = true;
        $this->resignationDate = $resignationDate;
        return $this;
    }
    /**
     * @return string
     */
    public function getDateAppointed(): string
    {
        return $this->dateAppointed;
    }
    /**
     * @param string $dateAppointed
     *
     * @return self
     */
    public function setDateAppointed(string $dateAppointed): self
    {
        $this->initialized['dateAppointed'] = true;
        $this->dateAppointed = $dateAppointed;
        return $this;
    }
    /**
     * @return string
     */
    public function getPositionName(): string
    {
        return $this->positionName;
    }
    /**
     * @param string $positionName
     *
     * @return self
     */
    public function setPositionName(string $positionName): self
    {
        $this->initialized['positionName'] = true;
        $this->positionName = $positionName;
        return $this;
    }
}