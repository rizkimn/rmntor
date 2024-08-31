<?php

namespace App\Traits;

trait TableColumnProps {
    public array $column_props;

    public function __construct() {
        $this->column_props = [
                "type"=> "text",
                "class"=> "text",
                "badge_style"=> "main",
            ];
    }

    public function setColumnProps(
        string $type = 'text',
        string|array $badge_style = '',
        string $class = 'text',
    )
    {
        $this->column_props['type'] = $type;
        $this->column_props['class'] = $class;
        $this->column_props['badge_style'] = $badge_style;
        return $this->column_props;
    }
}
