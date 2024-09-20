<?php

namespace PicturePark\API\Model;

class SchemaSearchRequest
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
     * The string used to query the data. The Lucene query string syntax is supported.
     *
     * @var string|null
     */
    protected $searchString;
    /**
     * An optional list of search behaviors. All the passed behaviors will be applied in the specified order.
     *
     * @var list<string>|null
     */
    protected $searchBehaviors;
    /**
     * Sorts the search results. Currently only sorting on the Names property is allowed.
     *
     * @var list<SortInfo>|null
     */
    protected $sort;
    /**
     * Limits the number of the returned schemas. Defaults to 30.
     *
     * @var int
     */
    protected $limit = 30;
    /**
     * The token used to retrieve the next page of results. It must be null on first request and only filled with the returned pageToken to request next page of results.
     *
     * @var string|null
     */
    protected $pageToken;
    /**
     * An optional filter to limit the schemas.
     *
     * @var mixed|null
     */
    protected $filter;
    /**
     * Enable debug mode: additional debug information regarding the query execution and reason of the matched documents are returned in the SchemaSearchResult.
     * Warning! It severely affects performance.
     *
     * @var bool
     */
    protected $debugMode = false;
    /**
     * When searching in multi language fields, limit the searchable fields to the ones corresponding to the specified languages.
     * If not specified, all metadata languages in the system are used.
     *
     * @var list<string>|null
     */
    protected $searchLanguages;
    /**
     * Limits the schemas to the ones the user has the specified MetadataRights.
     *
     * @var list<string>|null
     */
    protected $rightsFilter;
    /**
     * The string used to query the data. The Lucene query string syntax is supported.
     *
     * @return string|null
     */
    public function getSearchString(): ?string
    {
        return $this->searchString;
    }
    /**
     * The string used to query the data. The Lucene query string syntax is supported.
     *
     * @param string|null $searchString
     *
     * @return self
     */
    public function setSearchString(?string $searchString): self
    {
        $this->initialized['searchString'] = true;
        $this->searchString = $searchString;
        return $this;
    }
    /**
     * An optional list of search behaviors. All the passed behaviors will be applied in the specified order.
     *
     * @return list<string>|null
     */
    public function getSearchBehaviors(): ?array
    {
        return $this->searchBehaviors;
    }
    /**
     * An optional list of search behaviors. All the passed behaviors will be applied in the specified order.
     *
     * @param list<string>|null $searchBehaviors
     *
     * @return self
     */
    public function setSearchBehaviors(?array $searchBehaviors): self
    {
        $this->initialized['searchBehaviors'] = true;
        $this->searchBehaviors = $searchBehaviors;
        return $this;
    }
    /**
     * Sorts the search results. Currently only sorting on the Names property is allowed.
     *
     * @return list<SortInfo>|null
     */
    public function getSort(): ?array
    {
        return $this->sort;
    }
    /**
     * Sorts the search results. Currently only sorting on the Names property is allowed.
     *
     * @param list<SortInfo>|null $sort
     *
     * @return self
     */
    public function setSort(?array $sort): self
    {
        $this->initialized['sort'] = true;
        $this->sort = $sort;
        return $this;
    }
    /**
     * Limits the number of the returned schemas. Defaults to 30.
     *
     * @return int
     */
    public function getLimit(): int
    {
        return $this->limit;
    }
    /**
     * Limits the number of the returned schemas. Defaults to 30.
     *
     * @param int $limit
     *
     * @return self
     */
    public function setLimit(int $limit): self
    {
        $this->initialized['limit'] = true;
        $this->limit = $limit;
        return $this;
    }
    /**
     * The token used to retrieve the next page of results. It must be null on first request and only filled with the returned pageToken to request next page of results.
     *
     * @return string|null
     */
    public function getPageToken(): ?string
    {
        return $this->pageToken;
    }
    /**
     * The token used to retrieve the next page of results. It must be null on first request and only filled with the returned pageToken to request next page of results.
     *
     * @param string|null $pageToken
     *
     * @return self
     */
    public function setPageToken(?string $pageToken): self
    {
        $this->initialized['pageToken'] = true;
        $this->pageToken = $pageToken;
        return $this;
    }
    /**
     * An optional filter to limit the schemas.
     *
     * @return mixed
     */
    public function getFilter()
    {
        return $this->filter;
    }
    /**
     * An optional filter to limit the schemas.
     *
     * @param mixed $filter
     *
     * @return self
     */
    public function setFilter($filter): self
    {
        $this->initialized['filter'] = true;
        $this->filter = $filter;
        return $this;
    }
    /**
     * Enable debug mode: additional debug information regarding the query execution and reason of the matched documents are returned in the SchemaSearchResult.
     * Warning! It severely affects performance.
     *
     * @return bool
     */
    public function getDebugMode(): bool
    {
        return $this->debugMode;
    }
    /**
    * Enable debug mode: additional debug information regarding the query execution and reason of the matched documents are returned in the SchemaSearchResult.
    Warning! It severely affects performance.
    *
    * @param bool $debugMode
    *
    * @return self
    */
    public function setDebugMode(bool $debugMode): self
    {
        $this->initialized['debugMode'] = true;
        $this->debugMode = $debugMode;
        return $this;
    }
    /**
     * When searching in multi language fields, limit the searchable fields to the ones corresponding to the specified languages.
     * If not specified, all metadata languages in the system are used.
     *
     * @return list<string>|null
     */
    public function getSearchLanguages(): ?array
    {
        return $this->searchLanguages;
    }
    /**
    * When searching in multi language fields, limit the searchable fields to the ones corresponding to the specified languages.
    If not specified, all metadata languages in the system are used.
    *
    * @param list<string>|null $searchLanguages
    *
    * @return self
    */
    public function setSearchLanguages(?array $searchLanguages): self
    {
        $this->initialized['searchLanguages'] = true;
        $this->searchLanguages = $searchLanguages;
        return $this;
    }
    /**
     * Limits the schemas to the ones the user has the specified MetadataRights.
     *
     * @return list<string>|null
     */
    public function getRightsFilter(): ?array
    {
        return $this->rightsFilter;
    }
    /**
     * Limits the schemas to the ones the user has the specified MetadataRights.
     *
     * @param list<string>|null $rightsFilter
     *
     * @return self
     */
    public function setRightsFilter(?array $rightsFilter): self
    {
        $this->initialized['rightsFilter'] = true;
        $this->rightsFilter = $rightsFilter;
        return $this;
    }
}