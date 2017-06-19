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
        $__internal_03ee4d0760d54e68c88d50bff59621fbcff0c26aecf603a4e02978753dab53ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03ee4d0760d54e68c88d50bff59621fbcff0c26aecf603a4e02978753dab53ec->enter($__internal_03ee4d0760d54e68c88d50bff59621fbcff0c26aecf603a4e02978753dab53ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_7aad0305ae336119d607b13248aefeb2ee2207ce9573858eed56fc2f5e72e598 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7aad0305ae336119d607b13248aefeb2ee2207ce9573858eed56fc2f5e72e598->enter($__internal_7aad0305ae336119d607b13248aefeb2ee2207ce9573858eed56fc2f5e72e598_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_03ee4d0760d54e68c88d50bff59621fbcff0c26aecf603a4e02978753dab53ec->leave($__internal_03ee4d0760d54e68c88d50bff59621fbcff0c26aecf603a4e02978753dab53ec_prof);

        
        $__internal_7aad0305ae336119d607b13248aefeb2ee2207ce9573858eed56fc2f5e72e598->leave($__internal_7aad0305ae336119d607b13248aefeb2ee2207ce9573858eed56fc2f5e72e598_prof);

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
