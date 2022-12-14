<?php


namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ApiResource]
class Brand
{

    public function __construct()
    {
        $this->products = new ArrayCollection();
    }

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
    private iterable $products;

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
    public function getProducts(): iterable|Product
    {
        return $this->products;
    }

    /**
     * @param Product $products
     */
    public function setProducts(iterable|Product $products): void
    {
        $this->products = $products;
    }



}