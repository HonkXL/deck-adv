<?php
/**
 * @copyright Copyright (c) 2018 Julius Härtl <jus@bitgrid.net>
 *
 * @author Julius Härtl <jus@bitgrid.net>
 *
 * @license GNU AGPL version 3 or any later version
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program. If not, see <http://www.gnu.org/licenses/>.
 *
 */

namespace OCA\Deck\Activity;


class ChangeSet {

	private $before;
	private $after;

	public function __construct($before = null, $after = null) {
		if ($before !== null) {
			$this->setBefore($before);
		}
		if ($after !== null) {
			$this->setAfter($after);
		}
	}

	public function setBefore($before) {
		$this->before = clone $before;
	}

	public function setAfter($after) {
		$this->after = clone $after;
	}

	public function getBefore() {
		return $this->before;
	}

	public function getAfter() {
		return $this->after;
	}
}
