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
 * Wrapper class for subcontroller. Handles requests for subcontrollers
 * and emulates dispatching functionality like forwarding etc.
 * 
 * @author Michael Knoll <knoll@punkt.de>
 * @package TYPO3
 * @subpackage pt_extlist
 */
class Tx_PtExtlist_Controller_SubcontrollerWrapper extends Tx_PtExtlist_Controller_AbstractController {

	/**
	 * Holds a reference of the controller to be used as subcontroller
	 *
	 * @var Tx_PtExtlist_Controller_AbstractController
	 */
	protected $subcontroller;

	
	
	/**
	 * Injector for subcontroller
	 *
	 * @param Tx_PtExtlist_Controller_AbstractController $subcontroller
	 */
	public function injectSubcontroller(Tx_PtExtlist_Controller_AbstractController $subcontroller) {
		$this->subcontroller = $subcontroller;
	}
	
	
}