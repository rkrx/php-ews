<?php
/**
 * Contains EWSType_DeleteUserConfigurationType.
 */

/**
 * Represents a request to delete a user configuration object.
 *
 * @package php-ews\Types
 */
class EWSType_DeleteUserConfigurationType extends EWSType
{
    /**
     * Represents the name of the user configuration object to delete.
     *
     * @since Exchange 2007
     *
     * @var EWSType_UserConfigurationNameType
     */
    public $UserConfigurationName;
}
