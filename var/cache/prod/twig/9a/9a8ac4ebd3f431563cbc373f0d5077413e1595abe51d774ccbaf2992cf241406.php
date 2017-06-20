<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_d2dd4a0406b0b0b4a4cfabd77c730720e97031998fa8b4d4748e4f2d15984997 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('title', $context, $blocks);
        // line 2
        echo "
";
        // line 3
        $this->displayBlock('content', $context, $blocks);
    }

    // line 1
    public function block_title($context, array $blocks = array())
    {
        echo "Demo Application";
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    eherh
    ";
        // line 5
        $this->displayBlock('fos_user_content', $context, $blocks);
    }

    public function block_fos_user_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "@FOSUser/layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 5,  40 => 4,  37 => 3,  31 => 1,  27 => 3,  24 => 2,  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@FOSUser/layout.html.twig", "/mnt/storage/private/public_html/bank/app/Resources/FOSUserBundle/views/layout.html.twig");
    }
}
