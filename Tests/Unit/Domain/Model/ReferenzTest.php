<?php

namespace Pfister\MpReferenzen\Tests\Unit\Domain\Model;

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2015 Martin Pfister <mail@martinpfister.info>
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
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
 * Test case for class \Pfister\MpReferenzen\Domain\Model\Referenz.
 *
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 * @author Martin Pfister <mail@martinpfister.info>
 */
class ReferenzTest extends \TYPO3\CMS\Core\Tests\UnitTestCase {
	/**
	 * @var \Pfister\MpReferenzen\Domain\Model\Referenz
	 */
	protected $subject = NULL;

	protected function setUp() {
		$this->subject = new \Pfister\MpReferenzen\Domain\Model\Referenz();
	}

	protected function tearDown() {
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function getTitelReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getTitel()
		);
	}

	/**
	 * @test
	 */
	public function setTitelForStringSetsTitel() {
		$this->subject->setTitel('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'titel',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getTeaserReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getTeaser()
		);
	}

	/**
	 * @test
	 */
	public function setTeaserForStringSetsTeaser() {
		$this->subject->setTeaser('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'teaser',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getBeschreibungReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getBeschreibung()
		);
	}

	/**
	 * @test
	 */
	public function setBeschreibungForStringSetsBeschreibung() {
		$this->subject->setBeschreibung('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'beschreibung',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getBaujahrReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getBaujahr()
		);
	}

	/**
	 * @test
	 */
	public function setBaujahrForStringSetsBaujahr() {
		$this->subject->setBaujahr('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'baujahr',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getVorschaubildReturnsInitialValueForFileReference() {
		$this->assertEquals(
			NULL,
			$this->subject->getVorschaubild()
		);
	}

	/**
	 * @test
	 */
	public function setVorschaubildForFileReferenceSetsVorschaubild() {
		$fileReferenceFixture = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
		$this->subject->setVorschaubild($fileReferenceFixture);

		$this->assertAttributeEquals(
			$fileReferenceFixture,
			'vorschaubild',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getHauptbilderReturnsInitialValueForFileReference() {
		$this->assertEquals(
			NULL,
			$this->subject->getHauptbilder()
		);
	}

	/**
	 * @test
	 */
	public function setHauptbilderForFileReferenceSetsHauptbilder() {
		$fileReferenceFixture = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
		$this->subject->setHauptbilder($fileReferenceFixture);

		$this->assertAttributeEquals(
			$fileReferenceFixture,
			'hauptbilder',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getKategorieReturnsInitialValueForKategorie() {
		$this->assertEquals(
			NULL,
			$this->subject->getKategorie()
		);
	}

	/**
	 * @test
	 */
	public function setKategorieForKategorieSetsKategorie() {
		$kategorieFixture = new \Pfister\MpReferenzen\Domain\Model\Kategorie();
		$this->subject->setKategorie($kategorieFixture);

		$this->assertAttributeEquals(
			$kategorieFixture,
			'kategorie',
			$this->subject
		);
	}
}
