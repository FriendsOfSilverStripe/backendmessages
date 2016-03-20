<?php
/**
 * This field lets you put an warning message box into your backend.
 *
 * <code>
 * WarningMessage::create(
 *    $content = 'your warning'
 * )
 * </code>
 *
 * or with the optional name parameter
 *
 * <code>
 * WarningMessage::create(
 *    $content = 'your warning',
 *    $name = 'fieldName'
 * )
 * </code>
 */
class WarningMessage
{
    /**
     * @var string
     */
    public static $CSSClass = 'warning';

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
