<?php
/***************************************************************
 *  Copyright notice
 *
 *  (c) 2010-2011 punkt.de GmbH - Karlsruhe, Germany - http://www.punkt.de
 *  Authors: Daniel Lienert, Michael Knoll, Christoph Ehscheidt
 *  All rights reserved
 *
 *  For further information: http://extlist.punkt.de <extlist@punkt.de>
 *
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
 * Testcase for Sorter
 *
 * @package pt_extlist
 * @subpackage Tests\Domain\Model\Sorting
 * @author Michael Knoll
 */
class Tx_PtExtlist_Tests_Domain_Model_Sorting_SorterTest extends Tx_PtExtlist_Tests_BaseTestcase {

	/** @test */
	public function classExists() {
		$this->assertTrue(class_exists('Tx_PtExtlist_Domain_Model_Sorting_Sorter'));
	}
	
	
	
	/** @test */
	public function registerSortingObserversAcceptsSortingObserver() {
		$sortingObserver = $this->getMock('Tx_PtExtlist_Domain_Model_Sorting_SortingObserverInterface');
		$sorter = new Tx_PtExtlist_Domain_Model_Sorting_Sorter();
		$sorter->registerSortingObserver($sortingObserver);
	}
	
	
	
	/** @test */
	public function injectSorterConfigurationAcceptsSorterConfiguration() {
		$sortingConfiguration = $this->getMock('Tx_PtExtlist_Domain_Configuration_Sorting_SorterConfig', array(), array(), '', FALSE);
		$sorter = new Tx_PtExtlist_Domain_Model_Sorting_Sorter();
		$sorter->injectSorterConfig($sortingConfiguration);
	}
	
	
	
	/** @test */
	public function getObjectNamespaceReturnsCorrectNamespace() {
		$listIdentifer = 'testListIdentifier';
		$sorterConfigurationMock = $this->getMock('Tx_PtExtlist_Domain_Configuration_Sorting_SorterConfig', array('getListIdentifier'), array(), '', FALSE);
		$sorterConfigurationMock->expects($this->once())->method('getListIdentifier')->will($this->returnValue($listIdentifer));
		$sorter = new Tx_PtExtlist_Domain_Model_Sorting_Sorter();
		$sorter->injectSorterConfig($sorterConfigurationMock);
		$this->assertEquals($sorter->getObjectNamespace(), $listIdentifer . '.sorter');
	}
	
}
?>