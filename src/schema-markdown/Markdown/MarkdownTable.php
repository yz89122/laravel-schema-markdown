<?php

namespace SchemaMarkdown\Markdown;

use \SchemaMarkdown\Utils\LazyLoading;

class MarkdownTable
{
    use LazyLoading;

    protected $columns = [];

    protected $rows = [];

    public function __construct(array $columns)
    {
        $this->columns = $columns;
    }

    public function pushRow(array $row)
    {
        $this->resetLoadingKey('max_column_widths');
        $this->resetLoadingKey('markdown');
        array_push($this->rows, $row);
    }

    protected function getMaxColumnWidths()
    {
        return $this->lazyLoad('max_column_widths', function () {
            $max_column_widths = array_map('strlen', $this->columns);
            foreach ($this->rows as $row) {
                $column_widths = array_map('strlen', $row);
                $max_column_widths = array_map('max', $max_column_widths, $column_widths);
            }
            return $max_column_widths;
        });
    }

    protected function columnAppendSpaces(string $column, int $width) : string
    {
        return $column.str_repeat(' ', $width - strlen($column));
    }

    protected function toMarkdownRow($row) : string
    {
        return '| '.implode(' | ', array_map(
            array($this, 'columnAppendSpaces'),
            $row,
            $this->getMaxColumnWidths()
        ))." |\n";
    }

    protected function getMarkdownTableTitle() : string
    {
        return $this->toMarkdownRow($this->columns)
            . $this->toMarkdownRow(array_map(function ($entry) {
                return str_repeat('-', $entry);
            }, $this->getMaxColumnWidths()));
    }

    protected function getMarkdownTableBody() : string
    {
        return implode('', array_map(array($this, 'toMarkdownRow'), $this->rows));
    }

    public function getMarkdown()
    {
        return $this->lazyLoad('markdown', function () {
            return $this->getMarkdownTableTitle()
                . $this->getMarkdownTableBody();
        });
    }

    public function __toString()
    {
        return $this->getMarkdown();
    }
}
