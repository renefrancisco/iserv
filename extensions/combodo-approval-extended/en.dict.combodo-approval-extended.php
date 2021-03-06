<?php
// Copyright (C) 2012 Combodo SARL
//
//   This program is free software; you can redistribute it and/or modify
//   it under the terms of the GNU General Public License as published by
//   the Free Software Foundation; version 3 of the License.
//
//   This program is distributed in the hope that it will be useful,
//   but WITHOUT ANY WARRANTY; without even the implied warranty of
//   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
//   GNU General Public License for more details.
//
//   You should have received a copy of the GNU General Public License
//   along with this program; if not, write to the Free Software
//   Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA

/**
 * Localized data
 *
 * @author      Erwan Taloc <erwan.taloc@combodo.com>
 * @author      Romain Quetiez <romain.quetiez@combodo.com>
 * @author      Denis Flaven <denis.flaven@combodo.com>
 * @license     http://www.opensource.org/licenses/gpl-3.0.html LGPL
 */

Dict::Add('EN US', 'English', 'English', array(
	// Dictionary entries go here
	'Menu:Ongoing approval' => 'Requests waiting for approval',
	'Menu:Ongoing approval+' => 'Requests waiting for approval',
	'Approbation:ApprovalSubject' => 'Your approval is requested: $object->ref$',
	'Approbation:ApprovalBody' => '<p>Dear $approver->friendlyname$, please take some time to approve or reject ticket $object->ref$</p>
				      <b>Caller:</b>$object->caller_id_friendlyname$<br>
				      <b>Title:</b>$object->title$<br>
				      <b>Service:</b>$object->service_name$<br>
				      <b>Service subcategory:</b>$object->servicesubcategory_name$<br>
				      <b>Description</b>				     
				      <pre>$object->description$</pre>
				      <b>Additional information:</b>
				      <pre>$object->head(public_log)$</pre>',
	'Approbation:FormBody' => '<p>Dear $approver->friendlyname$, please take some time to approve or reject the ticket</p>',
	'Approbation:ApprovalRequested' => 'Your approval is requested',
	'Approbation:Introduction' => '<p>Dear $approver->friendlyname$, please take some time to approve or reject ticket $object->friendlyname$</p>',


));

//
// Class: ApprovalRule
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:ApprovalRule' => 'Approval rule',
	'Class:ApprovalRule+' => '',
	'Class:ApprovalRule/Attribute:name' => 'Name',
	'Class:ApprovalRule/Attribute:name+' => '',
	'Class:ApprovalRule/Attribute:description' => 'Description',
	'Class:ApprovalRule/Attribute:description+' => '',
	'Class:ApprovalRule/Attribute:level1_rule' => 'Approval Level 1',
	'Class:ApprovalRule/Attribute:level1_rule+' => '',
	'Class:ApprovalRule/Attribute:level1_default_approval' => 'Automatically approved if no answer at Level 1',
	'Class:ApprovalRule/Attribute:level1_default_approval+' => '',
	'Class:ApprovalRule/Attribute:level1_default_approval/Value:no' => 'no',
	'Class:ApprovalRule/Attribute:level1_default_approval/Value:no+' => 'no',
	'Class:ApprovalRule/Attribute:level1_default_approval/Value:yes' => 'yes',
	'Class:ApprovalRule/Attribute:level1_default_approval/Value:yes+' => 'yes',
	'Class:ApprovalRule/Attribute:level1_timeout' => 'Level 1 approval delay (hours)',
	'Class:ApprovalRule/Attribute:level1_timeout+' => '',
	'Class:ApprovalRule/Attribute:level2_rule' => 'Approval Level 2',
	'Class:ApprovalRule/Attribute:level2_rule+' => '',
	'Class:ApprovalRule/Attribute:level2_default_approval' => 'Automatically approved if no answer at Level 2',
	'Class:ApprovalRule/Attribute:level2_default_approval+' => '',
	'Class:ApprovalRule/Attribute:level2_default_approval/Value:no' => 'no',
	'Class:ApprovalRule/Attribute:level2_default_approval/Value:no+' => 'no',
	'Class:ApprovalRule/Attribute:level2_default_approval/Value:yes' => 'yes',
	'Class:ApprovalRule/Attribute:level2_default_approval/Value:yes+' => 'yes',
	'Class:ApprovalRule/Attribute:level2_timeout' => 'Level 2 approval delay (hours)',
	'Class:ApprovalRule/Attribute:level2_timeout+' => '',
	'Class:ApprovalRule/Attribute:servicesubcategory_list' => 'Service subcategory',
	'Class:ApprovalRule/Attribute:servicesubcategory_list+' => '',
	'Class:ApprovalRule/Attribute:coveragewindow_id' => 'Coverage window',
	'Class:ApprovalRule/Attribute:coveragewindow_id+' => '',
	'Class:ApprovalRule/Attribute:coveragewindow_name' => 'Coverage window name',
	'Class:ApprovalRule/Attribute:coveragewindow_name+' => '',
));

//
// Class: ServiceSubcategory
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:ServiceSubcategory/Attribute:approvalrule_id' => 'Approval rule',
	'Class:ServiceSubcategory/Attribute:approvalrule_id+' => '',
	'Class:ServiceSubcategory/Attribute:approvalrule_name' => 'Approval rule name',
	'Class:ServiceSubcategory/Attribute:approvalrule_name+' => '',
	'ApprovalRule:baseinfo' => 'General information',
	'ApprovalRule:Level1' => 'Approval Level 1',
	'ApprovalRule:Level2' => 'Approval Level 2',
	'Menu:ApprovalRule' => 'Approval rules',
	'Menu:ApprovalRule+' => 'All approval rules',

));

?>
