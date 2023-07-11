<?php

declare(strict_types=1);

namespace Lochmueller\Portal\Message;

use TYPO3\CMS\Core\Attribute\WebhookMessage;
use TYPO3\CMS\Core\Messaging\WebhookMessageInterface;
use TYPO3\CMS\Core\Resource\Event\AfterFileAddedEvent;

#[WebhookMessage(
    identifier: 'portal/form/password-changed',
    description: '... when a EXT:portal password is changed.'
)]
final class PasswordChangedMessage implements WebhookMessageInterface
{
    public function __construct(

        // @todo Handle in EXT:form
    )
    {
    }

    public function jsonSerialize()
    {
       // @todo
    }
}
