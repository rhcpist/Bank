<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_4e760b62dcc6956e5b94a4e9a7267d087861b2e21214a43ad44e85c7b0b80e9b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fe97e54b8253172209a0a70e91f700f2b3f821c2a2be054e97fc67c457235297 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe97e54b8253172209a0a70e91f700f2b3f821c2a2be054e97fc67c457235297->enter($__internal_fe97e54b8253172209a0a70e91f700f2b3f821c2a2be054e97fc67c457235297_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $__internal_a7500d9608e03d86b8e8c4a4704501fd3dbe46634a7074fb3232da8817664363 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7500d9608e03d86b8e8c4a4704501fd3dbe46634a7074fb3232da8817664363->enter($__internal_a7500d9608e03d86b8e8c4a4704501fd3dbe46634a7074fb3232da8817664363_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fe97e54b8253172209a0a70e91f700f2b3f821c2a2be054e97fc67c457235297->leave($__internal_fe97e54b8253172209a0a70e91f700f2b3f821c2a2be054e97fc67c457235297_prof);

        
        $__internal_a7500d9608e03d86b8e8c4a4704501fd3dbe46634a7074fb3232da8817664363->leave($__internal_a7500d9608e03d86b8e8c4a4704501fd3dbe46634a7074fb3232da8817664363_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_aebcd8c0197b3a8679e50696cf36695a5c0d45f2a40cd9e827503c27f05e6d41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aebcd8c0197b3a8679e50696cf36695a5c0d45f2a40cd9e827503c27f05e6d41->enter($__internal_aebcd8c0197b3a8679e50696cf36695a5c0d45f2a40cd9e827503c27f05e6d41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_76760dc9a9551217c6189f2983186718f84839091aad49481d359e6cec2fd275 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76760dc9a9551217c6189f2983186718f84839091aad49481d359e6cec2fd275->enter($__internal_76760dc9a9551217c6189f2983186718f84839091aad49481d359e6cec2fd275_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_76760dc9a9551217c6189f2983186718f84839091aad49481d359e6cec2fd275->leave($__internal_76760dc9a9551217c6189f2983186718f84839091aad49481d359e6cec2fd275_prof);

        
        $__internal_aebcd8c0197b3a8679e50696cf36695a5c0d45f2a40cd9e827503c27f05e6d41->leave($__internal_aebcd8c0197b3a8679e50696cf36695a5c0d45f2a40cd9e827503c27f05e6d41_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "FOSUserBundle:Security:login.html.twig", "/mnt/storage/private/public_html/bank/app/Resources/FOSUserBundle/views/Security/login.html.twig");
    }
}
