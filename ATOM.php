<?php
namespace FeedWriter;

/*
 * Copyright (C) 2012 Michael Bemmerl <mail@mx-server.de>
 *
 * This file is part of the "Universal Feed Writer" project.
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

/**
 * Wrapper for creating ATOM feeds
 *
 * @package     UniversalFeedWriter
 */
class ATOM extends Feed
{
    /**
    * {@inheritdoc}
    */
    public function __construct()
    {
        parent::__construct(Feed::ATOM);
    }

	/**
	 * @param string $name the person name
	 * @param string $uri the person information uri
	 * @param string $email the person email
	 * @return self
	 */
	public function addAuthor($name, $uri = null, $email = null)
	{
		$authorInfo = [
			'name'	=> $name
		];
		if (!empty($uri)) {
			$authorInfo['uri'] = $uri;
		}
		if (!empty($email)) {
			$authorInfo['email'] = $email;
		}
		$this->setChannelElement('author', $authorInfo);

		return $this;
	}

}
