<?php
/***************************************************************
*  Copyright notice
*
*  (c) 2010 Daniel Lienert <lienert@punkt.de>, Michael Knoll <knoll@punkt.de>
*  All rights reserved
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
 * Testcase for field configuration
 *
 * @package Typo3
 * @subpackage pt_extlist
 * @author Daniel Lienert <linert@punkt.de>
 */
class Tx_PtExtlist_Tests_Domain_Configuration_Data_Fields_FieldConfig_testcase extends Tx_Extbase_BaseTestcase {

	/**
	 * Holds a dummy configuration for a field config object
	 * @var array
	 */
	protected $fieldSettings = array();
	
	
	/**
	 * Holds an instance of field configuration object
	 * @var Tx_PtExtlist_Domain_Configuration_Data_Fields_FieldConfig
	 */
	protected $fieldConfig = null; 
	
	
	
	public function setup() {
		$this->fieldSettings = array(
		    'table' => 'tableName',
		    'field' => 'fieldName',
		    'isSortable' => '0',
		    'access' => '1,2,3,4'
		);
		$this->fieldConfig = new Tx_PtExtlist_Domain_Configuration_Data_Fields_FieldConfig('test1', $this->fieldSettings);
	}
	
	
	
	public function testSetup() {
		$fieldConfig = new Tx_PtExtlist_Domain_Configuration_Data_Fields_FieldConfig('test1', $this->fieldSettings);
	}
	
	
	
	public function testGetIdentifier() {
		$this->assertEquals($this->fieldConfig->getIdentifier(),'test1');
	}
	
	
	
	public function testGetTable() {
		$this->assertEquals($this->fieldConfig->getTable(), $this->fieldSettings['table']);
	}
	
	
	
	public function testGetField() {
		$this->assertEquals($this->fieldConfig->getField(), $this->fieldSettings['field']);
	}
	
	
	
	public function testGetIsSortable() {
		$this->assertEquals($this->fieldConfig->getIsSortable(), $this->fieldSettings['isSortable']);
	}
	
	
	
	public function testDefaultGetIsSortable() {
		$newFieldConfig = new Tx_PtExtlist_Domain_Configuration_Data_Fields_FieldConfig('test1', array('table' => '1', 'field' => '2'));
		$this->assertEquals($newFieldConfig->getIsSortable(), 1);
	}
	
	
	
	public function testGetAccess() {
		$accessArray = $this->fieldConfig->getAccess();
		$this->assertTrue(in_array('1', $accessArray));
		$this->assertTrue(in_array('2', $accessArray));
		$this->assertTrue(in_array('3', $accessArray));
		$this->assertTrue(in_array('4', $accessArray));
	}
	
	
	
	public function testNoTableNameGivenException() {
		try {
			new Tx_PtExtlist_Domain_Configuration_Data_Fields_FieldConfig(array('field' => '2'));
		} catch(Exception $e) {
			return;
		}
		$this->fail();
	}
	
	
	
    public function testNoFieldNameGivenException() {
        try {
            new Tx_PtExtlist_Domain_Configuration_Data_Fields_FieldConfig(array('table' => '2'));
        } catch(Exception $e) {
            return;
        }
        $this->fail();
    }
	
	
}
?>