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
 * Testcase for database utility class
 *
 * @package TYPO3
 * @subpackage pt_extlist
 * @author Michael Knoll <knoll@punkt.de>
 */
class Tx_PtExtlist_Tests_Utility_DbUtils_testcase extends Tx_PtExtlist_Tests_BaseTestcase {
	
    public function testGetAliasedSelectPartByTableAndField() {
    	$aliasedSelect = Tx_PtExtlist_Utility_DbUtils::getAliasedSelectPartByTableAndField('table', 'field');
    	$this->assertEquals('table.field AS table_field', $aliasedSelect);
    }
    
    
    
    public function testGetAliasedSelectPartByFieldConfig() {
        $fieldConfig = new Tx_PtExtlist_Domain_Configuration_Data_Fields_FieldConfig('test', array('field' => 'field', 'table' => 'table'));
    	$this->assertEquals('table.field AS table_field', Tx_PtExtlist_Utility_DbUtils::getAliasedSelectPartByFieldConfig($fieldConfig));
    }
    
    
    
    public function testGetAliasByTableAndField() {
    	$alias = Tx_PtExtlist_Utility_DbUtils::getAliasByTableAndField('table', 'field');
    	$this->assertEquals('table_field', $alias);
    }
    
    
    
    public function testGetAliasByFieldConfig() {
		$fieldConfig = new Tx_PtExtlist_Domain_Configuration_Data_Fields_FieldConfig('test', array('field' => 'field', 'table' => 'table'));
    	$alias = Tx_PtExtlist_Utility_DbUtils::getAliasByFieldConfig($fieldConfig);
    	$this->assertEquals('table_field', $alias);
    }
	
}

?>