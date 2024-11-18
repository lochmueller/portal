<?php

declare(strict_types=1);

namespace Lochmueller\Portal\Message;

use TYPO3\CMS\Core\Attribute\WebhookMessage;
use TYPO3\CMS\Core\Messaging\WebhookMessageInterface;
use TYPO3\CMS\Core\Resource\Event\AfterFileAddedEvent;
use TYPO3\CMS\Extbase\Utility\DebuggerUtility;
use TYPO3\CMS\Form\Domain\Runtime\FormRuntime;

abstract class AbstractFormMessage implements WebhookMessageInterface
{
    public function __construct(
        protected FormRuntime $runtime,
        protected array       $formValues
    )
    {
    }

    public function jsonSerialize()
    {
        DebuggerUtility::var_dump('TODO: serilize the form information');
        die();
        // @todo
    }
}
