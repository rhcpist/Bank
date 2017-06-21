<?php

/* @Framework/Form/form_start.html.php */
class __TwigTemplate_a64ffd3deb7bf36fa792b65d85afc9e1e1af2064ad184b26a20789fcad8205c7 extends Twig_Template
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
        $__internal_c9f8923841d906051c3f9081772d3eff6ad17d8f7f32bb74f8534289c410b5c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9f8923841d906051c3f9081772d3eff6ad17d8f7f32bb74f8534289c410b5c1->enter($__internal_c9f8923841d906051c3f9081772d3eff6ad17d8f7f32bb74f8534289c410b5c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        $__internal_60d08136c73afa58860b52b096eb3390df008f743917ac1e8e69ab16290b4d0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60d08136c73afa58860b52b096eb3390df008f743917ac1e8e69ab16290b4d0f->enter($__internal_60d08136c73afa58860b52b096eb3390df008f743917ac1e8e69ab16290b4d0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        // line 1
        echo "<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
";
        
        $__internal_c9f8923841d906051c3f9081772d3eff6ad17d8f7f32bb74f8534289c410b5c1->leave($__internal_c9f8923841d906051c3f9081772d3eff6ad17d8f7f32bb74f8534289c410b5c1_prof);

        
        $__internal_60d08136c73afa58860b52b096eb3390df008f743917ac1e8e69ab16290b4d0f->leave($__internal_60d08136c73afa58860b52b096eb3390df008f743917ac1e8e69ab16290b4d0f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_start.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
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
