<?php

namespace FriendsOfBotble\Comment\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

final class ColorRule implements ValidationRule
{
    protected const HEX_PATTERN = '/^#([0-9a-fA-F]{3}|[0-9a-fA-F]{4}|[0-9a-fA-F]{6}|[0-9a-fA-F]{8})$/';

    protected const RGB_PATTERN = '/^rgba?\(\s*\d{1,3}\s*,\s*\d{1,3}\s*,\s*\d{1,3}\s*(,\s*(0|1|0?\.\d+)\s*)?\)$/';

    protected const HSL_PATTERN = '/^hsla?\(\s*\d{1,3}\s*,\s*\d{1,3}%\s*,\s*\d{1,3}%\s*(,\s*(0|1|0?\.\d+)\s*)?\)$/';

    protected const CSS_KEYWORDS = [
        'inherit',
        'initial',
        'unset',
        'revert',
        'currentColor',
        'transparent',
    ];

    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        if (! is_string($value)) {
            $fail(trans('validation.string'));

            return;
        }

        if (
            ! in_array($value, self::CSS_KEYWORDS)
            && ! preg_match(self::HEX_PATTERN, $value)
            && ! preg_match(self::RGB_PATTERN, $value)
            && ! preg_match(self::HSL_PATTERN, $value)
        ) {
            $fail(trans('validation.regex', ['attribute' => $attribute]));
        }
    }

    public static function make(): static
    {
        return new static();
    }
}
