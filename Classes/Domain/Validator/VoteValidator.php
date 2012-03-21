<?php
/***************************************************************
*  Copyright notice
*
*  (c) 2010 Thomas Hucke <thucke@web.de> 
*  All rights reserved
*
*  This class is a backport of the corresponding class of FLOW3.
*  All credits go to the v5 team.
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
 * A validator for Votes
 *
 * @author		Thomas Hucke <thucke@web.de>
 * @copyright Copyright belongs to the respective authors
 * @scope singleton
 */
class Tx_ThRating_Domain_Validator_VoteValidator extends Tx_Extbase_Validation_Validator_AbstractValidator {

	/**
	 * If the given Vote is valid
	 *
	 * @param Tx_ThRating_Domain_Model_Vote $vote The vote
	 * @return boolean true
	 */
	public function isValid($vote) {
		//a vote object must be given
		if (!$vote instanceof Tx_ThRating_Domain_Model_Vote) {
			return false;
		} 
		//a vote object must have a vote
		if (!$vote->getVote() instanceof Tx_ThRating_Domain_Model_Stepconf) {
			$this->addError(Tx_Extbase_Utility_Localization::translate('error.validator.vote.vote', 'ThRating'), 1283537235);
			return false;
		}
		//a vote must have a valid voter
		if (!$vote->getVoter() instanceof Tx_Extbase_Domain_Model_FrontendUser) {
			$this->addError(Tx_Extbase_Utility_Localization::translate('error.validator.vote.voter', 'ThRating'), 1283540684);
			return false;
		}
		//check if the given vote is a valid step for this ratingobject
		if (!$vote->getRating()->getRatingobject()->getStepconfs()->contains($vote->getVote())) {
			$this->addError(Tx_Extbase_Utility_Localization::translate('error.validator.vote.stepconf', 'ThRating'), 1283612492);
			return false;
		}
		return true;
	}
}
?>