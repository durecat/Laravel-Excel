<?php

namespace Maatwebsite\Excel\Concerns;

interface WithRowFormatting
{
    /**
     * @return array
     */
    public function rowFormats(): array;
}
