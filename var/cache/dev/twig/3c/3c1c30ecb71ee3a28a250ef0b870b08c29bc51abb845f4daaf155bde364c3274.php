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
        $__internal_7ebbf3f8eec92880340e32a18cfb6ec56017c1bc4b2b7002c2cc0b6689b1f651 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ebbf3f8eec92880340e32a18cfb6ec56017c1bc4b2b7002c2cc0b6689b1f651->enter($__internal_7ebbf3f8eec92880340e32a18cfb6ec56017c1bc4b2b7002c2cc0b6689b1f651_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_a7f1372c3e9c41346a90612c33101a4e14af96e37db19923e6f528f5aa542b26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7f1372c3e9c41346a90612c33101a4e14af96e37db19923e6f528f5aa542b26->enter($__internal_a7f1372c3e9c41346a90612c33101a4e14af96e37db19923e6f528f5aa542b26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_7ebbf3f8eec92880340e32a18cfb6ec56017c1bc4b2b7002c2cc0b6689b1f651->leave($__internal_7ebbf3f8eec92880340e32a18cfb6ec56017c1bc4b2b7002c2cc0b6689b1f651_prof);

        
        $__internal_a7f1372c3e9c41346a90612c33101a4e14af96e37db19923e6f528f5aa542b26->leave($__internal_a7f1372c3e9c41346a90612c33101a4e14af96e37db19923e6f528f5aa542b26_prof);

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
