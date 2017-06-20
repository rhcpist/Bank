<?php

/* ::layout.html.twig */
class __TwigTemplate_f43c45fd645ca2f29b3e04e46739b55a65de1cfbfaa7926ccb47826914fa278d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_61b41ef4bf887dcaabc983f495fa913eb24b2d850c0064660182fa9e654e0353 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61b41ef4bf887dcaabc983f495fa913eb24b2d850c0064660182fa9e654e0353->enter($__internal_61b41ef4bf887dcaabc983f495fa913eb24b2d850c0064660182fa9e654e0353_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        $__internal_3f7772e795fbf8b64db1173ffd154179be7284dea4f913edf3a2212ed0da56f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f7772e795fbf8b64db1173ffd154179be7284dea4f913edf3a2212ed0da56f6->enter($__internal_3f7772e795fbf8b64db1173ffd154179be7284dea4f913edf3a2212ed0da56f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        // line 1
        $this->displayBlock('title', $context, $blocks);
        // line 2
        echo "
";
        // line 3
        $this->displayBlock('content', $context, $blocks);
        
        $__internal_61b41ef4bf887dcaabc983f495fa913eb24b2d850c0064660182fa9e654e0353->leave($__internal_61b41ef4bf887dcaabc983f495fa913eb24b2d850c0064660182fa9e654e0353_prof);

        
        $__internal_3f7772e795fbf8b64db1173ffd154179be7284dea4f913edf3a2212ed0da56f6->leave($__internal_3f7772e795fbf8b64db1173ffd154179be7284dea4f913edf3a2212ed0da56f6_prof);

    }

    // line 1
    public function block_title($context, array $blocks = array())
    {
        $__internal_163b410785d4b4535774656f1cc4504ca0a7e8b187e623b87f4bdb5af4b100f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_163b410785d4b4535774656f1cc4504ca0a7e8b187e623b87f4bdb5af4b100f8->enter($__internal_163b410785d4b4535774656f1cc4504ca0a7e8b187e623b87f4bdb5af4b100f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_022273a58003a9f2598bc1426f49a80b6cf78da0efb2153b72e78da2cf9834a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_022273a58003a9f2598bc1426f49a80b6cf78da0efb2153b72e78da2cf9834a4->enter($__internal_022273a58003a9f2598bc1426f49a80b6cf78da0efb2153b72e78da2cf9834a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Demo Application";
        
        $__internal_022273a58003a9f2598bc1426f49a80b6cf78da0efb2153b72e78da2cf9834a4->leave($__internal_022273a58003a9f2598bc1426f49a80b6cf78da0efb2153b72e78da2cf9834a4_prof);

        
        $__internal_163b410785d4b4535774656f1cc4504ca0a7e8b187e623b87f4bdb5af4b100f8->leave($__internal_163b410785d4b4535774656f1cc4504ca0a7e8b187e623b87f4bdb5af4b100f8_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_b2a4e3be2363ec8f52409d6c2f5fd30fd01e3a9d0920030a531045f452a41c2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2a4e3be2363ec8f52409d6c2f5fd30fd01e3a9d0920030a531045f452a41c2c->enter($__internal_b2a4e3be2363ec8f52409d6c2f5fd30fd01e3a9d0920030a531045f452a41c2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_e66ecfb97cb2df3dc2c54d6ab67d3180740c276f12cce5aeb032bf523b1f5f23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e66ecfb97cb2df3dc2c54d6ab67d3180740c276f12cce5aeb032bf523b1f5f23->enter($__internal_e66ecfb97cb2df3dc2c54d6ab67d3180740c276f12cce5aeb032bf523b1f5f23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_e66ecfb97cb2df3dc2c54d6ab67d3180740c276f12cce5aeb032bf523b1f5f23->leave($__internal_e66ecfb97cb2df3dc2c54d6ab67d3180740c276f12cce5aeb032bf523b1f5f23_prof);

        
        $__internal_b2a4e3be2363ec8f52409d6c2f5fd30fd01e3a9d0920030a531045f452a41c2c->leave($__internal_b2a4e3be2363ec8f52409d6c2f5fd30fd01e3a9d0920030a531045f452a41c2c_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_66934e61d5d2f1f5689c5388385ed36e028e8637efd84ceddf767cae523a78a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66934e61d5d2f1f5689c5388385ed36e028e8637efd84ceddf767cae523a78a7->enter($__internal_66934e61d5d2f1f5689c5388385ed36e028e8637efd84ceddf767cae523a78a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_643b48730a9053e022cb1e6532c7e15558577c2ae5d5b8880ef4de4bf15dfa34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_643b48730a9053e022cb1e6532c7e15558577c2ae5d5b8880ef4de4bf15dfa34->enter($__internal_643b48730a9053e022cb1e6532c7e15558577c2ae5d5b8880ef4de4bf15dfa34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        
        $__internal_643b48730a9053e022cb1e6532c7e15558577c2ae5d5b8880ef4de4bf15dfa34->leave($__internal_643b48730a9053e022cb1e6532c7e15558577c2ae5d5b8880ef4de4bf15dfa34_prof);

        
        $__internal_66934e61d5d2f1f5689c5388385ed36e028e8637efd84ceddf767cae523a78a7->leave($__internal_66934e61d5d2f1f5689c5388385ed36e028e8637efd84ceddf767cae523a78a7_prof);

    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  70 => 4,  61 => 3,  43 => 1,  33 => 3,  30 => 2,  28 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block title %}Demo Application{% endblock %}

{% block content %}
    {% block fos_user_content %}{% endblock %}
{% endblock %}", "::layout.html.twig", "/mnt/storage/private/public_html/bank/app/Resources/views/layout.html.twig");
    }
}
