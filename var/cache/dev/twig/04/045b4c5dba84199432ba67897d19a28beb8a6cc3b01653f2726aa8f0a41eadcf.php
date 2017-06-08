<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_acae1faf5f7c68742dce67ee2778d625e3dbacfd93cebbdd4c1295a353b9367e extends Twig_Template
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
        $__internal_6b983f7bee1f17838e107e7543b5210c014aba59a311ece969d2d545854c1ba6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b983f7bee1f17838e107e7543b5210c014aba59a311ece969d2d545854c1ba6->enter($__internal_6b983f7bee1f17838e107e7543b5210c014aba59a311ece969d2d545854c1ba6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_d7f33e8be4e561bd407120814c0bb1d1c42dab1c38cd220b768346ae2f2c10f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7f33e8be4e561bd407120814c0bb1d1c42dab1c38cd220b768346ae2f2c10f7->enter($__internal_d7f33e8be4e561bd407120814c0bb1d1c42dab1c38cd220b768346ae2f2c10f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_6b983f7bee1f17838e107e7543b5210c014aba59a311ece969d2d545854c1ba6->leave($__internal_6b983f7bee1f17838e107e7543b5210c014aba59a311ece969d2d545854c1ba6_prof);

        
        $__internal_d7f33e8be4e561bd407120814c0bb1d1c42dab1c38cd220b768346ae2f2c10f7->leave($__internal_d7f33e8be4e561bd407120814c0bb1d1c42dab1c38cd220b768346ae2f2c10f7_prof);

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
