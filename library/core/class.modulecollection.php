<?php if (!defined('APPLICATION')) exit();
/*
Copyright 2008, 2009 Mark O'Sullivan
This file is part of Garden.
Garden is free software: you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation, either version 3 of the License, or (at your option) any later version.
Garden is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.
You should have received a copy of the GNU General Public License along with Garden.  If not, see <http://www.gnu.org/licenses/>.
Contact Mark O'Sullivan at mark [at] lussumo [dot] com
*/

// A module that contains other modules.
class Gdn_ModuleCollection extends Module {
	/// PROPERTIES ///
	public $Items = array();
	
	/// METHODS ///
	public function Render() {
		foreach($this->Items as $Item) {
			if(is_string($Item)) {
				echo $Item;
			} elseif($Item instanceof Gdn_IModule) {
				$Item->Render();
			} else {
				throw new Exception();
			}
		}
	}
}