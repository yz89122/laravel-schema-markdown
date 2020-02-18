<?php

namespace SchemaMarkdown\Utils;

trait LazyLoading
{
    protected $loaded = [];

    protected $data = [];

    protected function lazyLoad($key, $callback)
    {
        if (isset($this->loaded[$key])) {
            return $this->data[$key];
        }
        return $this->forceLoad($key, $callback);
    }

    protected function forceLoad($key, $callback)
    {
        $data = $this->data[$key] = $callback();
        $this->loaded[$key] = true;
        return $data;
    }

    protected function resetLoadingKey($key)
    {
        unset($this->loaded[$key]);
    }
}
