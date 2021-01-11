<?php

namespace Arispati\EmojiRemover\Test;

use PHPUnit\Framework\TestCase;
use Arispati\EmojiRemover\EmojiRemover;

class FilterTest extends TestCase
{
    public function testRemoveEmoji(): void
    {
        $text = 'Emoji 🌆';

        $this->assertEquals('Emoji ', EmojiRemover::filter($text));
    }

    public function testReplaceEmojiToSpesificString()
    {
        $text = 'Emoji 😂';

        $this->assertEquals('Emoji removed', EmojiRemover::filter($text, 'removed'));
    }

    public function testRemoveEmojiOnTextWithNumber(): void
    {
        $text = 'Emoji 123 🐱';

        $this->assertEquals('Emoji 123 ', EmojiRemover::filter($text));
    }

    public function testRemoveEmojiOnTextWithSymbol(): void
    {
        $text = "Emoji !@#$%^&*()-=_+\]'/[;.,]|}\"?{:><} 🚚";

        $this->assertEquals("Emoji !@#$%^&*()-=_+\]'/[;.,]|}\"?{:><} ", EmojiRemover::filter($text));
    }
}
