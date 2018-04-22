<?php
// src/OC/PlatformBundle/Entity/Skill.php

namespace WM\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="WM\PlatformBundle\Entity\SkillRepository")
 * @ORM\Table(name="wm_skill")
 */
class Skill
{
  /**
   * @ORM\Column(name="id", type="integer")
   * @ORM\Id
   * @ORM\GeneratedValue(strategy="AUTO")
   */
  private $id;

  /**
   * @ORM\Column(name="name", type="string", length=255)
   */
  private $name;
  
  // Getters et setters
  
  /**
   * @return integer
   */
  public function getId()
  {
    return $this->id;
  }
  /**
   * @param string $name
   */
  public function setName($name)
  {
    $this->name = $name;
  }
  /**
   * @return string
   */
  public function getName()
  {
    return $this->name;
  }
}
