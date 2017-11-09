<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : protocol.proto
 */


namespace pb;

/**
 * Protobuf message : pb.PubMsg
 */
class PubMsg extends \Protobuf\AbstractMessage
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
     * clientID optional string = 1
     *
     * @var string
     */
    protected $clientID = null;

    /**
     * guid optional string = 2
     *
     * @var string
     */
    protected $guid = null;

    /**
     * subject optional string = 3
     *
     * @var string
     */
    protected $subject = null;

    /**
     * reply optional string = 4
     *
     * @var string
     */
    protected $reply = null;

    /**
     * data optional bytes = 5
     *
     * @var \Protobuf\Stream
     */
    protected $data = null;

    /**
     * sha256 optional bytes = 10
     *
     * @var \Protobuf\Stream
     */
    protected $sha256 = null;

    /**
     * Check if 'clientID' has a value
     *
     * @return bool
     */
    public function hasClientID()
    {
        return $this->clientID !== null;
    }

    /**
     * Get 'clientID' value
     *
     * @return string
     */
    public function getClientID()
    {
        return $this->clientID;
    }

    /**
     * Set 'clientID' value
     *
     * @param string $value
     */
    public function setClientID($value = null)
    {
        $this->clientID = $value;
    }

    /**
     * Check if 'guid' has a value
     *
     * @return bool
     */
    public function hasGuid()
    {
        return $this->guid !== null;
    }

    /**
     * Get 'guid' value
     *
     * @return string
     */
    public function getGuid()
    {
        return $this->guid;
    }

    /**
     * Set 'guid' value
     *
     * @param string $value
     */
    public function setGuid($value = null)
    {
        $this->guid = $value;
    }

    /**
     * Check if 'subject' has a value
     *
     * @return bool
     */
    public function hasSubject()
    {
        return $this->subject !== null;
    }

    /**
     * Get 'subject' value
     *
     * @return string
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Set 'subject' value
     *
     * @param string $value
     */
    public function setSubject($value = null)
    {
        $this->subject = $value;
    }

    /**
     * Check if 'reply' has a value
     *
     * @return bool
     */
    public function hasReply()
    {
        return $this->reply !== null;
    }

    /**
     * Get 'reply' value
     *
     * @return string
     */
    public function getReply()
    {
        return $this->reply;
    }

    /**
     * Set 'reply' value
     *
     * @param string $value
     */
    public function setReply($value = null)
    {
        $this->reply = $value;
    }

    /**
     * Check if 'data' has a value
     *
     * @return bool
     */
    public function hasData()
    {
        return $this->data !== null;
    }

    /**
     * Get 'data' value
     *
     * @return \Protobuf\Stream
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Set 'data' value
     *
     * @param \Protobuf\Stream $value
     */
    public function setData($value = null)
    {
        if ($value !== null && ! $value instanceof \Protobuf\Stream) {
            $value = \Protobuf\Stream::wrap($value);
        }

        $this->data = $value;
    }

    /**
     * Check if 'sha256' has a value
     *
     * @return bool
     */
    public function hasSha256()
    {
        return $this->sha256 !== null;
    }

    /**
     * Get 'sha256' value
     *
     * @return \Protobuf\Stream
     */
    public function getSha256()
    {
        return $this->sha256;
    }

    /**
     * Set 'sha256' value
     *
     * @param \Protobuf\Stream $value
     */
    public function setSha256($value = null)
    {
        if ($value !== null && ! $value instanceof \Protobuf\Stream) {
            $value = \Protobuf\Stream::wrap($value);
        }

        $this->sha256 = $value;
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
            'clientID' => null,
            'guid' => null,
            'subject' => null,
            'reply' => null,
            'data' => null,
            'sha256' => null
        ], $values);

        $message->setClientID($values['clientID']);
        $message->setGuid($values['guid']);
        $message->setSubject($values['subject']);
        $message->setReply($values['reply']);
        $message->setData($values['data']);
        $message->setSha256($values['sha256']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'PubMsg',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'clientID',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'guid',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'subject',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 4,
                    'name' => 'reply',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 5,
                    'name' => 'data',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_BYTES(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 10,
                    'name' => 'sha256',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_BYTES(),
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

        if ($this->clientID !== null) {
            $writer->writeVarint($stream, 10);
            $writer->writeString($stream, $this->clientID);
        }

        if ($this->guid !== null) {
            $writer->writeVarint($stream, 18);
            $writer->writeString($stream, $this->guid);
        }

        if ($this->subject !== null) {
            $writer->writeVarint($stream, 26);
            $writer->writeString($stream, $this->subject);
        }

        if ($this->reply !== null) {
            $writer->writeVarint($stream, 34);
            $writer->writeString($stream, $this->reply);
        }

        if ($this->data !== null) {
            $writer->writeVarint($stream, 42);
            $writer->writeByteStream($stream, $this->data);
        }

        if ($this->sha256 !== null) {
            $writer->writeVarint($stream, 82);
            $writer->writeByteStream($stream, $this->sha256);
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

                $this->clientID = $reader->readString($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->guid = $reader->readString($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->subject = $reader->readString($stream);

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->reply = $reader->readString($stream);

                continue;
            }

            if ($tag === 5) {
                \Protobuf\WireFormat::assertWireType($wire, 12);

                $this->data = $reader->readByteStream($stream);

                continue;
            }

            if ($tag === 10) {
                \Protobuf\WireFormat::assertWireType($wire, 12);

                $this->sha256 = $reader->readByteStream($stream);

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

        if ($this->clientID !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->clientID);
        }

        if ($this->guid !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->guid);
        }

        if ($this->subject !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->subject);
        }

        if ($this->reply !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->reply);
        }

        if ($this->data !== null) {
            $size += 1;
            $size += $calculator->computeByteStreamSize($this->data);
        }

        if ($this->sha256 !== null) {
            $size += 1;
            $size += $calculator->computeByteStreamSize($this->sha256);
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
        $this->clientID = null;
        $this->guid = null;
        $this->subject = null;
        $this->reply = null;
        $this->data = null;
        $this->sha256 = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \pb\PubMsg) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->clientID = ($message->clientID !== null) ? $message->clientID : $this->clientID;
        $this->guid = ($message->guid !== null) ? $message->guid : $this->guid;
        $this->subject = ($message->subject !== null) ? $message->subject : $this->subject;
        $this->reply = ($message->reply !== null) ? $message->reply : $this->reply;
        $this->data = ($message->data !== null) ? $message->data : $this->data;
        $this->sha256 = ($message->sha256 !== null) ? $message->sha256 : $this->sha256;
    }


}

