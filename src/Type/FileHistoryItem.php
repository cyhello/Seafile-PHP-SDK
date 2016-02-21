<?php

namespace Seafile\Client\Type;

use DateTime;

/**
 * File history item type class
 *
 * @package   Seafile\Type
 * @author    Rene Schmidt DevOps UG (haftungsbeschränkt) & Co. KG <rene@reneschmidt.de>
 * @copyright 2015 Rene Schmidt DevOps UG (haftungsbeschränkt) & Co. KG <rene@reneschmidt.de>
 * @license   https://opensource.org/licenses/MIT MIT
 * @link      https://github.com/rene-s/seafile-php-sdk
 */
class FileHistoryItem extends AbstractType
{
    /**
     * @var int
     */
    public $revFileSize = 0;

    /**
     * @var string
     */
    public $repoId = '';

    /**
     * @var DateTime|null
     */
    public $ctime = null;

    /**
     * @var string
     */
    public $creatorName = '';

    /**
     * @var string
     */
    public $creator = '';

    /**
     * @var string
     */
    public $rootId = '';

    /**
     * @var string
     */
    public $revRenamedOldPath = '';

    /**
     * @var string
     */
    public $parentId = '';

    /**
     * @var bool
     */
    public $newMerge = false;

    /**
     * @var int
     */
    public $version = 0;

    /**
     * @var bool
     */
    public $conflict = false;

    /**
     * @var string
     */
    public $desc = '';

    /**
     * @var string
     */
    public $id = '';

    /**
     * @var string
     */
    public $revFileId = '';

    /**
     * @var null
     */
    public $secondParentId = null;
}
