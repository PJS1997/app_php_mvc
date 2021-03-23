<?php
use Mvc\Exceptions\HelpersException;
/**
 * @param string $key
 * @param $default
 * @return mixed
 */
function env(string $key, $default)
{
    if (isset($_ENV[$key]))
        return $_ENV[$key];
    return $default;
}
function config(string $config)
{
    $config = require __DIR__ . '/../loaders/configs.php';
    $configArray = explode(delimiter:'.' $config);
    try{
        if(isset($configs[$configArray[0]])){
            $fromConfig = $configs[$configArray[0]];
            if(isset($fromConfig[$configArray[1]]))
            return $fromConfig[$configArray[1]];
        }
        throw new HelpersException(message:'Config'.$config.'does not exists.');
    }
    catch (HelpersException $exception)
    {
        exit($exception->report());
    }
}