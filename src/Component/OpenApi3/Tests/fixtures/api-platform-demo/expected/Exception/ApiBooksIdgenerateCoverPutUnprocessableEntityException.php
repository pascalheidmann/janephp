<?php

namespace ApiPlatform\Demo\Exception;

class ApiBooksIdgenerateCoverPutUnprocessableEntityException extends UnprocessableEntityException
{
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\Psr\Http\Message\ResponseInterface $response = null)
    {
        parent::__construct('Unprocessable entity');
        $this->response = $response;
    }
    public function getResponse(): ?\Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}