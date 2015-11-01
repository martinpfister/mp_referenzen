<?php
namespace Pfister\MpReferenzen\Tests\Unit\Controller;
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
 * Test case for class Pfister\MpReferenzen\Controller\ReferenzController.
 *
 * @author Martin Pfister <mail@martinpfister.info>
 */
class ReferenzControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase {

	/**
	 * @var \Pfister\MpReferenzen\Controller\ReferenzController
	 */
	protected $subject = NULL;

	protected function setUp() {
		$this->subject = $this->getMock('Pfister\\MpReferenzen\\Controller\\ReferenzController', array('redirect', 'forward', 'addFlashMessage'), array(), '', FALSE);
	}

	protected function tearDown() {
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function listActionFetchesAllReferenzsFromRepositoryAndAssignsThemToView() {

		$allReferenzs = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array(), array(), '', FALSE);

		$referenzRepository = $this->getMock('Pfister\\MpReferenzen\\Domain\\Repository\\ReferenzRepository', array('findAll'), array(), '', FALSE);
		$referenzRepository->expects($this->once())->method('findAll')->will($this->returnValue($allReferenzs));
		$this->inject($this->subject, 'referenzRepository', $referenzRepository);

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$view->expects($this->once())->method('assign')->with('referenzs', $allReferenzs);
		$this->inject($this->subject, 'view', $view);

		$this->subject->listAction();
	}

	/**
	 * @test
	 */
	public function showActionAssignsTheGivenReferenzToView() {
		$referenz = new \Pfister\MpReferenzen\Domain\Model\Referenz();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$this->inject($this->subject, 'view', $view);
		$view->expects($this->once())->method('assign')->with('referenz', $referenz);

		$this->subject->showAction($referenz);
	}
}
