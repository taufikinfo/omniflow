<?php

/*
 * Copyright (c) 2015, Omni-Workflow - Omnibuilder.com by OmniSphere Information Systems. All rights reserved. For licensing, see LICENSE.md or http://workflow.omnibuilder.com/license
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
namespace OmniFlow;
namespace OmniFlow\enum;

/**
 * Description of StatusTypes
 *
 * @author ralph
 */
abstract class StatusTypes
{
	const None = "";
	const Started = "Started";
	const Waiting ="Waiting";
    const Updated="Updated";
	const Completed="Complete";
	const Terminated="Terminated";
	const Error="Error";
	// etc.
}

