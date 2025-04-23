<?php
namespace MVC\Views;
// require 'vendor/autoload.php';
// use Parsedown;

class MdView extends ViewFactory
{
    const LAYOUT = <<<MARKDOWN
# {{{title}}}

{{{body}}}
MARKDOWN;

    protected $replacements;


    public function __construct(object $decorator)
    {


        // Подготовка замещающих значений
        $this->replacements = [
            '{{{title}}}' => $decorator->title(),
            '{{{body}}}' =>  $decorator->body() //$this->markdownParser->text($decorator->body())
        ];
    }

    public function render() : string
    {
        return str_replace(
            array_keys($this->replacements),
            array_values($this->replacements),
            self::LAYOUT);
    }

}