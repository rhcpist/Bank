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
        $__internal_808b97ce018b05493a305beb41c6d3a404e2829114ee3431dc4e46acf3c1cf85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_808b97ce018b05493a305beb41c6d3a404e2829114ee3431dc4e46acf3c1cf85->enter($__internal_808b97ce018b05493a305beb41c6d3a404e2829114ee3431dc4e46acf3c1cf85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_a3064a43e614667e30d639902f2280715e214e3747f19a2bac9da3500d8e9f9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3064a43e614667e30d639902f2280715e214e3747f19a2bac9da3500d8e9f9f->enter($__internal_a3064a43e614667e30d639902f2280715e214e3747f19a2bac9da3500d8e9f9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_808b97ce018b05493a305beb41c6d3a404e2829114ee3431dc4e46acf3c1cf85->leave($__internal_808b97ce018b05493a305beb41c6d3a404e2829114ee3431dc4e46acf3c1cf85_prof);

        
        $__internal_a3064a43e614667e30d639902f2280715e214e3747f19a2bac9da3500d8e9f9f->leave($__internal_a3064a43e614667e30d639902f2280715e214e3747f19a2bac9da3500d8e9f9f_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_feb833a0d95f65b9d0ac341aa6891a7c7588e8548e21ae6d58aa2e8ded82118c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_feb833a0d95f65b9d0ac341aa6891a7c7588e8548e21ae6d58aa2e8ded82118c->enter($__internal_feb833a0d95f65b9d0ac341aa6891a7c7588e8548e21ae6d58aa2e8ded82118c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_3d6c789be88e8d239fdc1f03e3f72b0d2544bd108fd4f46dbc37c8c16cf9da3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d6c789be88e8d239fdc1f03e3f72b0d2544bd108fd4f46dbc37c8c16cf9da3d->enter($__internal_3d6c789be88e8d239fdc1f03e3f72b0d2544bd108fd4f46dbc37c8c16cf9da3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_3d6c789be88e8d239fdc1f03e3f72b0d2544bd108fd4f46dbc37c8c16cf9da3d->leave($__internal_3d6c789be88e8d239fdc1f03e3f72b0d2544bd108fd4f46dbc37c8c16cf9da3d_prof);

        
        $__internal_feb833a0d95f65b9d0ac341aa6891a7c7588e8548e21ae6d58aa2e8ded82118c->leave($__internal_feb833a0d95f65b9d0ac341aa6891a7c7588e8548e21ae6d58aa2e8ded82118c_prof);

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
