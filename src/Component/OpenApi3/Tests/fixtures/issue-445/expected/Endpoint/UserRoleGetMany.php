<?php

namespace PicturePark\API\Endpoint;

class UserRoleGetMany extends \PicturePark\API\Runtime\Client\BaseEndpoint implements \PicturePark\API\Runtime\Client\Endpoint
{
    /**
     * Gets multiple user role details by the user role IDs. Can fetch maximum of 100 user roles at once.
     *
     * @param array $queryParameters {
     *     @var array $ids User role IDs to get information about.
     * }
     */
    public function __construct(array $queryParameters = [])
    {
        $this->queryParameters = $queryParameters;
    }
    use \PicturePark\API\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return '/v1/UserRoles';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }
    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }
    protected function getQueryOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['ids']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('ids', ['array', 'null']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \PicturePark\API\Exception\UserRoleGetManyBadRequestException
     * @throws \PicturePark\API\Exception\UserRoleGetManyUnauthorizedException
     * @throws \PicturePark\API\Exception\UserRoleGetManyNotFoundException
     * @throws \PicturePark\API\Exception\UserRoleGetManyMethodNotAllowedException
     * @throws \PicturePark\API\Exception\UserRoleGetManyConflictException
     * @throws \PicturePark\API\Exception\UserRoleGetManyTooManyRequestsException
     * @throws \PicturePark\API\Exception\UserRoleGetManyInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\UserRoleDetail[]
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'PicturePark\API\Model\UserRoleDetail[]', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\UserRoleGetManyBadRequestException($serializer->deserialize($body, 'PicturePark\API\Model\RequestSizeLimitExceededException', 'json'), $response);
        }
        if (401 === $status) {
            throw new \PicturePark\API\Exception\UserRoleGetManyUnauthorizedException($response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\UserRoleGetManyNotFoundException($serializer->deserialize($body, 'PicturePark\API\Model\PictureparkNotFoundException', 'json'), $response);
        }
        if (405 === $status) {
            throw new \PicturePark\API\Exception\UserRoleGetManyMethodNotAllowedException($response);
        }
        if (is_null($contentType) === false && (409 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\UserRoleGetManyConflictException($serializer->deserialize($body, 'PicturePark\API\Model\PictureparkConflictException', 'json'), $response);
        }
        if (429 === $status) {
            throw new \PicturePark\API\Exception\UserRoleGetManyTooManyRequestsException($response);
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\UserRoleGetManyInternalServerErrorException($serializer->deserialize($body, 'PicturePark\API\Model\PictureparkException', 'json'), $response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['Bearer'];
    }
}