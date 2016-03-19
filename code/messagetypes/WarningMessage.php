<?php
/**
 * This field lets you put an warning message box into your backend.
 *
 * <code>
 * WarningMessage::create(
 *    $content = 'your warning'
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
     *
     * @return MessageBoxField
     */
    public static function create($message)
    {
        return Message::generic($message, self::$CSSClass);
    }
}
