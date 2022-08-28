<?php


namespace App\Entity;


use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ApiResource]
class Color
{
    public function __construct(){
        $this->products = new ArrayCollection();
    }

    #[ORM\Id]
    #[ORM\Column]
    #[ORM\GeneratedValue]
    private int $id;

    #[ORM\Column]
    private string $name;

    #[ORM\OneToMany(targetEntity: 'Product', mappedBy: 'color')]
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
     * @return iterable
     */
    public function getProducts(): iterable
    {
        return $this->products;
    }

    /**
     * @param iterable $products
     */
    public function setProducts(iterable $products): void
    {
        $this->products = $products;
    }




}