<?php
    declare(strict_types=1);

    namespace App\Entity;
    use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
trait Timestapable{
    /***
     * @var \DateTimeInterface
     * @ORM\Column(type="datetime")
     */
    private \DateTimeInterface $createdAt;
     /***
     * @var \DateTimeInterface
     * @ORM\Column(type="datetime", nullable=true)
     */
    private ?\DateTimeInterface $updatedAt;

    
   

  
    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

   
    // public function setCreatedAt(\DateTimeInterface $createdAt): Timestapable
    // {
    //     $this->createdAt = $createdAt;

    //     return $this;
    // }
    // updated 
    public function getupdatedAt(): ?\DateTimeInterface
    {
        return $this->updatedAt;
    }

   
    public function setupdatedAt(?\DateTimeInterface $updatedAt): Timestapable
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }
}
