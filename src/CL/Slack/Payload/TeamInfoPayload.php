<?php

namespace CL\Slack\Payload;

use CL\Slack\Payload\AbstractPayload;

class TeamInfoPayload extends AbstractPayload
{

    public function getMethod()
    {
        return 'team.info';
    }
}