<?php

namespace Github\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Github\Runtime\Normalizer\CheckArray;
use Github\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\HttpKernel\Kernel;
if (!class_exists(Kernel::class) or (Kernel::MAJOR_VERSION >= 7 or Kernel::MAJOR_VERSION === 6 and Kernel::MINOR_VERSION === 4)) {
    class ReposOwnerRepoContentsPathDeleteBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \Github\Model\ReposOwnerRepoContentsPathDeleteBody::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Github\Model\ReposOwnerRepoContentsPathDeleteBody::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Github\Model\ReposOwnerRepoContentsPathDeleteBody();
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\ReposOwnerRepoContentsPathDeleteBodyConstraint());
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('message', $data)) {
                $object->setMessage($data['message']);
                unset($data['message']);
            }
            if (\array_key_exists('sha', $data)) {
                $object->setSha($data['sha']);
                unset($data['sha']);
            }
            if (\array_key_exists('branch', $data)) {
                $object->setBranch($data['branch']);
                unset($data['branch']);
            }
            if (\array_key_exists('committer', $data)) {
                $object->setCommitter($this->denormalizer->denormalize($data['committer'], \Github\Model\ReposOwnerRepoContentsPathDeleteBodyCommitter::class, 'json', $context));
                unset($data['committer']);
            }
            if (\array_key_exists('author', $data)) {
                $object->setAuthor($this->denormalizer->denormalize($data['author'], \Github\Model\ReposOwnerRepoContentsPathDeleteBodyAuthor::class, 'json', $context));
                unset($data['author']);
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
            $data['message'] = $object->getMessage();
            $data['sha'] = $object->getSha();
            if ($object->isInitialized('branch') && null !== $object->getBranch()) {
                $data['branch'] = $object->getBranch();
            }
            if ($object->isInitialized('committer') && null !== $object->getCommitter()) {
                $data['committer'] = $this->normalizer->normalize($object->getCommitter(), 'json', $context);
            }
            if ($object->isInitialized('author') && null !== $object->getAuthor()) {
                $data['author'] = $this->normalizer->normalize($object->getAuthor(), 'json', $context);
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\ReposOwnerRepoContentsPathDeleteBodyConstraint());
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Github\Model\ReposOwnerRepoContentsPathDeleteBody::class => false];
        }
    }
} else {
    class ReposOwnerRepoContentsPathDeleteBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \Github\Model\ReposOwnerRepoContentsPathDeleteBody::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Github\Model\ReposOwnerRepoContentsPathDeleteBody::class;
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
            $object = new \Github\Model\ReposOwnerRepoContentsPathDeleteBody();
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\ReposOwnerRepoContentsPathDeleteBodyConstraint());
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('message', $data)) {
                $object->setMessage($data['message']);
                unset($data['message']);
            }
            if (\array_key_exists('sha', $data)) {
                $object->setSha($data['sha']);
                unset($data['sha']);
            }
            if (\array_key_exists('branch', $data)) {
                $object->setBranch($data['branch']);
                unset($data['branch']);
            }
            if (\array_key_exists('committer', $data)) {
                $object->setCommitter($this->denormalizer->denormalize($data['committer'], \Github\Model\ReposOwnerRepoContentsPathDeleteBodyCommitter::class, 'json', $context));
                unset($data['committer']);
            }
            if (\array_key_exists('author', $data)) {
                $object->setAuthor($this->denormalizer->denormalize($data['author'], \Github\Model\ReposOwnerRepoContentsPathDeleteBodyAuthor::class, 'json', $context));
                unset($data['author']);
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
            $data['message'] = $object->getMessage();
            $data['sha'] = $object->getSha();
            if ($object->isInitialized('branch') && null !== $object->getBranch()) {
                $data['branch'] = $object->getBranch();
            }
            if ($object->isInitialized('committer') && null !== $object->getCommitter()) {
                $data['committer'] = $this->normalizer->normalize($object->getCommitter(), 'json', $context);
            }
            if ($object->isInitialized('author') && null !== $object->getAuthor()) {
                $data['author'] = $this->normalizer->normalize($object->getAuthor(), 'json', $context);
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\ReposOwnerRepoContentsPathDeleteBodyConstraint());
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Github\Model\ReposOwnerRepoContentsPathDeleteBody::class => false];
        }
    }
}