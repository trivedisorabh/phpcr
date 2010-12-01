<?php
/**
 * Interface to describe the contract to implement a length class.
 *
 * This file was ported from the Java JCR API to PHP by
 * Karsten Dambekalns <karsten@typo3.org> for the FLOW3 project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Lesser General Public License as published by the
 * Free Software Foundation, either version 3 of the License, or (at your
 * option) any later version. Alternatively, you may use the Simplified
 * BSD License.
 *
 * This script is distributed in the hope that it will be useful, but
 * WITHOUT ANY WARRANTY; without even the implied warranty of MERCHAN-
 * TABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU Lesser
 * General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with the script.
 * If not, see {@link http://www.gnu.org/licenses/lgpl.html}.
 *
 * The TYPO3 project - inspiring people to share!
 *
 * @license http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 * @license http://opensource.org/licenses/bsd-license.php Simplified BSD License
 *
 * @package phpcr
 * @subpackage interfaces
 */


declare(ENCODING = 'utf-8');
namespace PHPCR\Query\QOM;

/**
 * Evaluates to the length (or lengths, if multi-valued) of a property.
 *
 * The length should be computed as though the getLength method (or getLengths,
 * if multi-valued) of \PHPCR\PropertyInterface were called.
 *
 * If propertyValue evaluates to null, the Length operand also evaluates to null.
 *
 * @package phpcr
 * @subpackage interfaces
 * @api
 */
interface LengthInterface extends DynamicOperandInterface {

    /**
     * Gets the property value for which to compute the length.
     *
     * @return \PHPCR\Query\QOM\PropertyValueInterface the property value; non-null
     * @api
     */
    public function getPropertyValue();

}
