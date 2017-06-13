<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_4e8772abf98899369b3b01d560e073818bd15bae5ae8b76f14e29822bad648a4 extends Twig_Template
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
        $__internal_9522c9d27b1f8dcc213a3fc7d661a4069115b12a905ad1c1b93f95e9a21be67c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9522c9d27b1f8dcc213a3fc7d661a4069115b12a905ad1c1b93f95e9a21be67c->enter($__internal_9522c9d27b1f8dcc213a3fc7d661a4069115b12a905ad1c1b93f95e9a21be67c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_b778ac345a5a20a8e766090bf73c1a71b50e6f5f1a973e032d7b5203b3129333 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b778ac345a5a20a8e766090bf73c1a71b50e6f5f1a973e032d7b5203b3129333->enter($__internal_b778ac345a5a20a8e766090bf73c1a71b50e6f5f1a973e032d7b5203b3129333_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, ($context["widget"] ?? $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_9522c9d27b1f8dcc213a3fc7d661a4069115b12a905ad1c1b93f95e9a21be67c->leave($__internal_9522c9d27b1f8dcc213a3fc7d661a4069115b12a905ad1c1b93f95e9a21be67c_prof);

        
        $__internal_b778ac345a5a20a8e766090bf73c1a71b50e6f5f1a973e032d7b5203b3129333->leave($__internal_b778ac345a5a20a8e766090bf73c1a71b50e6f5f1a973e032d7b5203b3129333_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/money_widget.html.php");
    }
}
