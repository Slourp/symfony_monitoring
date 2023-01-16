<?php

namespace App\Domain\Model\History;

use App\Domain\Model\Domain;

class PingHistory extends History
{
    private $status;
    private $duration;

    public function __construct(
        Domain $domain,
        int $status,
        int $duration
    ) {
        parent::__construct($domain);
        $this->status = $status;
        $this->duration = $duration;
    }

    public function getStatus(): int
    {
        return $this->status;
    }

    public function setStatus(int $status): void
    {
        $this->status = $status;
    }

    public function getDuration(): int
    {
        return $this->duration;
    }

    public function setDuration(int $duration): void
    {
        $this->duration = $duration;
    }
}
