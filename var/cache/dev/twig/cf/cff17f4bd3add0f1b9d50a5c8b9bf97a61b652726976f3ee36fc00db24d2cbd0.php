<?php

/* @Framework/Form/form_start.html.php */
class __TwigTemplate_2668dc62d6f8f9d52c2e2d4bdcd3a0931591883896ba442a7a85ed2de27a0510 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_da1e0f007f1712a35ab70cda627b6fe7a5bc56c9c6b55e2a84852f589ef1cb8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da1e0f007f1712a35ab70cda627b6fe7a5bc56c9c6b55e2a84852f589ef1cb8e->enter($__internal_da1e0f007f1712a35ab70cda627b6fe7a5bc56c9c6b55e2a84852f589ef1cb8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        $__internal_95bb34255c14ccfc0336456390c6b8f71c8c23bb9bdd0da0df6b9d8794274c3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95bb34255c14ccfc0336456390c6b8f71c8c23bb9bdd0da0df6b9d8794274c3a->enter($__internal_95bb34255c14ccfc0336456390c6b8f71c8c23bb9bdd0da0df6b9d8794274c3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        // line 1
        echo "<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
";
        
        $__internal_da1e0f007f1712a35ab70cda627b6fe7a5bc56c9c6b55e2a84852f589ef1cb8e->leave($__internal_da1e0f007f1712a35ab70cda627b6fe7a5bc56c9c6b55e2a84852f589ef1cb8e_prof);

        
        $__internal_95bb34255c14ccfc0336456390c6b8f71c8c23bb9bdd0da0df6b9d8794274c3a->leave($__internal_95bb34255c14ccfc0336456390c6b8f71c8c23bb9bdd0da0df6b9d8794274c3a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_start.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
", "@Framework/Form/form_start.html.php", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_start.html.php");
    }
}
