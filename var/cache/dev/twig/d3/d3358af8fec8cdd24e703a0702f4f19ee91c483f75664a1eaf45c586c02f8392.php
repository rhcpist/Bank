<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_baf9636fa2070d1c1066968c7e7c42060988712dac978a86927756e110c3f700 extends Twig_Template
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
        $__internal_4b57556f424bc875bf36f0f9e30bac26de1baf6ed0ea05ffbe2a7ef4b72f4371 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b57556f424bc875bf36f0f9e30bac26de1baf6ed0ea05ffbe2a7ef4b72f4371->enter($__internal_4b57556f424bc875bf36f0f9e30bac26de1baf6ed0ea05ffbe2a7ef4b72f4371_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_ab15e4a9f5528ec568d00de21ed615573b662ab122ffe1ae91114f33c1d1c867 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab15e4a9f5528ec568d00de21ed615573b662ab122ffe1ae91114f33c1d1c867->enter($__internal_ab15e4a9f5528ec568d00de21ed615573b662ab122ffe1ae91114f33c1d1c867_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_4b57556f424bc875bf36f0f9e30bac26de1baf6ed0ea05ffbe2a7ef4b72f4371->leave($__internal_4b57556f424bc875bf36f0f9e30bac26de1baf6ed0ea05ffbe2a7ef4b72f4371_prof);

        
        $__internal_ab15e4a9f5528ec568d00de21ed615573b662ab122ffe1ae91114f33c1d1c867->leave($__internal_ab15e4a9f5528ec568d00de21ed615573b662ab122ffe1ae91114f33c1d1c867_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
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
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_container_attributes.html.php");
    }
}
