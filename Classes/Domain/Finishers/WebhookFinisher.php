<?php

declare(strict_types=1);

namespace Lochmueller\Portal\Domain\Finishers;

use Lochmueller\Portal\Message\AbstractFormMessage;
use Symfony\Component\Messenger\MessageBusInterface;
use TYPO3\CMS\Core\Http\PropagateResponseException;
use TYPO3\CMS\Core\Http\RedirectResponse;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Extbase\Utility\DebuggerUtility;
use TYPO3\CMS\Form\Domain\Finishers\AbstractFinisher;
use TYPO3\CMS\Form\Domain\Finishers\RedirectFinisher;
use TYPO3\CMS\Webhooks\Message\PageModificationMessage;

class WebhookFinisher extends AbstractFinisher
{
    protected $defaultOptions = [
        'messageName' => '',
    ];

    /**
     * Executes this finisher
     * @see AbstractFinisher::execute()
     */
    protected function executeInternal()
    {

        $messageName = 'Lochmueller\\Portal\\Message\\' . $this->parseOption('messageName');
        if (!class_exists($messageName)) {
            throw new \Exception('Invalid message name: ' . $messageName, 12368123);
        }

        $message = new $messageName($this->finisherContext->getFormRuntime(), $this->finisherContext->getFormValues());

        $this->dispatchMessage($message);
    }

    protected function dispatchMessage(AbstractFormMessage $message): void
    {
        try {
            // @todo handle
            // GeneralUtility::makeInstance(MessageBusInterface::class)->dispatch($message);
        } catch (\Throwable $e) {
            // @todo handle
            DebuggerUtility::var_dump($e);
            die();
        }
    }

}
