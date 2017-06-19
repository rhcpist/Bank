<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_d13ca8cd92fb1c8a534367901c0d0fdce971968df25c926b3f986ef91a01d93e extends Twig_Template
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
        $__internal_cb5d5a025050da51e6fe11c767be619a037d65529f93d42e76d20d74827e573a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb5d5a025050da51e6fe11c767be619a037d65529f93d42e76d20d74827e573a->enter($__internal_cb5d5a025050da51e6fe11c767be619a037d65529f93d42e76d20d74827e573a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_1bb4d7bea49c183931d650abc0a516dca449cc43761ed23f73ab15215d4a503b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bb4d7bea49c183931d650abc0a516dca449cc43761ed23f73ab15215d4a503b->enter($__internal_1bb4d7bea49c183931d650abc0a516dca449cc43761ed23f73ab15215d4a503b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_cb5d5a025050da51e6fe11c767be619a037d65529f93d42e76d20d74827e573a->leave($__internal_cb5d5a025050da51e6fe11c767be619a037d65529f93d42e76d20d74827e573a_prof);

        
        $__internal_1bb4d7bea49c183931d650abc0a516dca449cc43761ed23f73ab15215d4a503b->leave($__internal_1bb4d7bea49c183931d650abc0a516dca449cc43761ed23f73ab15215d4a503b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
