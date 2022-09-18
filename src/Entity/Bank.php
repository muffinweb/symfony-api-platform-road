<?php


namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ApiResource]
class Bank
{

    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'AUTO')]
    #[ORM\Column]
    private int $id;

    #[ORM\Column(type: 'string')]
    private string $intBankCode;

    #[ORM\Column(type: 'integer')]
    private int $intBankSerial;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getIntBankCode(): string
    {
        return $this->intBankCode;
    }

    /**
     * @param string $intBankCode
     */
    public function setIntBankCode(string $intBankCode): void
    {
        $this->intBankCode = $intBankCode;
    }

    /**
     * @return int
     */
    public function getIntBankSerial(): int
    {
        return $this->intBankSerial;
    }

    /**
     * @param int $intBankSerial
     */
    public function setIntBankSerial(int $intBankSerial): void
    {
        $this->intBankSerial = $intBankSerial;
    }



}