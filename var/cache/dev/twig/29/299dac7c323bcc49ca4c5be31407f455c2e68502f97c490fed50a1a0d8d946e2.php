<?php

/* base.html.twig */
class __TwigTemplate_ccb2d7a56728370a159a102cfa7cb71092bc94372cdeb05c34ae3ee63e79a9f6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_360ae263d0b864e6c886e6301d188dd43c3b4280d552dcb8799b76b459c4c170 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_360ae263d0b864e6c886e6301d188dd43c3b4280d552dcb8799b76b459c4c170->enter($__internal_360ae263d0b864e6c886e6301d188dd43c3b4280d552dcb8799b76b459c4c170_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_fe881e7cc0e96d57451a476bf132136a0c462f9513f9d8888395a2348ebfae6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe881e7cc0e96d57451a476bf132136a0c462f9513f9d8888395a2348ebfae6c->enter($__internal_fe881e7cc0e96d57451a476bf132136a0c462f9513f9d8888395a2348ebfae6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_360ae263d0b864e6c886e6301d188dd43c3b4280d552dcb8799b76b459c4c170->leave($__internal_360ae263d0b864e6c886e6301d188dd43c3b4280d552dcb8799b76b459c4c170_prof);

        
        $__internal_fe881e7cc0e96d57451a476bf132136a0c462f9513f9d8888395a2348ebfae6c->leave($__internal_fe881e7cc0e96d57451a476bf132136a0c462f9513f9d8888395a2348ebfae6c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_494f0a2e82f19631908de7a455da60816582eddca3c55fd70774c3b0c6231a15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_494f0a2e82f19631908de7a455da60816582eddca3c55fd70774c3b0c6231a15->enter($__internal_494f0a2e82f19631908de7a455da60816582eddca3c55fd70774c3b0c6231a15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8f279bbbea33019d87eb8f05be71e26dde6d65093fad2f4b7da7b43b4ce38454 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f279bbbea33019d87eb8f05be71e26dde6d65093fad2f4b7da7b43b4ce38454->enter($__internal_8f279bbbea33019d87eb8f05be71e26dde6d65093fad2f4b7da7b43b4ce38454_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_8f279bbbea33019d87eb8f05be71e26dde6d65093fad2f4b7da7b43b4ce38454->leave($__internal_8f279bbbea33019d87eb8f05be71e26dde6d65093fad2f4b7da7b43b4ce38454_prof);

        
        $__internal_494f0a2e82f19631908de7a455da60816582eddca3c55fd70774c3b0c6231a15->leave($__internal_494f0a2e82f19631908de7a455da60816582eddca3c55fd70774c3b0c6231a15_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b49879392dff0ad3606963f7ee5a3a464fe12f68f82529a1a10cb32f9c863f71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b49879392dff0ad3606963f7ee5a3a464fe12f68f82529a1a10cb32f9c863f71->enter($__internal_b49879392dff0ad3606963f7ee5a3a464fe12f68f82529a1a10cb32f9c863f71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_639fd8f40024a8d9c51c8b7082245bff54a47de3ec794a68b2d84de11e29cbba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_639fd8f40024a8d9c51c8b7082245bff54a47de3ec794a68b2d84de11e29cbba->enter($__internal_639fd8f40024a8d9c51c8b7082245bff54a47de3ec794a68b2d84de11e29cbba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_639fd8f40024a8d9c51c8b7082245bff54a47de3ec794a68b2d84de11e29cbba->leave($__internal_639fd8f40024a8d9c51c8b7082245bff54a47de3ec794a68b2d84de11e29cbba_prof);

        
        $__internal_b49879392dff0ad3606963f7ee5a3a464fe12f68f82529a1a10cb32f9c863f71->leave($__internal_b49879392dff0ad3606963f7ee5a3a464fe12f68f82529a1a10cb32f9c863f71_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_841f8324f6db5a38b24aff980ba2d39cc642e4b1eac2a5ec67f26345c006bd3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_841f8324f6db5a38b24aff980ba2d39cc642e4b1eac2a5ec67f26345c006bd3d->enter($__internal_841f8324f6db5a38b24aff980ba2d39cc642e4b1eac2a5ec67f26345c006bd3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3823d0e0db49bb19e90d1e15bdcd1222ad3827ddf7ad7b74863c68db28a85588 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3823d0e0db49bb19e90d1e15bdcd1222ad3827ddf7ad7b74863c68db28a85588->enter($__internal_3823d0e0db49bb19e90d1e15bdcd1222ad3827ddf7ad7b74863c68db28a85588_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_3823d0e0db49bb19e90d1e15bdcd1222ad3827ddf7ad7b74863c68db28a85588->leave($__internal_3823d0e0db49bb19e90d1e15bdcd1222ad3827ddf7ad7b74863c68db28a85588_prof);

        
        $__internal_841f8324f6db5a38b24aff980ba2d39cc642e4b1eac2a5ec67f26345c006bd3d->leave($__internal_841f8324f6db5a38b24aff980ba2d39cc642e4b1eac2a5ec67f26345c006bd3d_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_356eeaa2bf80b4afd366b569abed3771e0b60b407a2b506250e0a3915d2c6ad9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_356eeaa2bf80b4afd366b569abed3771e0b60b407a2b506250e0a3915d2c6ad9->enter($__internal_356eeaa2bf80b4afd366b569abed3771e0b60b407a2b506250e0a3915d2c6ad9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_985fef2d0c4bbb43f8ac654ecb7cfffb64b0ff967d3e82a6be07c580e4dff409 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_985fef2d0c4bbb43f8ac654ecb7cfffb64b0ff967d3e82a6be07c580e4dff409->enter($__internal_985fef2d0c4bbb43f8ac654ecb7cfffb64b0ff967d3e82a6be07c580e4dff409_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_985fef2d0c4bbb43f8ac654ecb7cfffb64b0ff967d3e82a6be07c580e4dff409->leave($__internal_985fef2d0c4bbb43f8ac654ecb7cfffb64b0ff967d3e82a6be07c580e4dff409_prof);

        
        $__internal_356eeaa2bf80b4afd366b569abed3771e0b60b407a2b506250e0a3915d2c6ad9->leave($__internal_356eeaa2bf80b4afd366b569abed3771e0b60b407a2b506250e0a3915d2c6ad9_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/mnt/storage/private/public_html/bank/app/Resources/views/base.html.twig");
    }
}
