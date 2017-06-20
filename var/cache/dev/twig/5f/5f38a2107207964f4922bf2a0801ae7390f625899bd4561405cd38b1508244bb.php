<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_572b1bedf0974a20d31671ff8bae63474b25258954d943e3b54e939f673c8d5f extends Twig_Template
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
        $__internal_a793dc0dfea73bf81c61b16646a46fd2bf7e3bb66d9894af21c01bba99f6e026 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a793dc0dfea73bf81c61b16646a46fd2bf7e3bb66d9894af21c01bba99f6e026->enter($__internal_a793dc0dfea73bf81c61b16646a46fd2bf7e3bb66d9894af21c01bba99f6e026_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_6716c5bce6e70130161e6556dad3b283799170ffd66f99e5227a16b87a768dd6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6716c5bce6e70130161e6556dad3b283799170ffd66f99e5227a16b87a768dd6->enter($__internal_6716c5bce6e70130161e6556dad3b283799170ffd66f99e5227a16b87a768dd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_a793dc0dfea73bf81c61b16646a46fd2bf7e3bb66d9894af21c01bba99f6e026->leave($__internal_a793dc0dfea73bf81c61b16646a46fd2bf7e3bb66d9894af21c01bba99f6e026_prof);

        
        $__internal_6716c5bce6e70130161e6556dad3b283799170ffd66f99e5227a16b87a768dd6->leave($__internal_6716c5bce6e70130161e6556dad3b283799170ffd66f99e5227a16b87a768dd6_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_fd227389d6746d5e784057224e99d2ad7b289535eb00afa2555014c82a6d0074 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd227389d6746d5e784057224e99d2ad7b289535eb00afa2555014c82a6d0074->enter($__internal_fd227389d6746d5e784057224e99d2ad7b289535eb00afa2555014c82a6d0074_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_1a25480eabb96d31320361296340f8bd071b805ce252e73daa6bae8ae441dbc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a25480eabb96d31320361296340f8bd071b805ce252e73daa6bae8ae441dbc9->enter($__internal_1a25480eabb96d31320361296340f8bd071b805ce252e73daa6bae8ae441dbc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_1a25480eabb96d31320361296340f8bd071b805ce252e73daa6bae8ae441dbc9->leave($__internal_1a25480eabb96d31320361296340f8bd071b805ce252e73daa6bae8ae441dbc9_prof);

        
        $__internal_fd227389d6746d5e784057224e99d2ad7b289535eb00afa2555014c82a6d0074->leave($__internal_fd227389d6746d5e784057224e99d2ad7b289535eb00afa2555014c82a6d0074_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
