<?php

namespace Reviewsvanklanten\Settings;

use Reviewsvanklanten\Helpers\View;

use function Reviewsvanklanten\setting;

class UseCustomTemplate extends AbstractSetting
{
    public const T_S_KEY = 'rvk_use_custom_templates';

    public static function callback()
    {
        View::render('/settings/checkbox_input', [
            'value' => static::get_value(true),
            'name' => static::T_S_KEY,
            'description' => 'Met deze instellingen gebruik je de standaard Reviews van Klanten templates.'
        ]);
    }

    public static function get_value($fallback = null)
    {
        return filter_var(setting(static::T_S_KEY, $fallback?? true), FILTER_VALIDATE_BOOLEAN);
    }

    public static function title(): string
    {
        return 'Gebruik onze templates';
    }
}
