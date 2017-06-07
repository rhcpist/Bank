<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_ed872d225cda9e0c41d00fa8c560bf137027c85b16fb42976e868c76042b32f3 extends Twig_Template
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
        $__internal_c302b740b7e3ccc28671f05fbfd3900e36fbd42f5289a7b057d4df986812100b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c302b740b7e3ccc28671f05fbfd3900e36fbd42f5289a7b057d4df986812100b->enter($__internal_c302b740b7e3ccc28671f05fbfd3900e36fbd42f5289a7b057d4df986812100b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_33b51d5aad4333eb5a0752fa4c1d6c9d86261568f7749ecb94f8e6595900501e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33b51d5aad4333eb5a0752fa4c1d6c9d86261568f7749ecb94f8e6595900501e->enter($__internal_33b51d5aad4333eb5a0752fa4c1d6c9d86261568f7749ecb94f8e6595900501e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_c302b740b7e3ccc28671f05fbfd3900e36fbd42f5289a7b057d4df986812100b->leave($__internal_c302b740b7e3ccc28671f05fbfd3900e36fbd42f5289a7b057d4df986812100b_prof);

        
        $__internal_33b51d5aad4333eb5a0752fa4c1d6c9d86261568f7749ecb94f8e6595900501e->leave($__internal_33b51d5aad4333eb5a0752fa4c1d6c9d86261568f7749ecb94f8e6595900501e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
