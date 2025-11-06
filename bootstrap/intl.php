<?php

/**
 * Bootstrap file to provide NumberFormatter class when intl extension is not available.
 * This file should be loaded early in the application lifecycle.
 */

if (!extension_loaded('intl') && !class_exists('NumberFormatter', false)) {
    /**
     * Minimal NumberFormatter implementation for when intl extension is not available.
     */
    class NumberFormatter
    {
        // Format style constants
        const PATTERN_DECIMAL = 0;
        const DECIMAL = 1;
        const CURRENCY = 2;
        const PERCENT = 3;
        const SCIENTIFIC = 4;
        const SPELLOUT = 5;
        const ORDINAL = 6;
        const DURATION = 7;
        const PATTERN_RULEBASED = 9;
        const IGNORE = 0;
        const DEFAULT_STYLE = 1;
        const ROUND_CEILING = 0;
        const ROUND_FLOOR = 1;
        const ROUND_DOWN = 2;
        const ROUND_UP = 3;
        const ROUND_HALFEVEN = 4;
        const ROUND_HALFDOWN = 5;
        const ROUND_HALFUP = 6;
        const PAD_BEFORE_PREFIX = 0;
        const PAD_AFTER_PREFIX = 1;
        const PAD_BEFORE_SUFFIX = 2;
        const PAD_AFTER_SUFFIX = 3;
        const PARSE_INT_ONLY = 0;
        const GROUPING_USED = 1;
        const DECIMAL_ALWAYS_SHOWN = 2;
        const MAX_INTEGER_DIGITS = 3;
        const MIN_INTEGER_DIGITS = 4;
        const INTEGER_DIGITS = 5;
        const MAX_FRACTION_DIGITS = 6;
        const MIN_FRACTION_DIGITS = 7;
        const FRACTION_DIGITS = 8;
        const MULTIPLIER = 9;
        const GROUPING_SIZE = 10;
        const ROUNDING_MODE = 11;
        const ROUNDING_INCREMENT = 12;
        const FORMAT_WIDTH = 13;
        const PADDING_POSITION = 14;
        const SECONDARY_GROUPING_SIZE = 15;
        const SIGNIFICANT_DIGITS_USED = 16;
        const MIN_SIGNIFICANT_DIGITS = 17;
        const MAX_SIGNIFICANT_DIGITS = 18;
        const LENIENT_PARSE = 19;
        const POSITIVE_PREFIX = 0;
        const POSITIVE_SUFFIX = 1;
        const NEGATIVE_PREFIX = 2;
        const NEGATIVE_SUFFIX = 3;
        const PADDING_CHARACTER = 4;
        const CURRENCY_CODE = 5;
        const DEFAULT_RULESET = 6;
        const PUBLIC_RULESETS = 7;
        const DECIMAL_SEPARATOR_SYMBOL = 0;
        const GROUPING_SEPARATOR_SYMBOL = 1;
        const PATTERN_SEPARATOR_SYMBOL = 2;
        const PERCENT_SYMBOL = 3;
        const ZERO_DIGIT_SYMBOL = 4;
        const DIGIT_SYMBOL = 5;
        const MINUS_SIGN_SYMBOL = 6;
        const PLUS_SIGN_SYMBOL = 7;
        const CURRENCY_SYMBOL = 8;
        const INTL_CURRENCY_SYMBOL = 9;
        const MONETARY_SEPARATOR_SYMBOL = 10;
        const EXPONENTIAL_SYMBOL = 11;
        const PERMILL_SYMBOL = 12;
        const PAD_ESCAPE_SYMBOL = 13;
        const INFINITY_SYMBOL = 14;
        const NAN_SYMBOL = 15;
        const SIGNIFICANT_DIGIT_SYMBOL = 16;
        const MONETARY_GROUPING_SEPARATOR_SYMBOL = 17;
        const TYPE_DEFAULT = 0;
        const TYPE_INT32 = 1;
        const TYPE_INT64 = 2;
        const TYPE_DOUBLE = 3;
        const TYPE_CURRENCY = 4;

        private $locale;
        private $style;
        private $pattern;

        public function __construct(?string $locale = null, int $style = 1, ?string $pattern = null)
        {
            $this->locale = $locale ?? 'en_US';
            $this->style = $style;
            $this->pattern = $pattern;
        }

        public function format($value): string
        {
            if (is_float($value)) {
                return number_format($value, 2, '.', ' ');
            }
            return number_format((float)$value, 0, '.', ' ');
        }

        public function formatCurrency(float $value, string $currency): string
        {
            return number_format($value, 2, '.', ' ') . ' ' . $currency;
        }

        public function parse(string $value, int $type = 1): float|false
        {
            $cleaned = str_replace([' ', ','], '', $value);
            return is_numeric($cleaned) ? (float)$cleaned : false;
        }

        public function setAttribute(int $attr, int $value): bool
        {
            return true;
        }

        public function getAttribute(int $attr): int|float|false
        {
            return false;
        }

        public function setTextAttribute(int $attr, string $value): bool
        {
            return true;
        }

        public function getTextAttribute(int $attr): string|false
        {
            return false;
        }

        public function setSymbol(int $attr, string $value): bool
        {
            return true;
        }

        public function getSymbol(int $attr): string|false
        {
            return false;
        }

        public function setPattern(string $pattern): bool
        {
            $this->pattern = $pattern;
            return true;
        }

        public function getPattern(): string|false
        {
            return $this->pattern ?? false;
        }

        public function getLocale(?int $type = null): string|false
        {
            return $this->locale;
        }

        public function getErrorCode(): int
        {
            return 0;
        }

        public function getErrorMessage(): string
        {
            return '';
        }
    }
}

