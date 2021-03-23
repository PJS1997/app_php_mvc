<?php
namespace Mvc\Exceptions;
use Exception;

class ExceptionHandler extends Exception
{
    public function report()
    {
        echo 'Caught exception:' .$this->getMessage .'<br>'.$this->getLine().'<br>'.$this->getTraceAsString();
        //$this-getFile() . '<br>'
    }
}