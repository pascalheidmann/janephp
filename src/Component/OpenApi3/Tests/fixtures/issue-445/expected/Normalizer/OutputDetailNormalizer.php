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
    class OutputDetailNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \PicturePark\API\Model\OutputDetail::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \PicturePark\API\Model\OutputDetail::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \PicturePark\API\Model\OutputDetail();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('id', $data) && $data['id'] !== null) {
                $object->setId($data['id']);
                unset($data['id']);
            }
            elseif (\array_key_exists('id', $data) && $data['id'] === null) {
                $object->setId(null);
            }
            if (\array_key_exists('outputFormatId', $data)) {
                $object->setOutputFormatId($data['outputFormatId']);
                unset($data['outputFormatId']);
            }
            if (\array_key_exists('contentId', $data)) {
                $object->setContentId($data['contentId']);
                unset($data['contentId']);
            }
            if (\array_key_exists('renderingState', $data)) {
                $object->setRenderingState($data['renderingState']);
                unset($data['renderingState']);
            }
            if (\array_key_exists('detail', $data) && $data['detail'] !== null) {
                $object->setDetail($data['detail']);
                unset($data['detail']);
            }
            elseif (\array_key_exists('detail', $data) && $data['detail'] === null) {
                $object->setDetail(null);
            }
            if (\array_key_exists('backupTimestamp', $data) && $data['backupTimestamp'] !== null) {
                $object->setBackupTimestamp(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['backupTimestamp']));
                unset($data['backupTimestamp']);
            }
            elseif (\array_key_exists('backupTimestamp', $data) && $data['backupTimestamp'] === null) {
                $object->setBackupTimestamp(null);
            }
            if (\array_key_exists('attemptsLeft', $data)) {
                $object->setAttemptsLeft($data['attemptsLeft']);
                unset($data['attemptsLeft']);
            }
            if (\array_key_exists('fileVersion', $data)) {
                $object->setFileVersion($data['fileVersion']);
                unset($data['fileVersion']);
            }
            if (\array_key_exists('dynamicRendering', $data)) {
                $object->setDynamicRendering($data['dynamicRendering']);
                unset($data['dynamicRendering']);
            }
            if (\array_key_exists('kind', $data)) {
                $object->setKind($data['kind']);
                unset($data['kind']);
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
            if ($object->isInitialized('id') && null !== $object->getId()) {
                $data['id'] = $object->getId();
            }
            $data['outputFormatId'] = $object->getOutputFormatId();
            $data['contentId'] = $object->getContentId();
            $data['renderingState'] = $object->getRenderingState();
            if ($object->isInitialized('detail') && null !== $object->getDetail()) {
                $data['detail'] = $object->getDetail();
            }
            if ($object->isInitialized('backupTimestamp') && null !== $object->getBackupTimestamp()) {
                $data['backupTimestamp'] = $object->getBackupTimestamp()->format('Y-m-d\TH:i:sP');
            }
            $data['attemptsLeft'] = $object->getAttemptsLeft();
            $data['fileVersion'] = $object->getFileVersion();
            $data['dynamicRendering'] = $object->getDynamicRendering();
            $data['kind'] = $object->getKind();
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\PicturePark\API\Model\OutputDetail::class => false];
        }
    }
} else {
    class OutputDetailNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \PicturePark\API\Model\OutputDetail::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \PicturePark\API\Model\OutputDetail::class;
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
            $object = new \PicturePark\API\Model\OutputDetail();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('id', $data) && $data['id'] !== null) {
                $object->setId($data['id']);
                unset($data['id']);
            }
            elseif (\array_key_exists('id', $data) && $data['id'] === null) {
                $object->setId(null);
            }
            if (\array_key_exists('outputFormatId', $data)) {
                $object->setOutputFormatId($data['outputFormatId']);
                unset($data['outputFormatId']);
            }
            if (\array_key_exists('contentId', $data)) {
                $object->setContentId($data['contentId']);
                unset($data['contentId']);
            }
            if (\array_key_exists('renderingState', $data)) {
                $object->setRenderingState($data['renderingState']);
                unset($data['renderingState']);
            }
            if (\array_key_exists('detail', $data) && $data['detail'] !== null) {
                $object->setDetail($data['detail']);
                unset($data['detail']);
            }
            elseif (\array_key_exists('detail', $data) && $data['detail'] === null) {
                $object->setDetail(null);
            }
            if (\array_key_exists('backupTimestamp', $data) && $data['backupTimestamp'] !== null) {
                $object->setBackupTimestamp(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['backupTimestamp']));
                unset($data['backupTimestamp']);
            }
            elseif (\array_key_exists('backupTimestamp', $data) && $data['backupTimestamp'] === null) {
                $object->setBackupTimestamp(null);
            }
            if (\array_key_exists('attemptsLeft', $data)) {
                $object->setAttemptsLeft($data['attemptsLeft']);
                unset($data['attemptsLeft']);
            }
            if (\array_key_exists('fileVersion', $data)) {
                $object->setFileVersion($data['fileVersion']);
                unset($data['fileVersion']);
            }
            if (\array_key_exists('dynamicRendering', $data)) {
                $object->setDynamicRendering($data['dynamicRendering']);
                unset($data['dynamicRendering']);
            }
            if (\array_key_exists('kind', $data)) {
                $object->setKind($data['kind']);
                unset($data['kind']);
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
            if ($object->isInitialized('id') && null !== $object->getId()) {
                $data['id'] = $object->getId();
            }
            $data['outputFormatId'] = $object->getOutputFormatId();
            $data['contentId'] = $object->getContentId();
            $data['renderingState'] = $object->getRenderingState();
            if ($object->isInitialized('detail') && null !== $object->getDetail()) {
                $data['detail'] = $object->getDetail();
            }
            if ($object->isInitialized('backupTimestamp') && null !== $object->getBackupTimestamp()) {
                $data['backupTimestamp'] = $object->getBackupTimestamp()->format('Y-m-d\TH:i:sP');
            }
            $data['attemptsLeft'] = $object->getAttemptsLeft();
            $data['fileVersion'] = $object->getFileVersion();
            $data['dynamicRendering'] = $object->getDynamicRendering();
            $data['kind'] = $object->getKind();
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\PicturePark\API\Model\OutputDetail::class => false];
        }
    }
}