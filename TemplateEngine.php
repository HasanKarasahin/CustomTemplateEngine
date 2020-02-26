<?php

class TemplateEngine
{

    private $vars = array();

    public function assign($key, $value)
    {
        $this->vars[$key] = $value;
    }

    public function render($template_name)
    {
        $path = './template/' . $template_name . '.html';

        if (file_exists($path)) {
            $content = file_get_contents($path);

            foreach ($this->vars as $key => $value) {

                $pattern = '/{{' . $key . '}}/';

                $content = preg_replace($pattern, $value, $content);
            }

            print_r($content);
        } else {
            exit('Hata');
        }
    }
}