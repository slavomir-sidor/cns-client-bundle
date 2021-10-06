<?php

declare(strict_types=1);

namespace EcPhp\CnsClientBundle\Service;

use EcPhp\CnsClientBundle\Service\Component\NotificationInterface;

class LocalNotificationService implements NotificationServiceInterface
{
    public function send(NotificationInterface $notification): int
    {
        return 1;
    }
}
