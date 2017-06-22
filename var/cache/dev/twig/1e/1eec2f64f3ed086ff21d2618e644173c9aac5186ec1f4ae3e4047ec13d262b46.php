<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_9f242426f187afda0c4014040f049c00d21c8ecc29e3abf3c9b7d59c71c16e3b extends Twig_Template
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
        $__internal_6898ca09e5a689cbbfa2c350435da1a24d74978d871d17e7e389c3203599f0c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6898ca09e5a689cbbfa2c350435da1a24d74978d871d17e7e389c3203599f0c5->enter($__internal_6898ca09e5a689cbbfa2c350435da1a24d74978d871d17e7e389c3203599f0c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_e3007fd045eedc5ee8d7d2ffd84b754fea74298d21f7d1c999011321351331f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3007fd045eedc5ee8d7d2ffd84b754fea74298d21f7d1c999011321351331f9->enter($__internal_e3007fd045eedc5ee8d7d2ffd84b754fea74298d21f7d1c999011321351331f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 1, $this->getSourceContext()); })()), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_6898ca09e5a689cbbfa2c350435da1a24d74978d871d17e7e389c3203599f0c5->leave($__internal_6898ca09e5a689cbbfa2c350435da1a24d74978d871d17e7e389c3203599f0c5_prof);

        
        $__internal_e3007fd045eedc5ee8d7d2ffd84b754fea74298d21f7d1c999011321351331f9->leave($__internal_e3007fd045eedc5ee8d7d2ffd84b754fea74298d21f7d1c999011321351331f9_prof);

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

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/money_widget.html.php");
    }
}
