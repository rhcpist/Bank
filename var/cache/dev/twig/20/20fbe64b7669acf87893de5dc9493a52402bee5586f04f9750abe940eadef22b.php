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
        $__internal_054f551cd96b9f424885fa2efcd373026277fd1b6b606d8a7f674e3fb05df7e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_054f551cd96b9f424885fa2efcd373026277fd1b6b606d8a7f674e3fb05df7e0->enter($__internal_054f551cd96b9f424885fa2efcd373026277fd1b6b606d8a7f674e3fb05df7e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_6a76dd40d072173a27df7b695d67e88b9193dbed624156946f6bbb6c8d051d9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a76dd40d072173a27df7b695d67e88b9193dbed624156946f6bbb6c8d051d9b->enter($__internal_6a76dd40d072173a27df7b695d67e88b9193dbed624156946f6bbb6c8d051d9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, ($context["widget"] ?? $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_054f551cd96b9f424885fa2efcd373026277fd1b6b606d8a7f674e3fb05df7e0->leave($__internal_054f551cd96b9f424885fa2efcd373026277fd1b6b606d8a7f674e3fb05df7e0_prof);

        
        $__internal_6a76dd40d072173a27df7b695d67e88b9193dbed624156946f6bbb6c8d051d9b->leave($__internal_6a76dd40d072173a27df7b695d67e88b9193dbed624156946f6bbb6c8d051d9b_prof);

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
