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
        $__internal_6afaf4c50ecbeab8f2067fab8e343ae7858c9da995927e8d2f60415053c4f6da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6afaf4c50ecbeab8f2067fab8e343ae7858c9da995927e8d2f60415053c4f6da->enter($__internal_6afaf4c50ecbeab8f2067fab8e343ae7858c9da995927e8d2f60415053c4f6da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $__internal_569e482b6acc25a057ae418f5fbe92c4695a8d7daf2c00a4353f00e0e1760e23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_569e482b6acc25a057ae418f5fbe92c4695a8d7daf2c00a4353f00e0e1760e23->enter($__internal_569e482b6acc25a057ae418f5fbe92c4695a8d7daf2c00a4353f00e0e1760e23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6afaf4c50ecbeab8f2067fab8e343ae7858c9da995927e8d2f60415053c4f6da->leave($__internal_6afaf4c50ecbeab8f2067fab8e343ae7858c9da995927e8d2f60415053c4f6da_prof);

        
        $__internal_569e482b6acc25a057ae418f5fbe92c4695a8d7daf2c00a4353f00e0e1760e23->leave($__internal_569e482b6acc25a057ae418f5fbe92c4695a8d7daf2c00a4353f00e0e1760e23_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_719890f2dc025a148c3def498e71afe0cda6cdc0baf01a518130b39b7b9a6cbe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_719890f2dc025a148c3def498e71afe0cda6cdc0baf01a518130b39b7b9a6cbe->enter($__internal_719890f2dc025a148c3def498e71afe0cda6cdc0baf01a518130b39b7b9a6cbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_5cf481deb33674a1eff649c21e0aac83aa45c1f9daa8f43515ec20c9a2211084 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cf481deb33674a1eff649c21e0aac83aa45c1f9daa8f43515ec20c9a2211084->enter($__internal_5cf481deb33674a1eff649c21e0aac83aa45c1f9daa8f43515ec20c9a2211084_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_5cf481deb33674a1eff649c21e0aac83aa45c1f9daa8f43515ec20c9a2211084->leave($__internal_5cf481deb33674a1eff649c21e0aac83aa45c1f9daa8f43515ec20c9a2211084_prof);

        
        $__internal_719890f2dc025a148c3def498e71afe0cda6cdc0baf01a518130b39b7b9a6cbe->leave($__internal_719890f2dc025a148c3def498e71afe0cda6cdc0baf01a518130b39b7b9a6cbe_prof);

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
