<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_d542df71440f12a097d90b75c9bb54ff6ab1b246631df7798838c875ccb68b18 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_a08fa9dbe2972ecbf2a49e8e852b7250ce4d8ddacda394ce5e05390499b02445 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a08fa9dbe2972ecbf2a49e8e852b7250ce4d8ddacda394ce5e05390499b02445->enter($__internal_a08fa9dbe2972ecbf2a49e8e852b7250ce4d8ddacda394ce5e05390499b02445_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $__internal_ecd12e54b6da11fdf6f50344e5e1a5a6c860ba0aad522ae94f1a13d281a62fd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecd12e54b6da11fdf6f50344e5e1a5a6c860ba0aad522ae94f1a13d281a62fd5->enter($__internal_ecd12e54b6da11fdf6f50344e5e1a5a6c860ba0aad522ae94f1a13d281a62fd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a08fa9dbe2972ecbf2a49e8e852b7250ce4d8ddacda394ce5e05390499b02445->leave($__internal_a08fa9dbe2972ecbf2a49e8e852b7250ce4d8ddacda394ce5e05390499b02445_prof);

        
        $__internal_ecd12e54b6da11fdf6f50344e5e1a5a6c860ba0aad522ae94f1a13d281a62fd5->leave($__internal_ecd12e54b6da11fdf6f50344e5e1a5a6c860ba0aad522ae94f1a13d281a62fd5_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2475158bc146b8e045469b52a7d7dbd62677db3d71df51e647095b7ace58c639 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2475158bc146b8e045469b52a7d7dbd62677db3d71df51e647095b7ace58c639->enter($__internal_2475158bc146b8e045469b52a7d7dbd62677db3d71df51e647095b7ace58c639_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_3643f25da07ca448103de9764d74622dae9b3fbad94f45e1139283b4d7d40407 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3643f25da07ca448103de9764d74622dae9b3fbad94f45e1139283b4d7d40407->enter($__internal_3643f25da07ca448103de9764d74622dae9b3fbad94f45e1139283b4d7d40407_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_3643f25da07ca448103de9764d74622dae9b3fbad94f45e1139283b4d7d40407->leave($__internal_3643f25da07ca448103de9764d74622dae9b3fbad94f45e1139283b4d7d40407_prof);

        
        $__internal_2475158bc146b8e045469b52a7d7dbd62677db3d71df51e647095b7ace58c639->leave($__internal_2475158bc146b8e045469b52a7d7dbd62677db3d71df51e647095b7ace58c639_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:reset.html.twig", "/mnt/storage/private/public_html/bank/app/Resources/FOSUserBundle/views/Resetting/reset.html.twig");
    }
}
