<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Endpoint;

class FindUsersByIdOrUsername extends \Jane\Component\OpenApi3\Tests\Expected\Runtime\Client\BaseEndpoint implements \Jane\Component\OpenApi3\Tests\Expected\Runtime\Client\Endpoint
{
    protected $accept;
    /**
     * This endpoint returns information about users. You can specify users by their ID or screen name, or by a combination of the two.
     *
     * @param array $queryParameters {
     *     @var array $ids Required (unless using `usernames`). A list of User IDs, comma-separated. You can specify up to 100 IDs.
     *     @var array $usernames Required (unless using `ids`). A list of Twitter handles, comma-separated. You can specify up to 100 values.
     *     @var string $format Format for all the objects returned as part of the response, including expansions.
     *     @var string $tweet.format Format for all [Tweet](#Tweet) objects returned in response. Can be used together with other format parameters to expand or reduce Tweet objects only.
     *     @var string $user.format Format for all [User](#User) objects returned in response. Can be used together with other format parameters to expand or reduce User objects only.
     *     @var string $place.format Format for all place objects returned in response.
     *     @var array $expansions A comma separated list of fields to expand.
     * }
     * @param array $accept Accept content header application/json|application/problem+json
     */
    public function __construct(array $queryParameters = [], array $accept = [])
    {
        $this->queryParameters = $queryParameters;
        $this->accept = $accept;
    }
    use \Jane\Component\OpenApi3\Tests\Expected\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return '/labs/1/users';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }
    public function getExtraHeaders(): array
    {
        if (empty($this->accept)) {
            return ['Accept' => ['application/json', 'application/problem+json']];
        }
        return $this->accept;
    }
    protected function getQueryOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['ids', 'usernames', 'format', 'tweet.format', 'user.format', 'place.format', 'expansions']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('ids', ['array']);
        $optionsResolver->addAllowedTypes('usernames', ['array']);
        $optionsResolver->addAllowedTypes('format', ['string']);
        $optionsResolver->addAllowedTypes('tweet.format', ['string']);
        $optionsResolver->addAllowedTypes('user.format', ['string']);
        $optionsResolver->addAllowedTypes('place.format', ['string']);
        $optionsResolver->addAllowedTypes('expansions', ['array']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\Jane\Component\OpenApi3\Tests\Expected\Model\UserLookupResponse|\Jane\Component\OpenApi3\Tests\Expected\Model\Error
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Jane\Component\OpenApi3\Tests\Expected\Model\UserLookupResponse', 'json');
        }
        if (mb_strpos($contentType, 'application/json') !== false) {
            return $serializer->deserialize($body, 'Jane\Component\OpenApi3\Tests\Expected\Model\Error', 'json');
        }
        if (mb_strpos($contentType, 'application/problem+json') !== false) {
            return json_decode($body);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return [];
    }
}