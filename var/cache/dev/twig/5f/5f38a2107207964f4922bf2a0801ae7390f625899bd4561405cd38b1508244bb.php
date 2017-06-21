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
        $__internal_3593829471eabc59257cd1f32850fcaf62a3d7ddeff1981bf472a65f6e567547 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3593829471eabc59257cd1f32850fcaf62a3d7ddeff1981bf472a65f6e567547->enter($__internal_3593829471eabc59257cd1f32850fcaf62a3d7ddeff1981bf472a65f6e567547_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_c7d255a9369cd6b71ca250f41dff13e9810cde2ae7340368eba83b446b440034 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7d255a9369cd6b71ca250f41dff13e9810cde2ae7340368eba83b446b440034->enter($__internal_c7d255a9369cd6b71ca250f41dff13e9810cde2ae7340368eba83b446b440034_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_3593829471eabc59257cd1f32850fcaf62a3d7ddeff1981bf472a65f6e567547->leave($__internal_3593829471eabc59257cd1f32850fcaf62a3d7ddeff1981bf472a65f6e567547_prof);

        
        $__internal_c7d255a9369cd6b71ca250f41dff13e9810cde2ae7340368eba83b446b440034->leave($__internal_c7d255a9369cd6b71ca250f41dff13e9810cde2ae7340368eba83b446b440034_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_62847a7841e38501da202ced5560c2d9dd16066dc40a05aab1779b2a9e83a32d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62847a7841e38501da202ced5560c2d9dd16066dc40a05aab1779b2a9e83a32d->enter($__internal_62847a7841e38501da202ced5560c2d9dd16066dc40a05aab1779b2a9e83a32d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_5555890ef68a5b856fd33c8f4d7298fa8868b54d098dad4885677493454f69c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5555890ef68a5b856fd33c8f4d7298fa8868b54d098dad4885677493454f69c0->enter($__internal_5555890ef68a5b856fd33c8f4d7298fa8868b54d098dad4885677493454f69c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_5555890ef68a5b856fd33c8f4d7298fa8868b54d098dad4885677493454f69c0->leave($__internal_5555890ef68a5b856fd33c8f4d7298fa8868b54d098dad4885677493454f69c0_prof);

        
        $__internal_62847a7841e38501da202ced5560c2d9dd16066dc40a05aab1779b2a9e83a32d->leave($__internal_62847a7841e38501da202ced5560c2d9dd16066dc40a05aab1779b2a9e83a32d_prof);

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
