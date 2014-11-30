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

use Symfony\Component\Validator\Constraints as Assert;

/**
 * @author Cas Leentfaar <info@casleentfaar.com>
 *
 * @see Official documentation at https://api.slack.com/methods/channels.unarchive
 */
class ChannelsUnarchivePayload extends AbstractPostPayload
{
    /**
     * @var string
     *
     * @Assert\NotNull
     * @Assert\NotBlank
     */
    private $channel;

    /**
     * @param string $channelId
     */
    public function setChannelId($channelId)
    {
        $this->channel = $channelId;
    }

    /**
     * @return string
     */
    public function getChannelId()
    {
        return $this->channel;
    }

    /**
     * @return string
     */
    public function getMethod()
    {
        return 'channels.unarchive';
    }
}
