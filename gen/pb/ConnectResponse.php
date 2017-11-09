<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : protocol.proto
 */


namespace pb;

/**
 * Protobuf message : pb.ConnectResponse
 */
class ConnectResponse extends \Protobuf\AbstractMessage
{

    /**
     * @var \Protobuf\UnknownFieldSet
     */
    protected $unknownFieldSet = null;

    /**
     * @var \Protobuf\Extension\ExtensionFieldMap
     */
    protected $extensions = null;

    /**
     * pubPrefix optional string = 1
     *
     * @var string
     */
    protected $pubPrefix = null;

    /**
     * subRequests optional string = 2
     *
     * @var string
     */
    protected $subRequests = null;

    /**
     * unsubRequests optional string = 3
     *
     * @var string
     */
    protected $unsubRequests = null;

    /**
     * closeRequests optional string = 4
     *
     * @var string
     */
    protected $closeRequests = null;

    /**
     * error optional string = 5
     *
     * @var string
     */
    protected $error = null;

    /**
     * subCloseRequests optional string = 6
     *
     * @var string
     */
    protected $subCloseRequests = null;

    /**
     * publicKey optional string = 100
     *
     * @var string
     */
    protected $publicKey = null;

    /**
     * Check if 'pubPrefix' has a value
     *
     * @return bool
     */
    public function hasPubPrefix()
    {
        return $this->pubPrefix !== null;
    }

    /**
     * Get 'pubPrefix' value
     *
     * @return string
     */
    public function getPubPrefix()
    {
        return $this->pubPrefix;
    }

    /**
     * Set 'pubPrefix' value
     *
     * @param string $value
     */
    public function setPubPrefix($value = null)
    {
        $this->pubPrefix = $value;
    }

    /**
     * Check if 'subRequests' has a value
     *
     * @return bool
     */
    public function hasSubRequests()
    {
        return $this->subRequests !== null;
    }

    /**
     * Get 'subRequests' value
     *
     * @return string
     */
    public function getSubRequests()
    {
        return $this->subRequests;
    }

    /**
     * Set 'subRequests' value
     *
     * @param string $value
     */
    public function setSubRequests($value = null)
    {
        $this->subRequests = $value;
    }

    /**
     * Check if 'unsubRequests' has a value
     *
     * @return bool
     */
    public function hasUnsubRequests()
    {
        return $this->unsubRequests !== null;
    }

    /**
     * Get 'unsubRequests' value
     *
     * @return string
     */
    public function getUnsubRequests()
    {
        return $this->unsubRequests;
    }

    /**
     * Set 'unsubRequests' value
     *
     * @param string $value
     */
    public function setUnsubRequests($value = null)
    {
        $this->unsubRequests = $value;
    }

    /**
     * Check if 'closeRequests' has a value
     *
     * @return bool
     */
    public function hasCloseRequests()
    {
        return $this->closeRequests !== null;
    }

    /**
     * Get 'closeRequests' value
     *
     * @return string
     */
    public function getCloseRequests()
    {
        return $this->closeRequests;
    }

    /**
     * Set 'closeRequests' value
     *
     * @param string $value
     */
    public function setCloseRequests($value = null)
    {
        $this->closeRequests = $value;
    }

    /**
     * Check if 'error' has a value
     *
     * @return bool
     */
    public function hasError()
    {
        return $this->error !== null;
    }

    /**
     * Get 'error' value
     *
     * @return string
     */
    public function getError()
    {
        return $this->error;
    }

    /**
     * Set 'error' value
     *
     * @param string $value
     */
    public function setError($value = null)
    {
        $this->error = $value;
    }

    /**
     * Check if 'subCloseRequests' has a value
     *
     * @return bool
     */
    public function hasSubCloseRequests()
    {
        return $this->subCloseRequests !== null;
    }

    /**
     * Get 'subCloseRequests' value
     *
     * @return string
     */
    public function getSubCloseRequests()
    {
        return $this->subCloseRequests;
    }

    /**
     * Set 'subCloseRequests' value
     *
     * @param string $value
     */
    public function setSubCloseRequests($value = null)
    {
        $this->subCloseRequests = $value;
    }

    /**
     * Check if 'publicKey' has a value
     *
     * @return bool
     */
    public function hasPublicKey()
    {
        return $this->publicKey !== null;
    }

    /**
     * Get 'publicKey' value
     *
     * @return string
     */
    public function getPublicKey()
    {
        return $this->publicKey;
    }

    /**
     * Set 'publicKey' value
     *
     * @param string $value
     */
    public function setPublicKey($value = null)
    {
        $this->publicKey = $value;
    }

    /**
     * {@inheritdoc}
     */
    public function extensions()
    {
        if ( $this->extensions !== null) {
            return $this->extensions;
        }

        return $this->extensions = new \Protobuf\Extension\ExtensionFieldMap(__CLASS__);
    }

    /**
     * {@inheritdoc}
     */
    public function unknownFieldSet()
    {
        return $this->unknownFieldSet;
    }

    /**
     * {@inheritdoc}
     */
    public static function fromStream($stream, \Protobuf\Configuration $configuration = null)
    {
        return new self($stream, $configuration);
    }

