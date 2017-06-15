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
        $__internal_dd011d65c0325a2ff20564ed83de9148df10675066202676be07c9d518ee2768 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd011d65c0325a2ff20564ed83de9148df10675066202676be07c9d518ee2768->enter($__internal_dd011d65c0325a2ff20564ed83de9148df10675066202676be07c9d518ee2768_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_1238f8154d9722cf1e4f0436a684a360da2b43a58c97553e0458d3cd78d36c37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1238f8154d9722cf1e4f0436a684a360da2b43a58c97553e0458d3cd78d36c37->enter($__internal_1238f8154d9722cf1e4f0436a684a360da2b43a58c97553e0458d3cd78d36c37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_dd011d65c0325a2ff20564ed83de9148df10675066202676be07c9d518ee2768->leave($__internal_dd011d65c0325a2ff20564ed83de9148df10675066202676be07c9d518ee2768_prof);

        
        $__internal_1238f8154d9722cf1e4f0436a684a360da2b43a58c97553e0458d3cd78d36c37->leave($__internal_1238f8154d9722cf1e4f0436a684a360da2b43a58c97553e0458d3cd78d36c37_prof);

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
