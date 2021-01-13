<?php

namespace Arispati\EmojiRemover;

use Arispati\EmojiRemover\EmojiRegex;

class EmojiRemover
{
    /**
     * Filter emoji from text
     *
     * @param string|null $text
     * @param string $replaceTo
     * @return string|null
     */
    public static function filter(?string $text, string $replaceTo = ''): ?string
    {
        if (is_null($text) || $text == '') {
            return $text;
        }

        try {
            return preg_replace(EmojiRegex::get(), $replaceTo, $text);
        } catch (\Exception $e) {
            return $text;
        }
    }
}
