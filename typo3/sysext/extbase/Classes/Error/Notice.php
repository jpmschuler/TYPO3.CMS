<?php
declare(strict_types = 1);

namespace TYPO3\CMS\Extbase\Error;

/*
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

/**
 * An object representation of a generic notice. Subclass this to create
 * more specific notices if necessary.
 */
class Notice extends Message
{
    /**
     * @var string
     */
    protected $message = 'Unknown notice';
}
