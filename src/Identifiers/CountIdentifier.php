<?php
declare(strict_types=1);

namespace NGT\Barcode\GS1Decoder\Identifiers;

use NGT\Barcode\GS1Decoder\Contracts\Identifiers\VariableLength;
use NGT\Barcode\GS1Decoder\Identifiers\Abstracts\Identifier;

final class CountIdentifier extends Identifier implements VariableLength
{
    /**
     * @inheritDoc
     */
    public function getTitle(): string
    {
        return 'COUNT';
    }

    /**
     * @inheritDoc
     */
    public function getName(): string
    {
        return 'Count of trade items or trade item pieces contained in a logistic unit';
    }

    /**
     * @inheritDoc
     */
    public function getCode(): string
    {
        return '37';
    }

    /**
     * @inheritDoc
     */
    public function getLength(): int
    {
        return 8;
    }

    /**
     * @inheritDoc
     */
    public function getFormat(): string
    {
        return '/^\d{8}$/';
    }
}
