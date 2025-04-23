<?php
namespace MVC\Views;

use MVC\Decorators\DecoratorInterface;
use MVC\Views\ViewInterface;

class MarkdownView implements ViewInterface
{
    private DecoratorInterface $decorator;

    public function __construct(DecoratorInterface $decorator)
    {
        $this->decorator = $decorator;
    }

    public function render(): string
    {
        $data = $this->decorator->decorate();
        $markdown = '';

        // Заголовок модели
        if (!empty($data['title'])) {
            $markdown .= "# {$data['title']}\n\n";
            unset($data['title']);
        }
        // Остальные поля
        foreach ($data as $key => $value) {
            $markdown .= "## " . ucfirst($key) . "\n\n";
            if (is_array($value)) {
                foreach ($value as $item) {
                    $markdown .= "- {$item}\n";
                }
                $markdown .= "\n";
            } else {
                $markdown .= "{$value}\n\n";
            }
        }
        return $markdown;
    }
}