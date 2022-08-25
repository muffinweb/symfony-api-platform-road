<?php


namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ApiResource]
class Brand
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    /**
     * Increment ID of Brand
     */
    private int $id;


    #[ORM\Column]
    /**
     * Brand's Name
     */
    private string $name;

    #[ORM\Column]
    /**
     * International Identifier Number of Brand
     */
    private string $mpn;

    /**
     * Product's available belongs to Brand
     *
     * @var Product
     */
    #[ORM\OneToMany(targetEntity: 'Product', mappedBy: 'brand')]
    private iterable $product;

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
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getMpn(): string
    {
        return $this->mpn;
    }

    /**
     * @param string $mpn
     */
    public function setMpn(string $mpn): void
    {
        $this->mpn = $mpn;
    }

    /**
     * @return Product
     */
    public function getProduct(): iterable|Product
    {
        return $this->product;
    }

    /**
     * @param Product $product
     */
    public function setProduct(iterable|Product $product): void
    {
        $this->product = $product;
    }




}