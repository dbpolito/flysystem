<?php

namespace League\Flysystem\Adapter\Polyfill;

use LogicException;

trait NotSupportingVisibilityTrait
{
    /**
     * Get the visibility of a file.
     *
     * @param string $path
     *
     * @throws LogicException
     */
    public function getVisibility(string $path): array
    {
        throw new LogicException(get_class($this) . ' does not support visibility. Path: ' . $path);
    }

    /**
     * Set the visibility for a file.
     *
     * @param string $path
     * @param string $visibility
     *
     * @throws LogicException
     */
    public function setVisibility(string $path, string $visibility): array
    {
        throw new LogicException(get_class($this) . ' does not support visibility. Path: ' . $path . ', visibility: ' . $visibility);
    }
}
