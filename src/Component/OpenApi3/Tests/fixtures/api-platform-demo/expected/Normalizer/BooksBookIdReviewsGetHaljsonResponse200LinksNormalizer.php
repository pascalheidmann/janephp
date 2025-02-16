<?php

namespace ApiPlatform\Demo\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use ApiPlatform\Demo\Runtime\Normalizer\CheckArray;
use ApiPlatform\Demo\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\HttpKernel\Kernel;
if (!class_exists(Kernel::class) or (Kernel::MAJOR_VERSION >= 7 or Kernel::MAJOR_VERSION === 6 and Kernel::MINOR_VERSION === 4)) {
    class BooksBookIdReviewsGetHaljsonResponse200LinksNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \ApiPlatform\Demo\Model\BooksBookIdReviewsGetHaljsonResponse200Links::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \ApiPlatform\Demo\Model\BooksBookIdReviewsGetHaljsonResponse200Links::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \ApiPlatform\Demo\Model\BooksBookIdReviewsGetHaljsonResponse200Links();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('self', $data)) {
                $object->setSelf($this->denormalizer->denormalize($data['self'], \ApiPlatform\Demo\Model\BooksBookIdReviewsGetHaljsonResponse200LinksSelf::class, 'json', $context));
                unset($data['self']);
            }
            if (\array_key_exists('first', $data)) {
                $object->setFirst($this->denormalizer->denormalize($data['first'], \ApiPlatform\Demo\Model\BooksBookIdReviewsGetHaljsonResponse200LinksFirst::class, 'json', $context));
                unset($data['first']);
            }
            if (\array_key_exists('last', $data)) {
                $object->setLast($this->denormalizer->denormalize($data['last'], \ApiPlatform\Demo\Model\BooksBookIdReviewsGetHaljsonResponse200LinksLast::class, 'json', $context));
                unset($data['last']);
            }
            if (\array_key_exists('next', $data)) {
                $object->setNext($this->denormalizer->denormalize($data['next'], \ApiPlatform\Demo\Model\BooksBookIdReviewsGetHaljsonResponse200LinksNext::class, 'json', $context));
                unset($data['next']);
            }
            if (\array_key_exists('previous', $data)) {
                $object->setPrevious($this->denormalizer->denormalize($data['previous'], \ApiPlatform\Demo\Model\BooksBookIdReviewsGetHaljsonResponse200LinksPrevious::class, 'json', $context));
                unset($data['previous']);
            }
            foreach ($data as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value;
                }
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('self') && null !== $object->getSelf()) {
                $data['self'] = $this->normalizer->normalize($object->getSelf(), 'json', $context);
            }
            if ($object->isInitialized('first') && null !== $object->getFirst()) {
                $data['first'] = $this->normalizer->normalize($object->getFirst(), 'json', $context);
            }
            if ($object->isInitialized('last') && null !== $object->getLast()) {
                $data['last'] = $this->normalizer->normalize($object->getLast(), 'json', $context);
            }
            if ($object->isInitialized('next') && null !== $object->getNext()) {
                $data['next'] = $this->normalizer->normalize($object->getNext(), 'json', $context);
            }
            if ($object->isInitialized('previous') && null !== $object->getPrevious()) {
                $data['previous'] = $this->normalizer->normalize($object->getPrevious(), 'json', $context);
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\ApiPlatform\Demo\Model\BooksBookIdReviewsGetHaljsonResponse200Links::class => false];
        }
    }
} else {
    class BooksBookIdReviewsGetHaljsonResponse200LinksNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \ApiPlatform\Demo\Model\BooksBookIdReviewsGetHaljsonResponse200Links::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \ApiPlatform\Demo\Model\BooksBookIdReviewsGetHaljsonResponse200Links::class;
        }
        /**
         * @return mixed
         */
        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \ApiPlatform\Demo\Model\BooksBookIdReviewsGetHaljsonResponse200Links();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('self', $data)) {
                $object->setSelf($this->denormalizer->denormalize($data['self'], \ApiPlatform\Demo\Model\BooksBookIdReviewsGetHaljsonResponse200LinksSelf::class, 'json', $context));
                unset($data['self']);
            }
            if (\array_key_exists('first', $data)) {
                $object->setFirst($this->denormalizer->denormalize($data['first'], \ApiPlatform\Demo\Model\BooksBookIdReviewsGetHaljsonResponse200LinksFirst::class, 'json', $context));
                unset($data['first']);
            }
            if (\array_key_exists('last', $data)) {
                $object->setLast($this->denormalizer->denormalize($data['last'], \ApiPlatform\Demo\Model\BooksBookIdReviewsGetHaljsonResponse200LinksLast::class, 'json', $context));
                unset($data['last']);
            }
            if (\array_key_exists('next', $data)) {
                $object->setNext($this->denormalizer->denormalize($data['next'], \ApiPlatform\Demo\Model\BooksBookIdReviewsGetHaljsonResponse200LinksNext::class, 'json', $context));
                unset($data['next']);
            }
            if (\array_key_exists('previous', $data)) {
                $object->setPrevious($this->denormalizer->denormalize($data['previous'], \ApiPlatform\Demo\Model\BooksBookIdReviewsGetHaljsonResponse200LinksPrevious::class, 'json', $context));
                unset($data['previous']);
            }
            foreach ($data as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value;
                }
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('self') && null !== $object->getSelf()) {
                $data['self'] = $this->normalizer->normalize($object->getSelf(), 'json', $context);
            }
            if ($object->isInitialized('first') && null !== $object->getFirst()) {
                $data['first'] = $this->normalizer->normalize($object->getFirst(), 'json', $context);
            }
            if ($object->isInitialized('last') && null !== $object->getLast()) {
                $data['last'] = $this->normalizer->normalize($object->getLast(), 'json', $context);
            }
            if ($object->isInitialized('next') && null !== $object->getNext()) {
                $data['next'] = $this->normalizer->normalize($object->getNext(), 'json', $context);
            }
            if ($object->isInitialized('previous') && null !== $object->getPrevious()) {
                $data['previous'] = $this->normalizer->normalize($object->getPrevious(), 'json', $context);
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\ApiPlatform\Demo\Model\BooksBookIdReviewsGetHaljsonResponse200Links::class => false];
        }
    }
}