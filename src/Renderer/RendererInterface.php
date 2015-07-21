<?php

namespace Pivot\Renderer;

interface RendererInterface
{
    const tabulator = "\t";
    const comma = ',';
    const semicolon = ';';

    public function render(\Pivot\Pivot);
    public function setDelimiter($delimiter);
}
