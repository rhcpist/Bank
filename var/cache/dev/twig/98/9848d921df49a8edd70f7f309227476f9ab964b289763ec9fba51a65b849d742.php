<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_f3698afe01afe5cb5252ec6ee9e4fa058bd1b2301dcb95d6e90df3fd4a9f00ab extends Twig_Template
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
        $__internal_0a4cd5bff30747f9d5da472e3a34a8d0f9fa7795ea5d9bc2bb30f3a816bf0246 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a4cd5bff30747f9d5da472e3a34a8d0f9fa7795ea5d9bc2bb30f3a816bf0246->enter($__internal_0a4cd5bff30747f9d5da472e3a34a8d0f9fa7795ea5d9bc2bb30f3a816bf0246_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_16430a62a033ce1cc5fcb4fd4df9e2be2cc46f8e5b5ecaaf6d94c276b52dd913 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16430a62a033ce1cc5fcb4fd4df9e2be2cc46f8e5b5ecaaf6d94c276b52dd913->enter($__internal_16430a62a033ce1cc5fcb4fd4df9e2be2cc46f8e5b5ecaaf6d94c276b52dd913_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_0a4cd5bff30747f9d5da472e3a34a8d0f9fa7795ea5d9bc2bb30f3a816bf0246->leave($__internal_0a4cd5bff30747f9d5da472e3a34a8d0f9fa7795ea5d9bc2bb30f3a816bf0246_prof);

        
        $__internal_16430a62a033ce1cc5fcb4fd4df9e2be2cc46f8e5b5ecaaf6d94c276b52dd913->leave($__internal_16430a62a033ce1cc5fcb4fd4df9e2be2cc46f8e5b5ecaaf6d94c276b52dd913_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
