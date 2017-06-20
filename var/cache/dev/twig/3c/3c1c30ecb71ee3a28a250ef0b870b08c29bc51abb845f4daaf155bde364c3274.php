<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_44cc86f352a69cd32bf4878fd379279a6e2630b3ef2a85d4e0cd0b0b3cdb3237 extends Twig_Template
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
        $__internal_50bf62d1333354e183ee225b87f83eb9b5d8aaebd92d672a2653d49b4e9f8a8f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50bf62d1333354e183ee225b87f83eb9b5d8aaebd92d672a2653d49b4e9f8a8f->enter($__internal_50bf62d1333354e183ee225b87f83eb9b5d8aaebd92d672a2653d49b4e9f8a8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_c92e8e8b894748fa9e3a0ec6da9074acf0984e47a7fe822dbdc822ff0a2fa527 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c92e8e8b894748fa9e3a0ec6da9074acf0984e47a7fe822dbdc822ff0a2fa527->enter($__internal_c92e8e8b894748fa9e3a0ec6da9074acf0984e47a7fe822dbdc822ff0a2fa527_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_50bf62d1333354e183ee225b87f83eb9b5d8aaebd92d672a2653d49b4e9f8a8f->leave($__internal_50bf62d1333354e183ee225b87f83eb9b5d8aaebd92d672a2653d49b4e9f8a8f_prof);

        
        $__internal_c92e8e8b894748fa9e3a0ec6da9074acf0984e47a7fe822dbdc822ff0a2fa527->leave($__internal_c92e8e8b894748fa9e3a0ec6da9074acf0984e47a7fe822dbdc822ff0a2fa527_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
