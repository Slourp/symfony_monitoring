<?php

namespace App\Domain\Model\History;

use App\Domain\Model\Domain;
use DateTime;

class CertHistory
{
    private $id;
    private $domain;
    private $certificateExpiration;
    private $createdAt;

    public function __construct(Domain $domain, DateTime $certificateExpiration)
    {
        $this->domain = $domain;
        $this->certificateExpiration = $certificateExpiration;
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

    public function getCertificateExpiration(): DateTime
    {
        return $this->certificateExpiration;
    }

    public function setCertificateExpiration(DateTime $certificateExpiration): void
    {
        $this->certificateExpiration = $certificateExpiration;
    }

    public function getCreatedAt(): DateTime
    {
        return $this->createdAt;
    }
}
