<?php declare(strict_types=1);

namespace Shopware\Customer\Event;

use Shopware\Api\Write\WrittenEvent;

class CustomerWrittenEvent extends WrittenEvent
{
    const NAME = 'customer.written';

    public function getName(): string
    {
        return self::NAME;
    }

    public function getEntityName(): string
    {
        return 'customer';
    }
}