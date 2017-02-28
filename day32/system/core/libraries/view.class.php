<?php

class view
{
    //name (part of the path) of the .php file that actually contains the HTML code
    //contact/form... /system/projects/views/contact/form.php
    protected $template_name = null;

    public $template_variables = array();


    /**
    *
    */
    public function __construct($template_name)
    {
        $this->template_name = $template_name;
    }


    /**
    *print the contents of the template
    */
    public function render($print = true)
    {
        if($print)
        {
            //echo the contents of the file
            include VIEWS_DIR . '/' . $this->template_name . '.php';
        }
        else
        {
            //returns the contents of the file
            return $this->getRenderedContent();
        }
    }

    protected function getRenderedContent()
    {   
        //start output buffering (start recording any output)
        ob_start();

        extract($this->template_variables);

        //include the actual file (without output buffering this would be immediately possibly)
        //but WITH the output buffering it is just stored in the buffer (in the recording)
        include VIEWS_DIR . '/' . $this->template_name . '.php';

        //get the contents of the output buffer (the recording) and clean the buffer
        return ob_get_clean();

    }

    public function __toString()
    {
        return $this->render(false);
    }

    public function __set($name, $value)
    {   
        
        $this->template_variables[$name] = $value;
    }

    public function __get($name)
    {
        if(array_key_exists($name, $this->template_variables))
        {
        return $this->template_variables[$name];
        }
        $trace = debug_backtrace();
        trigger_error(
            'Undefined property via __get(): ' . $name .
            ' in ' . $trace[0]['file'] .
            ' on line ' . $trace[0]['line'],
            E_USER_NOTICE);
    }

    public function __isset($name)
    {
        return isset($this->template_variables[$name]);
    }

    public function __unset($name)
    {
        unset($this->template_variables[$name]);
    }
}
