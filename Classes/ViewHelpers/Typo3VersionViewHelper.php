<?php
namespace Thucke\ThRating\ViewHelpers;

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2013 Thomas Hucke <thucke@web.de>
 *  All rights reserved
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
 * The TYPO3 version viewhelper
 *
 * @version $Id:$
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License, version 2
 */
class Typo3VersionViewHelper extends \TYPO3\CMS\Fluid\Core\ViewHelper\AbstractViewHelper
{
    public function initializeArguments()
    {
        $this->registerArgument('testVersion', 'string', 'The version number to check against', true);
        $this->registerArgument('testOperator', 'string', 'The operator', true);
    }

    /**
     * Gives the current TYPO3 version
     *
     * @return string test result
     * @api
     */
    public function render()
    {
        $testVersion = $this->arguments['testVersion'];
        $testOperator = $this->arguments['testOperator'];
        $result = version_compare(TYPO3_version, $testVersion, $testOperator);

        return $result;
    }
}
