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
 *  AggregateConfigCollection Factory
 *
 * @package pt_extlist
 * @subpackage Domain\Configuration\Data\Fields
 * @author Daniel Lienert <lienert@punkt.de>
 */
class Tx_PtExtlist_Domain_Configuration_Data_Aggregates_AggregateConfigCollectionFactory {
	

	/**
	 * Returns an instance of a aggregate config collection for given aggregate settings
	 *
	 * @param array $aggregateSettings
	 * @return Tx_PtExtlist_Domain_Configuration_Data_Aggregates_AggregateConfigCollection
	 */
	public static function getAggregateConfigCollection($aggregateSettings) {
		$aggregateConfigCollection = self::buildAggregateConfigCollection($aggregateSettings);
	    return $aggregateConfigCollection;	
	}
	
	
	
	/**
	 * Builds a collection of aggregate config objects for a given settings array
	 *
	 * @param array $aggregateSettings
	 * @return Tx_PtExtlist_Domain_Configuration_Data_Aggregates_AggregateConfigCollection
	 */
	protected static function buildAggregateConfigCollection(array $aggregateSettingsArray = null) {
		$aggregateConfigCollection = new Tx_PtExtlist_Domain_Configuration_Data_Aggregates_AggregateConfigCollection();
		foreach ($aggregateSettingsArray as $aggregateIdentifier => $aggregateSettings) {
			$aggregateConfig = new Tx_PtExtlist_Domain_Configuration_Data_Aggregates_AggregateConfig($aggregateIdentifier, $aggregateSettings);
			$aggregateConfigCollection->addAggregateConfig($aggregateConfig);
		}
		return $aggregateConfigCollection;
	}
	
	
	
}

?>