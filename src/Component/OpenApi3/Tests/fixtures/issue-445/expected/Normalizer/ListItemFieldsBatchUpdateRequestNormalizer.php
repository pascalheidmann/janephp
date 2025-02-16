<?php

namespace PicturePark\API\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use PicturePark\API\Runtime\Normalizer\CheckArray;
use PicturePark\API\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\HttpKernel\Kernel;
if (!class_exists(Kernel::class) or (Kernel::MAJOR_VERSION >= 7 or Kernel::MAJOR_VERSION === 6 and Kernel::MINOR_VERSION === 4)) {
    class ListItemFieldsBatchUpdateRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \PicturePark\API\Model\ListItemFieldsBatchUpdateRequest::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \PicturePark\API\Model\ListItemFieldsBatchUpdateRequest::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \PicturePark\API\Model\ListItemFieldsBatchUpdateRequest();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('listItemIds', $data)) {
                $values = [];
                foreach ($data['listItemIds'] as $value) {
                    $values[] = $value;
                }
                $object->setListItemIds($values);
            }
            if (\array_key_exists('changeCommands', $data)) {
                $values_1 = [];
                foreach ($data['changeCommands'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, \PicturePark\API\Model\MetadataValuesChangeCommandBase::class, 'json', $context);
                }
                $object->setChangeCommands($values_1);
            }
            if (\array_key_exists('allowMissingDependencies', $data)) {
                $object->setAllowMissingDependencies($data['allowMissingDependencies']);
            }
            if (\array_key_exists('notifyProgress', $data)) {
                $object->setNotifyProgress($data['notifyProgress']);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            $values = [];
            foreach ($object->getListItemIds() as $value) {
                $values[] = $value;
            }
            $data['listItemIds'] = $values;
            $values_1 = [];
            foreach ($object->getChangeCommands() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['changeCommands'] = $values_1;
            $data['allowMissingDependencies'] = $object->getAllowMissingDependencies();
            $data['notifyProgress'] = $object->getNotifyProgress();
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\PicturePark\API\Model\ListItemFieldsBatchUpdateRequest::class => false];
        }
    }
} else {
    class ListItemFieldsBatchUpdateRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \PicturePark\API\Model\ListItemFieldsBatchUpdateRequest::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \PicturePark\API\Model\ListItemFieldsBatchUpdateRequest::class;
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
            $object = new \PicturePark\API\Model\ListItemFieldsBatchUpdateRequest();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('listItemIds', $data)) {
                $values = [];
                foreach ($data['listItemIds'] as $value) {
                    $values[] = $value;
                }
                $object->setListItemIds($values);
            }
            if (\array_key_exists('changeCommands', $data)) {
                $values_1 = [];
                foreach ($data['changeCommands'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, \PicturePark\API\Model\MetadataValuesChangeCommandBase::class, 'json', $context);
                }
                $object->setChangeCommands($values_1);
            }
            if (\array_key_exists('allowMissingDependencies', $data)) {
                $object->setAllowMissingDependencies($data['allowMissingDependencies']);
            }
            if (\array_key_exists('notifyProgress', $data)) {
                $object->setNotifyProgress($data['notifyProgress']);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            $values = [];
            foreach ($object->getListItemIds() as $value) {
                $values[] = $value;
            }
            $data['listItemIds'] = $values;
            $values_1 = [];
            foreach ($object->getChangeCommands() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['changeCommands'] = $values_1;
            $data['allowMissingDependencies'] = $object->getAllowMissingDependencies();
            $data['notifyProgress'] = $object->getNotifyProgress();
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\PicturePark\API\Model\ListItemFieldsBatchUpdateRequest::class => false];
        }
    }
}