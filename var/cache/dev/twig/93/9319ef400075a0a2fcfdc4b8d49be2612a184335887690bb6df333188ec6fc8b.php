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
        $__internal_fbcd474acfc057e614aab7df45bb50dd911c4188dd502125dce3db23e22f2362 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fbcd474acfc057e614aab7df45bb50dd911c4188dd502125dce3db23e22f2362->enter($__internal_fbcd474acfc057e614aab7df45bb50dd911c4188dd502125dce3db23e22f2362_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_fb525de0d2d818cda042b9a31b99aba17e4beefdb0126c6eb9e2fadc1a988ad6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb525de0d2d818cda042b9a31b99aba17e4beefdb0126c6eb9e2fadc1a988ad6->enter($__internal_fb525de0d2d818cda042b9a31b99aba17e4beefdb0126c6eb9e2fadc1a988ad6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_fbcd474acfc057e614aab7df45bb50dd911c4188dd502125dce3db23e22f2362->leave($__internal_fbcd474acfc057e614aab7df45bb50dd911c4188dd502125dce3db23e22f2362_prof);

        
        $__internal_fb525de0d2d818cda042b9a31b99aba17e4beefdb0126c6eb9e2fadc1a988ad6->leave($__internal_fb525de0d2d818cda042b9a31b99aba17e4beefdb0126c6eb9e2fadc1a988ad6_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_2042ab30f38c20cd59ec01d4e9f4202fb3571f961f7ed2408549d3e15dc05ae1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2042ab30f38c20cd59ec01d4e9f4202fb3571f961f7ed2408549d3e15dc05ae1->enter($__internal_2042ab30f38c20cd59ec01d4e9f4202fb3571f961f7ed2408549d3e15dc05ae1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4c8e36860a84a57f112913c9a7f199a0c2cb701e623d721d7ccd466ab99860f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c8e36860a84a57f112913c9a7f199a0c2cb701e623d721d7ccd466ab99860f7->enter($__internal_4c8e36860a84a57f112913c9a7f199a0c2cb701e623d721d7ccd466ab99860f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_4c8e36860a84a57f112913c9a7f199a0c2cb701e623d721d7ccd466ab99860f7->leave($__internal_4c8e36860a84a57f112913c9a7f199a0c2cb701e623d721d7ccd466ab99860f7_prof);

        
        $__internal_2042ab30f38c20cd59ec01d4e9f4202fb3571f961f7ed2408549d3e15dc05ae1->leave($__internal_2042ab30f38c20cd59ec01d4e9f4202fb3571f961f7ed2408549d3e15dc05ae1_prof);

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
