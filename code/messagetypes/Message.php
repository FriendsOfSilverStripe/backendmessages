<?php
/**
 * This field lets you put an arbitrary message into your backend.
 *
 * <code>
 * Message::generic(
 *    $content = 'your message'
 * )
 * </code>
 *
 * or with the optional name parameter
 *
 * <code>
 * Message::generic(
 *    $content = 'your message',
 *    $CSSClass = null,
 *    $name = 'fieldName'
 * )
 * </code>
 */
class Message
{
    /**
     * Creates a error message.
     *
     * @param string $message
     * @param string $CSSClass (optional)
     * @param string $name (optional)
     *
     * @return MessageBoxField
     */
    public static function generic($message = null, $CSSClass = null, $name = null)
    {
        // ensure that we are having a name as well as keeping it consistent with the original behaviour
        if ($name == null) {
            $name = md5($message);
        }

        return MessageBoxField::create(
            $name,
            $message
        )->addCSSClass($CSSClass);
    }

    /**
     * Creates a error message.
     *
     * @param string $message
     * @param string $name (optional)
     *
     * @return MessageBoxField
     */
    public static function error($message = null, $name = null)
    {
        return self::generic($message, ErrorMessage::$CSSClass, $name);
    }

    /**
     * Creates a warning message.
     *
     * @param string $message
     * @param string $name (optional)
     *
     * @return MessageBoxField
     */
    public static function warning($message = null, $name = null)
    {
        return self::generic($message, WarningMessage::$CSSClass, $name);
    }

    /**
     * Creates a success message.
     *
     * @param string $message
     * @param string $name (optional)
     *
     * @return MessageBoxField
     */
    public static function success($message = null, $name = null)
    {
        return self::generic($message, SuccessMessage::$CSSClass, $name);
    }

    /**
     * Creates a notice message.
     *
     * @param string $message
     * @param string $name (optional)
     *
     * @return MessageBoxField
     */
    public static function notice($message = null, $name = null)
    {
        return self::generic($message, NoticeMessage::$CSSClass, $name);
    }
}
