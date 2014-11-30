<?php

/*
 * This file is part of the CLSlackBundle.
 *
 * (c) Cas Leentfaar <info@casleentfaar.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CL\Slack\Payload;

/**
 * @author Cas Leentfaar <info@casleentfaar.com>
 *
 * @see Official documentation at https://api.slack.com/methods/users.list
 */
class UsersListPayload extends AbstractPayload
{
    /**
     * {@inheritdoc}
     */
    public function getMethod()
    {
        return 'users.list';
    }
}
