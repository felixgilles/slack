<?php

namespace CL\Slack\Payload;

use CL\Slack\Model\Team;
use CL\Slack\Payload\AbstractPayloadResponse;

class TeamInfoPayloadResponse extends AbstractPayloadResponse
{
    /**
     * @var Team|null
     */
    private $team;

    /**
     * @return Team|null
     */
    public function getTeam()
    {
        return $this->team;
    }

}