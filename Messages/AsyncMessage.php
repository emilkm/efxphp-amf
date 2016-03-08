<?php
/**
 * efxphp (http://emilmalinov.com/efxphp)
 *
 * @copyright Copyright (c) 2015 Emil Malinov
 * @license   http://www.apache.org/licenses/LICENSE-2.0 Apache License 2.0
 * @link      http://github.com/emilkm/efxphp
 * @package   efxphp
 */

namespace emilkm\efxphp\Amf\Messages;

/**
 * @author     Emil Malinov
 * @package    efxphp
 * @subpackage amf
 */
class AsyncMessage extends AbstractMessage
{
    /**
     * @var string
     */
    public $correlationId;
}
