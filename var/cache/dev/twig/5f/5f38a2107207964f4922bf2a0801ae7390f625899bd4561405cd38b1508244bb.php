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
        $__internal_34a66b5d11327f7999ff5e4fb9dc858ed8be5205c1c856b9add7ce73de5c6aae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34a66b5d11327f7999ff5e4fb9dc858ed8be5205c1c856b9add7ce73de5c6aae->enter($__internal_34a66b5d11327f7999ff5e4fb9dc858ed8be5205c1c856b9add7ce73de5c6aae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_e473c9f3d655c725fe12a3a2ee576fd401f4e8c625cabb0dbe2fa11d72e75fd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e473c9f3d655c725fe12a3a2ee576fd401f4e8c625cabb0dbe2fa11d72e75fd8->enter($__internal_e473c9f3d655c725fe12a3a2ee576fd401f4e8c625cabb0dbe2fa11d72e75fd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_34a66b5d11327f7999ff5e4fb9dc858ed8be5205c1c856b9add7ce73de5c6aae->leave($__internal_34a66b5d11327f7999ff5e4fb9dc858ed8be5205c1c856b9add7ce73de5c6aae_prof);

        
        $__internal_e473c9f3d655c725fe12a3a2ee576fd401f4e8c625cabb0dbe2fa11d72e75fd8->leave($__internal_e473c9f3d655c725fe12a3a2ee576fd401f4e8c625cabb0dbe2fa11d72e75fd8_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_0f3c79acfd3c91b3a5e842aa411647f74c676b7947a8eabb9417cdb43f97603b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f3c79acfd3c91b3a5e842aa411647f74c676b7947a8eabb9417cdb43f97603b->enter($__internal_0f3c79acfd3c91b3a5e842aa411647f74c676b7947a8eabb9417cdb43f97603b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_0c3c37a91595d49f5bf791c1392f021da07e95b180eadecfbe468579183629e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c3c37a91595d49f5bf791c1392f021da07e95b180eadecfbe468579183629e7->enter($__internal_0c3c37a91595d49f5bf791c1392f021da07e95b180eadecfbe468579183629e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_0c3c37a91595d49f5bf791c1392f021da07e95b180eadecfbe468579183629e7->leave($__internal_0c3c37a91595d49f5bf791c1392f021da07e95b180eadecfbe468579183629e7_prof);

        
        $__internal_0f3c79acfd3c91b3a5e842aa411647f74c676b7947a8eabb9417cdb43f97603b->leave($__internal_0f3c79acfd3c91b3a5e842aa411647f74c676b7947a8eabb9417cdb43f97603b_prof);

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
