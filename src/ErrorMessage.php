<?php
/**
 * This field lets you put an error message box into your backend.
 *
 * <code>
 * ErrorMessage::create(
 *    $content = 'your error'
 * )
 * </code>
 *
 * or with the optional name parameter
 *
 * <code>
 * ErrorMessage::create(
 *    $content = 'your error',
 *    $name = 'FieldName'
 * )
 * </code>
 */

namespace FriendsOfSilverStripe\Backendmessages;

class ErrorMessage
{
    /**
     * @var string
     */
    public static $CSSClass = 'alert-danger';

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
