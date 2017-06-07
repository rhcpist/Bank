<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_502001c9b9fae3320c9765dfc8de1feae0dd1e8dac51b86efdbb6d23aeaf017c extends Twig_Template
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
        $__internal_3198f98e62ce8c39ac72f664fc9d829ea8d97e008898a84bf3195f6dbb72aafd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3198f98e62ce8c39ac72f664fc9d829ea8d97e008898a84bf3195f6dbb72aafd->enter($__internal_3198f98e62ce8c39ac72f664fc9d829ea8d97e008898a84bf3195f6dbb72aafd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_70cd17271cca746cfd02070bfe032141e0306c4192770086dc0dabeb2eea9fdd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70cd17271cca746cfd02070bfe032141e0306c4192770086dc0dabeb2eea9fdd->enter($__internal_70cd17271cca746cfd02070bfe032141e0306c4192770086dc0dabeb2eea9fdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, ($context["widget"] ?? $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_3198f98e62ce8c39ac72f664fc9d829ea8d97e008898a84bf3195f6dbb72aafd->leave($__internal_3198f98e62ce8c39ac72f664fc9d829ea8d97e008898a84bf3195f6dbb72aafd_prof);

        
        $__internal_70cd17271cca746cfd02070bfe032141e0306c4192770086dc0dabeb2eea9fdd->leave($__internal_70cd17271cca746cfd02070bfe032141e0306c4192770086dc0dabeb2eea9fdd_prof);

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
