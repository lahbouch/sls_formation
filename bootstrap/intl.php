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