    /**
     * {@inheritdoc}
     */
    public static function fromArray(array $values)
    {
        $message = new self();
        $values  = array_merge([
            'pubPrefix' => null,
            'subRequests' => null,
            'unsubRequests' => null,
            'closeRequests' => null,
            'error' => null,
            'subCloseRequests' => null,
            'publicKey' => null
        ], $values);

        $message->setPubPrefix($values['pubPrefix']);
        $message->setSubRequests($values['subRequests']);
        $message->setUnsubRequests($values['unsubRequests']);
        $message->setCloseRequests($values['closeRequests']);
        $message->setError($values['error']);
        $message->setSubCloseRequests($values['subCloseRequests']);
        $message->setPublicKey($values['publicKey']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'ConnectResponse',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'pubPrefix',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'subRequests',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'unsubRequests',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 4,
                    'name' => 'closeRequests',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 5,
                    'name' => 'error',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 6,
                    'name' => 'subCloseRequests',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 100,
                    'name' => 'publicKey',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
            ],
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function toStream(\Protobuf\Configuration $configuration = null)
    {
        $config  = $configuration ?: \Protobuf\Configuration::getInstance();
        $context = $config->createWriteContext();
        $stream  = $context->getStream();

        $this->writeTo($context);
        $stream->seek(0);

        return $stream;
    }

    /**
     * {@inheritdoc}
     */
    public function writeTo(\Protobuf\WriteContext $context)
    {
        $stream      = $context->getStream();
        $writer      = $context->getWriter();
        $sizeContext = $context->getComputeSizeContext();

        if ($this->pubPrefix !== null) {
            $writer->writeVarint($stream, 10);
            $writer->writeString($stream, $this->pubPrefix);
        }

        if ($this->subRequests !== null) {
            $writer->writeVarint($stream, 18);
            $writer->writeString($stream, $this->subRequests);
        }

        if ($this->unsubRequests !== null) {
            $writer->writeVarint($stream, 26);
            $writer->writeString($stream, $this->unsubRequests);
        }

        if ($this->closeRequests !== null) {
            $writer->writeVarint($stream, 34);
            $writer->writeString($stream, $this->closeRequests);
        }

        if ($this->error !== null) {
            $writer->writeVarint($stream, 42);
            $writer->writeString($stream, $this->error);
        }

        if ($this->subCloseRequests !== null) {
            $writer->writeVarint($stream, 50);
            $writer->writeString($stream, $this->subCloseRequests);
        }

        if ($this->publicKey !== null) {
            $writer->writeVarint($stream, 802);
            $writer->writeString($stream, $this->publicKey);
        }

        if ($this->extensions !== null) {
            $this->extensions->writeTo($context);
        }

        return $stream;
    }

    /**
     * {@inheritdoc}
     */
    public function readFrom(\Protobuf\ReadContext $context)
    {
        $reader = $context->getReader();
        $length = $context->getLength();
        $stream = $context->getStream();

        $limit = ($length !== null)
            ? ($stream->tell() + $length)
            : null;

        while ($limit === null || $stream->tell() < $limit) {

            if ($stream->eof()) {
                break;
            }

            $key  = $reader->readVarint($stream);
            $wire = \Protobuf\WireFormat::getTagWireType($key);
            $tag  = \Protobuf\WireFormat::getTagFieldNumber($key);

            if ($stream->eof()) {
                break;
            }

            if ($tag === 1) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->pubPrefix = $reader->readString($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->subRequests = $reader->readString($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->unsubRequests = $reader->readString($stream);

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->closeRequests = $reader->readString($stream);

                continue;
            }

            if ($tag === 5) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->error = $reader->readString($stream);

                continue;
            }

            if ($tag === 6) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->subCloseRequests = $reader->readString($stream);

                continue;
            }

            if ($tag === 100) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->publicKey = $reader->readString($stream);

                continue;
            }

            $extensions = $context->getExtensionRegistry();
            $extension  = $extensions ? $extensions->findByNumber(__CLASS__, $tag) : null;

            if ($extension !== null) {
                $this->extensions()->add($extension, $extension->readFrom($context, $wire));

                continue;
            }

            if ($this->unknownFieldSet === null) {
                $this->unknownFieldSet = new \Protobuf\UnknownFieldSet();
            }

            $data    = $reader->readUnknown($stream, $wire);
            $unknown = new \Protobuf\Unknown($tag, $wire, $data);

            $this->unknownFieldSet->add($unknown);

        }
    }

    /**
     * {@inheritdoc}
     */
    public function serializedSize(\Protobuf\ComputeSizeContext $context)
    {
        $calculator = $context->getSizeCalculator();
        $size       = 0;

        if ($this->pubPrefix !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->pubPrefix);
        }

        if ($this->subRequests !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->subRequests);
        }

        if ($this->unsubRequests !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->unsubRequests);
        }

        if ($this->closeRequests !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->closeRequests);
        }

        if ($this->error !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->error);
        }

        if ($this->subCloseRequests !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->subCloseRequests);
        }

        if ($this->publicKey !== null) {
            $size += 2;
            $size += $calculator->computeStringSize($this->publicKey);
        }

        if ($this->extensions !== null) {
            $size += $this->extensions->serializedSize($context);
        }

        return $size;
    }

    /**
     * {@inheritdoc}
     */
    public function clear()
    {
        $this->pubPrefix = null;
        $this->subRequests = null;
        $this->unsubRequests = null;
        $this->closeRequests = null;
        $this->error = null;
        $this->subCloseRequests = null;
        $this->publicKey = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \pb\ConnectResponse) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->pubPrefix = ($message->pubPrefix !== null) ? $message->pubPrefix : $this->pubPrefix;
        $this->subRequests = ($message->subRequests !== null) ? $message->subRequests : $this->subRequests;
        $this->unsubRequests = ($message->unsubRequests !== null) ? $message->unsubRequests : $this->unsubRequests;
        $this->closeRequests = ($message->closeRequests !== null) ? $message->closeRequests : $this->closeRequests;
        $this->error = ($message->error !== null) ? $message->error : $this->error;
        $this->subCloseRequests = ($message->subCloseRequests !== null) ? $message->subCloseRequests : $this->subCloseRequests;
        $this->publicKey = ($message->publicKey !== null) ? $message->publicKey : $this->publicKey;
    }


}

