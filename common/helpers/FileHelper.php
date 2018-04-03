<?php

namespace common\helpers;


class FileHelper
{
    public function requireOnceIfExists($filePath)
    {
        if (file_exists($filePath)) {
            return require_once $filePath;
        }
    }

    public function requireIfExists($filePath)
    {
        if (file_exists($filePath)) {
            return require $filePath;
        }
    }

    public function includeOnceIfExists($filePath)
    {
        if (file_exists($filePath)) {
            return include_once $filePath;
        }
    }

    public function includeIfExists($filePath)
    {
        if (file_exists($filePath)) {
            return include $filePath;
        }
    }
}
