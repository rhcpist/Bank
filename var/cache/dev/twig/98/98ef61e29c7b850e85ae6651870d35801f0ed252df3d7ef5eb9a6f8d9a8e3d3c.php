<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_a23821951e0d6592e0195dedcdf862b16f243b9ce75abda192179d77541b3141 extends Twig_Template
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
        $__internal_2049928166ac7bcac10751dffbc923ef554877999c832e936b152431757f0929 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2049928166ac7bcac10751dffbc923ef554877999c832e936b152431757f0929->enter($__internal_2049928166ac7bcac10751dffbc923ef554877999c832e936b152431757f0929_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_d3bc234882b106a7a4ae367a9265a675c2e87557efdd6b20aed2454036aee6ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3bc234882b106a7a4ae367a9265a675c2e87557efdd6b20aed2454036aee6ce->enter($__internal_d3bc234882b106a7a4ae367a9265a675c2e87557efdd6b20aed2454036aee6ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_2049928166ac7bcac10751dffbc923ef554877999c832e936b152431757f0929->leave($__internal_2049928166ac7bcac10751dffbc923ef554877999c832e936b152431757f0929_prof);

        
        $__internal_d3bc234882b106a7a4ae367a9265a675c2e87557efdd6b20aed2454036aee6ce->leave($__internal_d3bc234882b106a7a4ae367a9265a675c2e87557efdd6b20aed2454036aee6ce_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
