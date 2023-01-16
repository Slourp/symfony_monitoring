<?php

namespace App\Domain\Model\History;

use App\Domain\Model\Domain;
use DateTime;

abstract class History
{
    private $id;
    private $domain;
    private $createdAt;

    public function __construct(Domain $domain)
    {
        $this->domain = $domain;
        $this->createdAt = new DateTime();
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getDomain(): Domain
    {
        return $this->domain;
    }

    public function setDomain(Domain $domain): void
    {
        $this->domain = $domain;
    }

    public function getCreatedAt(): DateTime
    {
        return $this->createdAt;
    }
}
