<?php
/******************************************************************************
 *                                                                            *
 *    This file is part of RPB Chessboard, a WordPress plugin.                *
 *    Copyright (C) 2013-2016  Yoann Le Montagner <yo35 -at- melix.net>       *
 *                                                                            *
 *    This program is free software: you can redistribute it and/or modify    *
 *    it under the terms of the GNU General Public License as published by    *
 *    the Free Software Foundation, either version 3 of the License, or       *
 *    (at your option) any later version.                                     *
 *                                                                            *
 *    This program is distributed in the hope that it will be useful,         *
 *    but WITHOUT ANY WARRANTY; without even the implied warranty of          *
 *    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the           *
 *    GNU General Public License for more details.                            *
 *                                                                            *
 *    You should have received a copy of the GNU General Public License       *
 *    along with this program.  If not, see <http://www.gnu.org/licenses/>.   *
 *                                                                            *
 ******************************************************************************/


require_once(RPBCHESSBOARD_ABSPATH . 'models/abstract/adminpage.php');


/**
 * Model associated to the 'Theming' page in the backend.
 */
class RPBChessboardModelAdminPageTheming extends RPBChessboardAbstractModelAdminPage {

	public function __construct() {
		parent::__construct();
		$this->loadDelegateModel('Common/DefaultOptionsEx');

		// Create the sub-pages.
		$this->addSubPage('Colorsets', __('Colorsets', 'rpbchessboard'), true);
		$this->addSubPage('Piecesets', __('Piecesets', 'rpbchessboard'));
	}


	/**
	 * URL to which the the request for modifying the colorsets/piecesets will be dispatched.
	 *
	 * @return string
	 */
	public function getFormActionURL() {
		return $this->getSubPage($this->getSelectedSubPageName())->link;
	}


	/**
	 * Action code corresponding to the request to edit an existing colorset.
	 *
	 * @return string
	 */
	public function getEditAction() {
		return 'edit-colorset';
	}


	/**
	 * Action code corresponding to the request to delete an existing colorset.
	 *
	 * @return string
	 */
	public function getDeleteAction() {
		return 'delete-colorset';
	}
}
