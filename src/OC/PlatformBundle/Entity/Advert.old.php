<?php

// src/OC/PlatformBundle/Entity/Advert.php

namespace OC\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
* @ORM\Entity
*/
class Advert
{

	/**
	* @ORM\Column(name="id", type="interger")
	* @ORM\Id
	* @ORM\GenerateValue(strategy="AUTO")
	*/
	protected $id;

	/**
	 * @ORM\Column(name="date", type="date")
	 */
	protected $date;

	/**
	 * @ORM\Column(name="title", type="string", length=255)
	 */
	protected $title;

	/**
	 * @ORM\Column(name="auhtor", type="string", length=255)
	 */
	protected $author;

	/**
	 * @ORM\Column(name="content", type="text")
	 */
	protected $content;

	//Les Getters

	public function getId()
	{
		return ($this->id);
	}

	public function getDate()
	{
		return($this->date);
	}
	public function getTitle()
	{
		return($this->title);
	}
	public function getAuthor()
	{
		return($this->author);
	}
	public function getConten()
	{
		return($this->content);
	}
	//Les Setters

	public function setId($value) : void
	{
		$this->id = $value;
	}
	public function setDate($value) : void
	{
		$this->date = $value;
	}
	public function setTitle($value) : void
	{
		$this->title = $value;
	}
	public function setAuthor($value) : void
	{
		$this->author = $value;
	}
	public function setContent($value) : void
	{
		$this->content = $value;
	}
}
