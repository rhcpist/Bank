<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_2641b97c7897523410952c7959356001bd3a17b1ad78d84ee64bceb8fb35a85c extends Twig_Template
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
        $__internal_a1e68325643b8db4f9e83bc8d879b542e0cae951660a39c02647fd233716e46e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1e68325643b8db4f9e83bc8d879b542e0cae951660a39c02647fd233716e46e->enter($__internal_a1e68325643b8db4f9e83bc8d879b542e0cae951660a39c02647fd233716e46e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_7e58f1e7104fed6bae7e2015dca94f93d7fe2abe33bcf21102bca70789b77ad7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e58f1e7104fed6bae7e2015dca94f93d7fe2abe33bcf21102bca70789b77ad7->enter($__internal_7e58f1e7104fed6bae7e2015dca94f93d7fe2abe33bcf21102bca70789b77ad7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_a1e68325643b8db4f9e83bc8d879b542e0cae951660a39c02647fd233716e46e->leave($__internal_a1e68325643b8db4f9e83bc8d879b542e0cae951660a39c02647fd233716e46e_prof);

        
        $__internal_7e58f1e7104fed6bae7e2015dca94f93d7fe2abe33bcf21102bca70789b77ad7->leave($__internal_7e58f1e7104fed6bae7e2015dca94f93d7fe2abe33bcf21102bca70789b77ad7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}