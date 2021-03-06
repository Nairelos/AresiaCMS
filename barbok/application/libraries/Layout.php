<?php

/**
 * Layout management library based on:
 * http://codeigniter.com/wiki/layout_library/ *
 * Extended layout placeholders and javascript and css files inclussion.
 */
class Layout
{

    var $obj;
    var $layout;
    var $js;
    var $css;
    var $placeholder;

    public function __construct($layout = "layouts/front")
    {
        $this->obj = & get_instance();
        $this->layout = $layout;
        $this->js = $this->css = $this->placeholder = array();
    }

    public function setLayout($layout)
    {
        $this->layout = $layout;
    }
    
    public function view_layout($view, $layout, $data=null)
    {
        $data['content_for_layout'] = $this->obj->load->view('layouts/'.$layout, $data, true);
        $this->view($view, $data);
    }

    public function view($view, $data=null, $return=false)
    {
        $this->load_css(array(
        	DIRR.'assets/css/barbok.css',
        	DIRR.'assets/css/lightbox.css'
        ));
        $this->load_js(array(
        	DIRR.'assets/js/jquery/jquery.js',
        	DIRR.'assets/js/jquery/jquery-1.4.2.min.js',
        	DIRR.'assets/js/jquery/jquery.lightbox-0.5.js',
        	DIRR.'assets/js/jquery/javascript.js',
        	DIRR.'assets/js/jquery/div_barbok.js'
        ));
        $loadedData = array(
        	'includes_css'			=> $this->css(),
        	'includes_js'			=> $this->js(),
        	'erreur'				=> $data['erreur']
        );
        
        if (isset($data['content_for_layout']))
        {
        	$loadedData['content_for_layout'] = $data['content_for_layout'];
        }
        else
        {
        	$loadedData['content_for_layout'] =$this->obj->load->view($view, $data, true);
        }
        
        if ($return)
        {
            $output = $this->obj->load->view($this->layout, $loadedData, true);
            return $output;
        }
        else
        {
            $this->obj->load->view($this->layout, $loadedData, false);
        }
    }

    public function load_js($file=null)
    {
        if (is_array($file))
        {
            foreach ($file as $f)
                $this->js[] = $f;
        }else
            $this->js[] = $file;
    }

    public function js()
    {
        $stream = "";
        foreach ($this->js as $js)
            $stream .= '<script type="text/javascript" src="' . $js . '"></script>' . "\n	";

        return $stream;
    }

    public function load_css($file=null)
    {
        if (is_array($file))
        {
            foreach ($file as $f)
                $this->css[] = $f;
        }else
            $this->css[] = $file;
    }

    public function css()
    {
        $stream = "";
        foreach ($this->css as $css)
        {
            $stream .= '<link href="' . $css . '" rel="stylesheet" type="text/css" media="screen" />' . "\n	";
        }
        return $stream;
    }

    public function placeholder($key, $value=null)
    {
        if ($value == null)
            return $this->placeholder[$key];
        else
            $this->placeholder[$key] = $value;
    }
}