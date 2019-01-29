<?php

namespace Latrell\Scws;

class Scws
{

    protected $scws;

    public function __construct($config)
    {
        $this->scws = \scws_new();
        foreach ($config as $key => $value) {
            if ($key == 'add_dict') {
                $this->scws->{'add_dict'}($value); //Add dict to SCWS Engine
            } else {
                $this->scws->{'set_' . $key}($value);
            }
        }
    }

    public function __call($name, $arguments)
    {
        return call_user_func_array([
            $this->scws,
            snake_case($name)
        ], $arguments);
    }
}
