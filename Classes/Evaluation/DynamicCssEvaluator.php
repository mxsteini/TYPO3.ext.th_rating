<?php
/** @noinspection PhpUnusedParameterInspection */
namespace Thucke\ThRating\Evaluation;

use Thucke\ThRating\Utility\DeprecationHelperUtility;

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
 * Evaluator
 * Remove the dynamic CSS file when values are modified in the BE
 *
 * @version $Id:$
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License, version 2
 */
class DynamicCssEvaluator
{
    /**
     * This function needs to return JavaScript code for client side evaluation of the
     * field value. The JavaScript variable "value" is set to the field value in the context
     * of this JS snippet.
     * In this example we just add the string "[added by JS]" to the field value.
     *
     * @return    string JavaScript code for evaluating the
     */
    public function returnFieldJS()
    {
        return 'return value;';
    }

    /**
     * This is the server side (i.e. PHP) side of the field evaluation.
     * We only remove the dynamic CSS file to re-create it the next request
     *
     * @param    mixed $value : The value that has to be checked
     * @param    string $is_in : Is-In String
     * @param    int $set : Determines if the field can be set (value correct) or not (PASSED BY REFERENCE!)
     * @return    string      The new value of the field
     */
    public function evaluateFieldValue($value, $is_in, &$set)
    {
        $this->clearCachePostProc(null, null, null);

        return $value;
    }

    /**
     * Processings when cache is cleared
     * 1. Delete the file 'typo3temp/thratingDyn.css'
     *
     * @param $_funcRef
     * @param $params
     * @param null $pObj
     */
    public function clearCachePostProc($_funcRef, $params, $pObj = null)
    {
        if (file_exists(DeprecationHelperUtility::getPublicPath() . 'typo3temp/thratingDyn.css')) {
            unlink(DeprecationHelperUtility::getPublicPath() . 'typo3temp/thratingDyn.css');
        }
        //recreate file with zero length - so its still included via TS
        $fp = fopen(DeprecationHelperUtility::getPublicPath() . 'typo3temp/thratingDyn.css', 'wb');
        fwrite($fp, '');
        fclose($fp);
    }
}
