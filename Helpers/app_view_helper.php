<?php
/**
 * @author denis303 <dev@denis303.com>
 * @license MIT
 * @link http://denis303.com
 */
if (!function_exists('app_view'))
{
    function app_view(string $name, array $data = [], array $options = [])
    {
        $filename = APPPATH . 'Views/' . str_replace('\\', '/', $name) . '.php';

        if (is_file($filename))
        {
            $name = 'App\\' . $name;
        }

        return view($name, $data, $options);
    }
}