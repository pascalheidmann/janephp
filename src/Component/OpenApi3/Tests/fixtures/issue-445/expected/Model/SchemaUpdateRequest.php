<?php

namespace PicturePark\API\Model;

class SchemaUpdateRequest
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
     * Language specific schema names.
     *
     * @var mixed|null
     */
    protected $names;
    /**
     * Language specific schema descriptions.
     *
     * @var mixed|null
     */
    protected $descriptions;
    /**
     * Language specific DotLiquid templates. These templates will be resolved into display values in content documents and/or list items.
     *
     * @var list<DisplayPattern>|null
     */
    protected $displayPatterns;
    /**
     * The schema fields.
     *
     * @var list<FieldBase>|null
     */
    protected $fields;
    /**
    * A list of schema fields overwrite information. It is used to overwrite the field configuration coming from the parent schema.
    Only a subset of properties of a FieldSingleTagbox and FieldMultiTagbox can be be overwritten. All other properties and fields cannot.
    *
    * @var list<FieldOverwriteBase>|null
    */
    protected $fieldsOverwrite;
    /**
    * An optional list of aggregations to show grouped list item documents. When aggregations are defined for a List,
    the UI uses such information to show the available filters and grouped results.
    *
    * @var list<AggregatorBase>|null
    */
    protected $aggregations;
    /**
    * Sorts content documents and/or list items. In order for the sorting to work properly, the Sortable property of the related field
    must be set to true. Multiple sorting is supported: they are applied in the specified order.
    *
    * @var list<SortInfo>|null
    */
    protected $sort;
    /**
     * Defines a schema as viewable by everyone. Everyone with ManageSchema user permission is able to see the schema.
     *
     * @var bool
     */
    protected $viewForAll;
    /**
     * An optional list of schema permission set IDs which control schema permissions.
     *
     * @var list<string>|null
     */
    protected $schemaPermissionSetIds;
    /**
     * An optional list of schemas' IDs with type layer. For a Content schema it stores the layers that can be assigned to a content.
     *
     * @var list<string>|null
     */
    protected $layerSchemaIds;
    /**
    * If the schema if of type Layer, the list contains the schemas with type Content
    that reference the layer.
    *
    * @var list<string>|null
    */
    protected $referencedInContentSchemaIds;
    /**
     * Language specific schema names.
     *
     * @return mixed
     */
    public function getNames()
    {
        return $this->names;
    }
    /**
     * Language specific schema names.
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
     * Language specific schema descriptions.
     *
     * @return mixed
     */
    public function getDescriptions()
    {
        return $this->descriptions;
    }
    /**
     * Language specific schema descriptions.
     *
     * @param mixed $descriptions
     *
     * @return self
     */
    public function setDescriptions($descriptions): self
    {
        $this->initialized['descriptions'] = true;
        $this->descriptions = $descriptions;
        return $this;
    }
    /**
     * Language specific DotLiquid templates. These templates will be resolved into display values in content documents and/or list items.
     *
     * @return list<DisplayPattern>|null
     */
    public function getDisplayPatterns(): ?array
    {
        return $this->displayPatterns;
    }
    /**
     * Language specific DotLiquid templates. These templates will be resolved into display values in content documents and/or list items.
     *
     * @param list<DisplayPattern>|null $displayPatterns
     *
     * @return self
     */
    public function setDisplayPatterns(?array $displayPatterns): self
    {
        $this->initialized['displayPatterns'] = true;
        $this->displayPatterns = $displayPatterns;
        return $this;
    }
    /**
     * The schema fields.
     *
     * @return list<FieldBase>|null
     */
    public function getFields(): ?array
    {
        return $this->fields;
    }
    /**
     * The schema fields.
     *
     * @param list<FieldBase>|null $fields
     *
     * @return self
     */
    public function setFields(?array $fields): self
    {
        $this->initialized['fields'] = true;
        $this->fields = $fields;
        return $this;
    }
    /**
    * A list of schema fields overwrite information. It is used to overwrite the field configuration coming from the parent schema.
    Only a subset of properties of a FieldSingleTagbox and FieldMultiTagbox can be be overwritten. All other properties and fields cannot.
    *
    * @return list<FieldOverwriteBase>|null
    */
    public function getFieldsOverwrite(): ?array
    {
        return $this->fieldsOverwrite;
    }
    /**
    * A list of schema fields overwrite information. It is used to overwrite the field configuration coming from the parent schema.
    Only a subset of properties of a FieldSingleTagbox and FieldMultiTagbox can be be overwritten. All other properties and fields cannot.
    *
    * @param list<FieldOverwriteBase>|null $fieldsOverwrite
    *
    * @return self
    */
    public function setFieldsOverwrite(?array $fieldsOverwrite): self
    {
        $this->initialized['fieldsOverwrite'] = true;
        $this->fieldsOverwrite = $fieldsOverwrite;
        return $this;
    }
    /**
    * An optional list of aggregations to show grouped list item documents. When aggregations are defined for a List,
    the UI uses such information to show the available filters and grouped results.
    *
    * @return list<AggregatorBase>|null
    */
    public function getAggregations(): ?array
    {
        return $this->aggregations;
    }
    /**
    * An optional list of aggregations to show grouped list item documents. When aggregations are defined for a List,
    the UI uses such information to show the available filters and grouped results.
    *
    * @param list<AggregatorBase>|null $aggregations
    *
    * @return self
    */
    public function setAggregations(?array $aggregations): self
    {
        $this->initialized['aggregations'] = true;
        $this->aggregations = $aggregations;
        return $this;
    }
    /**
    * Sorts content documents and/or list items. In order for the sorting to work properly, the Sortable property of the related field
    must be set to true. Multiple sorting is supported: they are applied in the specified order.
    *
    * @return list<SortInfo>|null
    */
    public function getSort(): ?array
    {
        return $this->sort;
    }
    /**
    * Sorts content documents and/or list items. In order for the sorting to work properly, the Sortable property of the related field
    must be set to true. Multiple sorting is supported: they are applied in the specified order.
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
     * Defines a schema as viewable by everyone. Everyone with ManageSchema user permission is able to see the schema.
     *
     * @return bool
     */
    public function getViewForAll(): bool
    {
        return $this->viewForAll;
    }
    /**
     * Defines a schema as viewable by everyone. Everyone with ManageSchema user permission is able to see the schema.
     *
     * @param bool $viewForAll
     *
     * @return self
     */
    public function setViewForAll(bool $viewForAll): self
    {
        $this->initialized['viewForAll'] = true;
        $this->viewForAll = $viewForAll;
        return $this;
    }
    /**
     * An optional list of schema permission set IDs which control schema permissions.
     *
     * @return list<string>|null
     */
    public function getSchemaPermissionSetIds(): ?array
    {
        return $this->schemaPermissionSetIds;
    }
    /**
     * An optional list of schema permission set IDs which control schema permissions.
     *
     * @param list<string>|null $schemaPermissionSetIds
     *
     * @return self
     */
    public function setSchemaPermissionSetIds(?array $schemaPermissionSetIds): self
    {
        $this->initialized['schemaPermissionSetIds'] = true;
        $this->schemaPermissionSetIds = $schemaPermissionSetIds;
        return $this;
    }
    /**
     * An optional list of schemas' IDs with type layer. For a Content schema it stores the layers that can be assigned to a content.
     *
     * @return list<string>|null
     */
    public function getLayerSchemaIds(): ?array
    {
        return $this->layerSchemaIds;
    }
    /**
     * An optional list of schemas' IDs with type layer. For a Content schema it stores the layers that can be assigned to a content.
     *
     * @param list<string>|null $layerSchemaIds
     *
     * @return self
     */
    public function setLayerSchemaIds(?array $layerSchemaIds): self
    {
        $this->initialized['layerSchemaIds'] = true;
        $this->layerSchemaIds = $layerSchemaIds;
        return $this;
    }
    /**
    * If the schema if of type Layer, the list contains the schemas with type Content
    that reference the layer.
    *
    * @return list<string>|null
    */
    public function getReferencedInContentSchemaIds(): ?array
    {
        return $this->referencedInContentSchemaIds;
    }
    /**
    * If the schema if of type Layer, the list contains the schemas with type Content
    that reference the layer.
    *
    * @param list<string>|null $referencedInContentSchemaIds
    *
    * @return self
    */
    public function setReferencedInContentSchemaIds(?array $referencedInContentSchemaIds): self
    {
        $this->initialized['referencedInContentSchemaIds'] = true;
        $this->referencedInContentSchemaIds = $referencedInContentSchemaIds;
        return $this;
    }
}