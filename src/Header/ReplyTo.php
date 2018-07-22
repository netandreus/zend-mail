<?php
/**
 * @see       https://github.com/zendframework/zend-mail for the canonical source repository
 * @copyright Copyright (c) 2005-2018 Zend Technologies USA Inc. (https://www.zend.com)
 * @license   https://github.com/zendframework/zend-mail/blob/master/LICENSE.md New BSD License
 */

namespace Zend\Mail\Header;

class ReplyTo extends AbstractAddressList
{
    protected $fieldName = 'Reply-To';
    protected static $type = 'reply-to';

    protected static function cleanFieldName($fieldName)
    {
        $allowed = [
            'replyto', 'reply_to'
        ];

        foreach ($allowed as $name) {
            if (strtolower($fieldName) === $name) {
                return static::$type;
            }
        }

        return $fieldName;
    }
}
