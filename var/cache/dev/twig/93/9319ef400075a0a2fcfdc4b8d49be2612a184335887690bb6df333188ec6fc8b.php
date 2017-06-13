<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_44e72a1bee6eef3189ee12f070ae9db8ba3a8faef80617b9c93edad792957875 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bd0191fa7b66d62ed8e6f0aa019f8762f48ca4ba4e6b6833b1583fbccda20de6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd0191fa7b66d62ed8e6f0aa019f8762f48ca4ba4e6b6833b1583fbccda20de6->enter($__internal_bd0191fa7b66d62ed8e6f0aa019f8762f48ca4ba4e6b6833b1583fbccda20de6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_2c733757b273ad3242d3183d18e81d872be215994c5d186f0556e5df87b0ed37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c733757b273ad3242d3183d18e81d872be215994c5d186f0556e5df87b0ed37->enter($__internal_2c733757b273ad3242d3183d18e81d872be215994c5d186f0556e5df87b0ed37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_bd0191fa7b66d62ed8e6f0aa019f8762f48ca4ba4e6b6833b1583fbccda20de6->leave($__internal_bd0191fa7b66d62ed8e6f0aa019f8762f48ca4ba4e6b6833b1583fbccda20de6_prof);

        
        $__internal_2c733757b273ad3242d3183d18e81d872be215994c5d186f0556e5df87b0ed37->leave($__internal_2c733757b273ad3242d3183d18e81d872be215994c5d186f0556e5df87b0ed37_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_6ed4b779d0ccbbc2bfac2f7acc41e71241c41fb92ca90ad2457c84110eeb9300 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ed4b779d0ccbbc2bfac2f7acc41e71241c41fb92ca90ad2457c84110eeb9300->enter($__internal_6ed4b779d0ccbbc2bfac2f7acc41e71241c41fb92ca90ad2457c84110eeb9300_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4de7784d30722b586ecf690fd9029299b04a7d5470f78d535113997e8157272a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4de7784d30722b586ecf690fd9029299b04a7d5470f78d535113997e8157272a->enter($__internal_4de7784d30722b586ecf690fd9029299b04a7d5470f78d535113997e8157272a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_4de7784d30722b586ecf690fd9029299b04a7d5470f78d535113997e8157272a->leave($__internal_4de7784d30722b586ecf690fd9029299b04a7d5470f78d535113997e8157272a_prof);

        
        $__internal_6ed4b779d0ccbbc2bfac2f7acc41e71241c41fb92ca90ad2457c84110eeb9300->leave($__internal_6ed4b779d0ccbbc2bfac2f7acc41e71241c41fb92ca90ad2457c84110eeb9300_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
