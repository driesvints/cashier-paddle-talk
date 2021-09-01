<?php

declare(strict_types=1);

namespace App\Listeners;

use App\Models\User;
use Laravel\Paddle\Events\WebhookReceived;

final class PaddleEventListener
{
    public function handle(WebhookReceived $event): void
    {
        if ($event->payload['alert_name'] === 'new_audience_member') {
            if ($user = User::where('email', $event->payload['email'])->first()) {
                $user->subscribed = $event->payload['marketing_consent'] == 1;
                $user->save();
            }
        }

        if ($event->payload['alert_name'] === 'update_audience_member') {
            if ($user = User::where('email', $event->payload['new_customer_email'])->first()) {
                $user->subscribed = $event->payload['new_marketing_consent'] == 1;
                $user->save();
            }
        }
    }
}
