<?php
/**
 * This field lets you put an notice message box into your backend.
 *
 * <code>
 * NoticeMessage::create(
 *    $content = 'your notice'
 * )
 * </code>
 *
 * or with the optional name parameter
 *
 * <code>
 * NoticeMessage::create(
 *    $content = 'your notice',
 *    $name = 'FieldName'
 * )
 * </code>
 */

namespace FriendsOfSilverStripe\Backendmessages;

class NoticeMessage
{
    /**
     * @var string
     */
    public static $CSSClass = 'notice';

    /**
     * creates a message box.
     *
     * @param string $message
     * @param string $name (optional)
     *
     * @return MessageBoxField
     */
    public static function create($message, $name = null)
    {
        return Message::generic($message, self::$CSSClass, $name);
    }
}
