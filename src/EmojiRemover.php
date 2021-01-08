<?php

namespace Arispati\EmojiRemover;

use Arispati\EmojiRemover\EmojiRegex;

class EmojiRemover
{
    /**
     * Filter emoji from text
     *
     * @param string $text
     * @param string $replaceTo
     * @return string
     */
    public static function filter(string $text, string $replaceTo = ''): string
    {
        try {
            return preg_replace(EmojiRegex::get(), $replaceTo, $text);
        } catch (\Exception $e) {
            return $text;
        }
    }
}
