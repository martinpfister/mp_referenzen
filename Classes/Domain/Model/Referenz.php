<?php
namespace Pfister\MpReferenzen\Domain\Model;


/***************************************************************
 *
 *  Copyright notice
 *
 *  (c) 2015 Martin Pfister <mail@martinpfister.info>
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 * Referenz
 */
class Referenz extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/**
	 * titel
	 *
	 * @var string
	 */
	protected $titel = '';

	/**
	 * teaser
	 *
	 * @var string
	 */
	protected $teaser = '';

	/**
	 * beschreibung
	 *
	 * @var string
	 */
	protected $beschreibung = '';

	/**
	 * baujahr
	 *
	 * @var string
	 */
	protected $baujahr = '';

	/**
	 * vorschaubild
	 *
	 * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
	 */
	protected $vorschaubild = NULL;

	/**
	 * hauptbilder
	 *
	 * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
	 */
	protected $hauptbilder = NULL;

	/**
	 * kategorie
	 *
	 * @var \Pfister\MpReferenzen\Domain\Model\Kategorie
	 */
	protected $kategorie = NULL;

	/**
	 * Returns the titel
	 *
	 * @return string $titel
	 */
	public function getTitel() {
		return $this->titel;
	}

	/**
	 * Sets the titel
	 *
	 * @param string $titel
	 * @return void
	 */
	public function setTitel($titel) {
		$this->titel = $titel;
	}

	/**
	 * Returns the teaser
	 *
	 * @return string $teaser
	 */
	public function getTeaser() {
		return $this->teaser;
	}

	/**
	 * Sets the teaser
	 *
	 * @param string $teaser
	 * @return void
	 */
	public function setTeaser($teaser) {
		$this->teaser = $teaser;
	}

	/**
	 * Returns the beschreibung
	 *
	 * @return string $beschreibung
	 */
	public function getBeschreibung() {
		return $this->beschreibung;
	}

	/**
	 * Sets the beschreibung
	 *
	 * @param string $beschreibung
	 * @return void
	 */
	public function setBeschreibung($beschreibung) {
		$this->beschreibung = $beschreibung;
	}

	/**
	 * Returns the baujahr
	 *
	 * @return string $baujahr
	 */
	public function getBaujahr() {
		return $this->baujahr;
	}

	/**
	 * Sets the baujahr
	 *
	 * @param string $baujahr
	 * @return void
	 */
	public function setBaujahr($baujahr) {
		$this->baujahr = $baujahr;
	}

	/**
	 * Returns the vorschaubild
	 *
	 * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $vorschaubild
	 */
	public function getVorschaubild() {
		return $this->vorschaubild;
	}

	/**
	 * Sets the vorschaubild
	 *
	 * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $vorschaubild
	 * @return void
	 */
	public function setVorschaubild(\TYPO3\CMS\Extbase\Domain\Model\FileReference $vorschaubild) {
		$this->vorschaubild = $vorschaubild;
	}

	/**
	 * Returns the hauptbilder
	 *
	 * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $hauptbilder
	 */
	public function getHauptbilder() {
		return $this->hauptbilder;
	}

	/**
	 * Sets the hauptbilder
	 *
	 * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $hauptbilder
	 * @return void
	 */
	public function setHauptbilder(\TYPO3\CMS\Extbase\Domain\Model\FileReference $hauptbilder) {
		$this->hauptbilder = $hauptbilder;
	}

	/**
	 * Returns the kategorie
	 *
	 * @return \Pfister\MpReferenzen\Domain\Model\Kategorie $kategorie
	 */
	public function getKategorie() {
		return $this->kategorie;
	}

	/**
	 * Sets the kategorie
	 *
	 * @param \Pfister\MpReferenzen\Domain\Model\Kategorie $kategorie
	 * @return void
	 */
	public function setKategorie(\Pfister\MpReferenzen\Domain\Model\Kategorie $kategorie) {
		$this->kategorie = $kategorie;
	}

}