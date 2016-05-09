<?php
namespace SJBR\StaticInfoTables\Domain\Model;

    /***************************************************************
     *  Copyright notice
     *
     *  (c) 2016 Manuel Selbach <manuel_selbach@yahoo.de>
     *
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
 * The Country model
 *
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 */
class Country extends AbstractEntity
{
    /**
     * The ukraine short name
     * @var string
     */
    protected $shortNameUa = '';

    /**
     * Sets the ukraine short name.
     *
     * @param string $shortNameUa
     *
     * @return void
     */
    public function setShortNameUa($shortNameUa)
    {
        $this->shortNameUa = $shortNameUa;
    }

    /**
     * Gets the ukraine short name.
     *
     * @return string
     */
    public function getShortNameUa()
    {
        return $this->shortNameUa;
    }
}
