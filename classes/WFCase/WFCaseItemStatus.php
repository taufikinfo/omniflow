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

namespace OmniFlow\WFCase;
use OmniFlow;
use OmniFlow\CaseItemStatusModel;


/**
 * Description of WFCaseItem
 *
 * @author ralph
 */
class WFCaseItemStatus extends \OmniFlow\WFObject
{
    static $Notes;
        var $id;
        var $caseId;
        var $itemId;
        var $flowId;
        var $userId;
        var $actor;
        var $status;
        var $statusDate;
        var $notes;
        

    public function __construct(\OmniFlow\WFCase\WFCaseItem $caseItem,$newStatus,$from) {

        $this->caseId=$caseItem->case->caseId;
        $this->itemId=$caseItem->id;
        $this->status = $newStatus;
        if ($from!==null)
            $this->flowId=$from->id;
        $user=OmniFlow\Context::getUser();
        $this->userId=  $user->id;
	}
    public function insert()
    {
        $model=new \OmniFlow\CaseItemStatusModel();
        
        $this->notes = self::$Notes;
        self::$Notes='';
        
        $model->insert($this);
    }
    public function update()
    {
        $model=new \OmniFlow\CaseItemStatusModel();
        $model->update($this);
    }   
}                       
