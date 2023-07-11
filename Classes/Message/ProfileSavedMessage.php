<?php

declare(strict_types=1);

namespace Lochmueller\Portal\Message;

use TYPO3\CMS\Core\Attribute\WebhookMessage;
use TYPO3\CMS\Core\Messaging\WebhookMessageInterface;
use TYPO3\CMS\Core\Resource\Event\AfterFileAddedEvent;

#[WebhookMessage(
    identifier: 'portal/form/profile-saved',
    description: '... when a EXT:portal profile form is saved.'
)]
final class ProfileSavedMessage implements WebhookMessageInterface
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
