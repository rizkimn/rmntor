<?php

namespace App\View\Components\Rmntor;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Collection;
use Illuminate\View\Component;

class Table extends Component
{
    protected array $comparators = [
            '!=',
            '<=',
            '>=',
            '>',
            '<',
            '=',
        ];

    protected string $placeholder = ':value';
    /**
     * Create a new component instance.
     */
    public function __construct(
        public array|Collection $tableData,
        public array|Collection $columns,
    ) {
        $this->tableData = collect($this->tableData);
        $this->columns = collect($this->columns);
    }

    public function checkStyleComparator(string $condition) : bool|string
    {
        $comparators = $this->comparators;

        foreach ($comparators as $comparator) {
            if (strpos($condition, $comparator)) {
                return $comparator;
            }
        }

        return false;
    }

    public function parseCondition(string $condition, string $value): array
    {
        $comparator = $this->checkStyleComparator($condition);
        $result = explode($comparator, str_replace($this->placeholder, $value, $condition));
        $result[] = $comparator;
        return $result;
    }

    public function isStyleMatch (string $value, string $condition) : bool
    {
        [$left, $right, $comparator] = $this->parseCondition($condition, $value);
        if($comparator) {
            return match ($comparator) {
                "=" => $left == $right,
                ">" => $left > $right,
                "<" => $left < $right,
                ">=" => $left >= $right,
                "<=" => $left <= $right,
                "!=" => $left != $right,
                default => false,
            };
        }

        return false;
    }

    protected function parseBadgeStyle(array $styles, string $value) : string
    {
        foreach ($styles as $style => $condition) {
            if ($this->isStyleMatch($value, $condition)) {
                return $style;
            }
        }

         return "main";
    }

    public function validateBadgeStyle(string|array $style, string $value) : string
    {
        return is_string($style) ? $style : $this->parseBadgeStyle($style, $value);
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.rmntor.table');
    }
}
