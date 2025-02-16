<?php

namespace CreditSafe\API\Model;

class GbCompanyReportExampleResponseReportCompanySummary extends \ArrayObject
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
     * 
     *
     * @var string
     */
    protected $businessName;
    /**
     * 
     *
     * @var string
     */
    protected $country;
    /**
     * 
     *
     * @var string
     */
    protected $companyNumber;
    /**
     * 
     *
     * @var string
     */
    protected $companyRegistrationNumber;
    /**
     * 
     *
     * @var GbCompanyReportExampleResponseReportCompanySummaryMainActivity
     */
    protected $mainActivity;
    /**
     * 
     *
     * @var GbCompanyReportExampleResponseReportCompanySummaryCompanyStatus
     */
    protected $companyStatus;
    /**
     * 
     *
     * @var GbCompanyReportExampleResponseReportCompanySummaryLatestTurnoverFigure
     */
    protected $latestTurnoverFigure;
    /**
     * 
     *
     * @var GbCompanyReportExampleResponseReportCompanySummaryLatestShareholdersEquityFigure
     */
    protected $latestShareholdersEquityFigure;
    /**
     * 
     *
     * @var GbCompanyReportExampleResponseReportCompanySummaryCreditRating
     */
    protected $creditRating;
    /**
     * 
     *
     * @return string
     */
    public function getBusinessName(): string
    {
        return $this->businessName;
    }
    /**
     * 
     *
     * @param string $businessName
     *
     * @return self
     */
    public function setBusinessName(string $businessName): self
    {
        $this->initialized['businessName'] = true;
        $this->businessName = $businessName;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCountry(): string
    {
        return $this->country;
    }
    /**
     * 
     *
     * @param string $country
     *
     * @return self
     */
    public function setCountry(string $country): self
    {
        $this->initialized['country'] = true;
        $this->country = $country;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCompanyNumber(): string
    {
        return $this->companyNumber;
    }
    /**
     * 
     *
     * @param string $companyNumber
     *
     * @return self
     */
    public function setCompanyNumber(string $companyNumber): self
    {
        $this->initialized['companyNumber'] = true;
        $this->companyNumber = $companyNumber;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCompanyRegistrationNumber(): string
    {
        return $this->companyRegistrationNumber;
    }
    /**
     * 
     *
     * @param string $companyRegistrationNumber
     *
     * @return self
     */
    public function setCompanyRegistrationNumber(string $companyRegistrationNumber): self
    {
        $this->initialized['companyRegistrationNumber'] = true;
        $this->companyRegistrationNumber = $companyRegistrationNumber;
        return $this;
    }
    /**
     * 
     *
     * @return GbCompanyReportExampleResponseReportCompanySummaryMainActivity
     */
    public function getMainActivity(): GbCompanyReportExampleResponseReportCompanySummaryMainActivity
    {
        return $this->mainActivity;
    }
    /**
     * 
     *
     * @param GbCompanyReportExampleResponseReportCompanySummaryMainActivity $mainActivity
     *
     * @return self
     */
    public function setMainActivity(GbCompanyReportExampleResponseReportCompanySummaryMainActivity $mainActivity): self
    {
        $this->initialized['mainActivity'] = true;
        $this->mainActivity = $mainActivity;
        return $this;
    }
    /**
     * 
     *
     * @return GbCompanyReportExampleResponseReportCompanySummaryCompanyStatus
     */
    public function getCompanyStatus(): GbCompanyReportExampleResponseReportCompanySummaryCompanyStatus
    {
        return $this->companyStatus;
    }
    /**
     * 
     *
     * @param GbCompanyReportExampleResponseReportCompanySummaryCompanyStatus $companyStatus
     *
     * @return self
     */
    public function setCompanyStatus(GbCompanyReportExampleResponseReportCompanySummaryCompanyStatus $companyStatus): self
    {
        $this->initialized['companyStatus'] = true;
        $this->companyStatus = $companyStatus;
        return $this;
    }
    /**
     * 
     *
     * @return GbCompanyReportExampleResponseReportCompanySummaryLatestTurnoverFigure
     */
    public function getLatestTurnoverFigure(): GbCompanyReportExampleResponseReportCompanySummaryLatestTurnoverFigure
    {
        return $this->latestTurnoverFigure;
    }
    /**
     * 
     *
     * @param GbCompanyReportExampleResponseReportCompanySummaryLatestTurnoverFigure $latestTurnoverFigure
     *
     * @return self
     */
    public function setLatestTurnoverFigure(GbCompanyReportExampleResponseReportCompanySummaryLatestTurnoverFigure $latestTurnoverFigure): self
    {
        $this->initialized['latestTurnoverFigure'] = true;
        $this->latestTurnoverFigure = $latestTurnoverFigure;
        return $this;
    }
    /**
     * 
     *
     * @return GbCompanyReportExampleResponseReportCompanySummaryLatestShareholdersEquityFigure
     */
    public function getLatestShareholdersEquityFigure(): GbCompanyReportExampleResponseReportCompanySummaryLatestShareholdersEquityFigure
    {
        return $this->latestShareholdersEquityFigure;
    }
    /**
     * 
     *
     * @param GbCompanyReportExampleResponseReportCompanySummaryLatestShareholdersEquityFigure $latestShareholdersEquityFigure
     *
     * @return self
     */
    public function setLatestShareholdersEquityFigure(GbCompanyReportExampleResponseReportCompanySummaryLatestShareholdersEquityFigure $latestShareholdersEquityFigure): self
    {
        $this->initialized['latestShareholdersEquityFigure'] = true;
        $this->latestShareholdersEquityFigure = $latestShareholdersEquityFigure;
        return $this;
    }
    /**
     * 
     *
     * @return GbCompanyReportExampleResponseReportCompanySummaryCreditRating
     */
    public function getCreditRating(): GbCompanyReportExampleResponseReportCompanySummaryCreditRating
    {
        return $this->creditRating;
    }
    /**
     * 
     *
     * @param GbCompanyReportExampleResponseReportCompanySummaryCreditRating $creditRating
     *
     * @return self
     */
    public function setCreditRating(GbCompanyReportExampleResponseReportCompanySummaryCreditRating $creditRating): self
    {
        $this->initialized['creditRating'] = true;
        $this->creditRating = $creditRating;
        return $this;
    }
}