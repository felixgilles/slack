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

use JMS\Serializer\Annotation as Serializer;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @author Cas Leentfaar <info@casleentfaar.com>
 *
 * @see Official documentation at https://api.slack.com/methods/groups.create
 */
class GroupsCreateChildPayload extends AbstractPostPayload
{
    /**
     * Slack seems to want to call this option "channel", but I can't agree with that (the format of the value is different),
     * and will just pretend to my users it's a "group" (ID)
     *
     * @var string
     *
     * @Assert\NotNull
     * @Assert\NotBlank
     * @Serializer\Type("string")
     */
    private $channel;

    /**
     * @param string $groupId ID of the group to clone and archive.
     */
    public function setGroupId($groupId)
    {
        $this->channel = $groupId;
    }

    /**
     * @return string ID of the group to clone and archive.
     */
    public function getGroupId()
    {
        return $this->channel;
    }

    /**
     * {@inheritdoc}
     */
    public function getMethod()
    {
        return 'groups.createChild';
    }
}
