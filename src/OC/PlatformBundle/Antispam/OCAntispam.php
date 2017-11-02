<?php
// src/OC/Platform/Antispam/OCAntispam.php

namespace OC\PlatformBundle\Antispam;

/**
* Class for detect the spam
*/
class OCAntispam
{

	private $mailer;
	private $locale;
	private $minLength;

	public function __construct(\Swift_Mailer $mailer, $locale, $minLength)
	{
		$this->mailer		= $mailer;
		$this->locale		= $locale;
		$this->minLength	= (int) $minLength;
	}

	/**
	 * Vérifie si le text est un spam ou non
	 */
	public function isSpam(string $text) : bool {
		echo $this->minLength.PHP_EOL;
		return strlen($text) < $this->minLength;
	}
}
