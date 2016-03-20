<?php
/**
 * This field lets you put an success message box into your backend.
 *
 * <code>
 * SuccessMessage::create(
 *    $content = 'your request was successful submitted.'
 * )
 * </code>
 *
 * or with the optional name parameter
 *
 * <code>
 * SuccessMessage::create(
 *    $content = 'your warning',
 *    $name = 'fieldName
 * )
 * </code>
 */
class SuccessMessage
{
    /**
     * @var string
     */
    public static $CSSClass = 'good';

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
