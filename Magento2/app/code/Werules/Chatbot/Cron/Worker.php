<?php
/**
 * Magento Chatbot Integration
 * Copyright (C) 2017
 *
 * This file is part of Werules/Chatbot.
 *
 * Werules/Chatbot is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program. If not, see <http://www.gnu.org/licenses/>.
 */

namespace Werules\Chatbot\Cron;

class Worker
{

	protected $logger;

	/**
	 * Constructor
	 *
	 * @param \Psr\Log\LoggerInterface $logger
	 */
	public function __construct(\Psr\Log\LoggerInterface $logger)
	{
		$this->logger = $logger;
	}

	/**
	 * Execute the cron
	 *
	 * @return void
	 */
	public function execute()
	{
//		if (shell_exec('ps aux | grep ' . __FILE__ . ' | wc  -l') > 1) {
//			exit('already running...');
//		}
//		OR
//		$f = fopen('lock', 'w') or die ('Cannot create lock file');
//		if (flock($f, LOCK_EX | LOCK_NB)) {
//			// yay
//		}
		$this->logger->addInfo("Cronjob Worker is executed.");
	}
}
