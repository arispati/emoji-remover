# EmojiRemover
PHP library that remove an emoji from text

## How to Install
- Install with composer
```bash
composer require arispati/emoji-remover
```

## How to Use
```php
use Arispati\EmojiRemover\EmojiRemover;

// text with emoji
$text = "Emoji 🌆";

// filter the emoji
$textFiltered = EmojiRemover::filter($text);
// result: "Emoji "

// replace emoji to another string
$textReplaced = EmojiRemover::filter($text, 'removed');
// result: "Emoji removed"
```

## Testing
```bash
composer test
```