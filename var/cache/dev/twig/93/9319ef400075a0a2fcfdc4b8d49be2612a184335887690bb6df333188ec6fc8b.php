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
        $__internal_7191b493c480178ce3d095a767c8510091ff4bf38591be4f635440f02ba85e47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7191b493c480178ce3d095a767c8510091ff4bf38591be4f635440f02ba85e47->enter($__internal_7191b493c480178ce3d095a767c8510091ff4bf38591be4f635440f02ba85e47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_26287452c8ee28f7753ae194367c51a357fefcbf1bfb3be55f5e407689854666 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26287452c8ee28f7753ae194367c51a357fefcbf1bfb3be55f5e407689854666->enter($__internal_26287452c8ee28f7753ae194367c51a357fefcbf1bfb3be55f5e407689854666_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_7191b493c480178ce3d095a767c8510091ff4bf38591be4f635440f02ba85e47->leave($__internal_7191b493c480178ce3d095a767c8510091ff4bf38591be4f635440f02ba85e47_prof);

        
        $__internal_26287452c8ee28f7753ae194367c51a357fefcbf1bfb3be55f5e407689854666->leave($__internal_26287452c8ee28f7753ae194367c51a357fefcbf1bfb3be55f5e407689854666_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_49354c6d9504801bf63d1fa1aa74fb0360eff2f6776476c4372305248aa6f8df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49354c6d9504801bf63d1fa1aa74fb0360eff2f6776476c4372305248aa6f8df->enter($__internal_49354c6d9504801bf63d1fa1aa74fb0360eff2f6776476c4372305248aa6f8df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_5a8d235bd0320ded6cc433ab35dcf1240ea2f1cf8c259d3fee7697a8cfb7b6f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a8d235bd0320ded6cc433ab35dcf1240ea2f1cf8c259d3fee7697a8cfb7b6f9->enter($__internal_5a8d235bd0320ded6cc433ab35dcf1240ea2f1cf8c259d3fee7697a8cfb7b6f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_5a8d235bd0320ded6cc433ab35dcf1240ea2f1cf8c259d3fee7697a8cfb7b6f9->leave($__internal_5a8d235bd0320ded6cc433ab35dcf1240ea2f1cf8c259d3fee7697a8cfb7b6f9_prof);

        
        $__internal_49354c6d9504801bf63d1fa1aa74fb0360eff2f6776476c4372305248aa6f8df->leave($__internal_49354c6d9504801bf63d1fa1aa74fb0360eff2f6776476c4372305248aa6f8df_prof);

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
