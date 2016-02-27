<?php

/*
 * WorldEditArt
 *
 * Copyright (C) 2016 PEMapModder
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Lesser General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * @author PEMapModder
 */

namespace WorldEditArt\User;

use WorldEditArt\Objects\BlockStream\Cassette;

class CassetteQueue{
	/** @var WorldEditArtUser */
	private $user;
	/** @var Cassette[] $cassettes */
	private $cassettes = [];

	public function __construct(WorldEditArtUser $user){
		$this->user = $user;
	}
}
