<?php
/**
 * This field lets you put an arbitrary message box into your backend.
 *
 * <code>
 * MessageBoxField::create(
 *    $name = "yourmessageboxfield",
 *    $content = 'your message'
 * )->addCSSClass('notice');
 * </code>
 */
class MessageBoxField extends LiteralField
{
    /**
     * @var string
     */
    protected $classes = 'message';

    /**
     * @var string
     */
    public function addCSSClass($CSSClass)
    {
        $this->classes .= ' '.(string) $CSSClass;

        return $this;
    }

    /**
     * adjusts the return to include the required classes.
     *
     * @param array $properties
     *
     * @return string
     */
    public function FieldHolder($properties = array())
    {
        $content = $this->content;

        if ($content instanceof ViewableData) {
            if ($properties) {
                $content = $content->customise($properties);
            }

            $content = $content->forTemplate();
        }

        return '<p class="'.$this->classes.'"">'.$content.'</p>';
    }
}
