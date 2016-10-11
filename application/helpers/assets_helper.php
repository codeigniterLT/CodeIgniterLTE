<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| AUTO JS files to pages
|--------------------------------------------------------------------------
*/
if(!function_exists('add_js'))
{
    function add_js($file='')
    {
        $str = '';
        $ci = &get_instance();
        $auto_js  = $ci->config->item('auto_js');
        if(empty($file))
        {
            return;
        }
        if(is_array($file)) {
            if(!is_array($file) && count($file) <= 0)
            {
                return;
            }
            foreach($file as $item)
            {
                $auto_js[] = $item;
            }
            $ci->config->set_item('auto_js',$auto_js);
        } else {
            $str = $file;
            $auto_js[] = $str;
            $ci->config->set_item('auto_js',$auto_js);
        }
    }
}
/*
|--------------------------------------------------------------------------
| AUTO CSS files to pages
|--------------------------------------------------------------------------
*/
if (!function_exists('add_css'))
{
    function add_css($file='')
    {
        $str = '';
        $ci = &get_instance();
        $header_css = $ci->config->item('auto_css');
 
        if(empty($file))
        {
            return;
        }
        if (is_array($file))
        {
            if (!is_array($file) && count($file) <= 0) {
                return;
            }
            foreach($file as $item) {   
                $header_css[] = $item;
            }
            $ci->config->set_item('auto_css', $header_css);
        } else {
            $str = $file;
            $header_css[] = $str;
            $ci->config->set_item('auto_css', $header_css);
        }
    }
}
/*
|--------------------------------------------------------------------------
| PUT CSS in headers of pages
|--------------------------------------------------------------------------
*/
if(!function_exists('put_headers'))
{
    function put_headers()
    {
        $str = '';
        $ci = &get_instance();
        $auto_css = $ci->config->item('auto_css');
        foreach($auto_css as $item)
        {
            $str .= '<link rel="stylesheet" href="'.$item.'" type="text/css" />'."\n";
        }
        return $str;
    }
}
/*
|--------------------------------------------------------------------------
| PUT JS in footers of pages
|--------------------------------------------------------------------------
*/
if(!function_exists('put_footers'))
{
    function put_footers()
    {
        $str = '';
        $ci = &get_instance();
        $auto_js  = $ci->config->item('auto_js');
        foreach($auto_js as $item)
        {
            $str .= '<script type="text/javascript" src="'.$item.'"></script>'."\n";
        }
        return $str;
    }
}
