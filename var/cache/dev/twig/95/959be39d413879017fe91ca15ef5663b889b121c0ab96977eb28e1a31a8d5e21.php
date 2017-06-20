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
        $__internal_40e21d8d2e6324860b10eb3842ea9a1b1da53b462fa03fa849ca11055c31db77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40e21d8d2e6324860b10eb3842ea9a1b1da53b462fa03fa849ca11055c31db77->enter($__internal_40e21d8d2e6324860b10eb3842ea9a1b1da53b462fa03fa849ca11055c31db77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        $__internal_a9b3c08a0644a3fcc800bf7dba2a34d0170ab9793722295cb7b1ed4807dd2515 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9b3c08a0644a3fcc800bf7dba2a34d0170ab9793722295cb7b1ed4807dd2515->enter($__internal_a9b3c08a0644a3fcc800bf7dba2a34d0170ab9793722295cb7b1ed4807dd2515_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        // line 1
        echo "<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
";
        
        $__internal_40e21d8d2e6324860b10eb3842ea9a1b1da53b462fa03fa849ca11055c31db77->leave($__internal_40e21d8d2e6324860b10eb3842ea9a1b1da53b462fa03fa849ca11055c31db77_prof);

        
        $__internal_a9b3c08a0644a3fcc800bf7dba2a34d0170ab9793722295cb7b1ed4807dd2515->leave($__internal_a9b3c08a0644a3fcc800bf7dba2a34d0170ab9793722295cb7b1ed4807dd2515_prof);

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
