<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Jane\OpenApi\JsonSchema\Model;

class Responses extends \ArrayObject
{
    /**
     * @var Response|Reference|null
     */
    protected $default;

    /**
     * @return Response|Reference|null
     */
    public function getDefault()
    {
        return $this->default;
    }

    /**
     * @param Response|Reference|null $default
     *
     * @return self
     */
    public function setDefault($default): self
    {
        $this->default = $default;

        return $this;
    }
}
