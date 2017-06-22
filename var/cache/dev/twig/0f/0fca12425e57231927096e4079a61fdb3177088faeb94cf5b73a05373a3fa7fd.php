<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_5d4fe5469bbda887a59f2e74c127b7bf9e7c2898fb981e0ce63d3763cae45ca7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:check_email.html.twig", 1);
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
        $__internal_e5db9f5b15880e3b737b04a1b8e3a518094bad10e1d7aedaf31502b681981952 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5db9f5b15880e3b737b04a1b8e3a518094bad10e1d7aedaf31502b681981952->enter($__internal_e5db9f5b15880e3b737b04a1b8e3a518094bad10e1d7aedaf31502b681981952_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $__internal_cafa7010dfdbe81c3480ec2c3998cd1fe98030e4e1c374388cb382fe8b7817f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cafa7010dfdbe81c3480ec2c3998cd1fe98030e4e1c374388cb382fe8b7817f4->enter($__internal_cafa7010dfdbe81c3480ec2c3998cd1fe98030e4e1c374388cb382fe8b7817f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e5db9f5b15880e3b737b04a1b8e3a518094bad10e1d7aedaf31502b681981952->leave($__internal_e5db9f5b15880e3b737b04a1b8e3a518094bad10e1d7aedaf31502b681981952_prof);

        
        $__internal_cafa7010dfdbe81c3480ec2c3998cd1fe98030e4e1c374388cb382fe8b7817f4->leave($__internal_cafa7010dfdbe81c3480ec2c3998cd1fe98030e4e1c374388cb382fe8b7817f4_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a3864429f063c2e60d8560f8d6dfa686265f13a004c528b7eb432bc27b31a8ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3864429f063c2e60d8560f8d6dfa686265f13a004c528b7eb432bc27b31a8ca->enter($__internal_a3864429f063c2e60d8560f8d6dfa686265f13a004c528b7eb432bc27b31a8ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_4f9949eb65d01d050e5cfd94219e22819eb7c2266f17fe10173a8ab53797f56f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f9949eb65d01d050e5cfd94219e22819eb7c2266f17fe10173a8ab53797f56f->enter($__internal_4f9949eb65d01d050e5cfd94219e22819eb7c2266f17fe10173a8ab53797f56f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 6, $this->getSourceContext()); })()), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_4f9949eb65d01d050e5cfd94219e22819eb7c2266f17fe10173a8ab53797f56f->leave($__internal_4f9949eb65d01d050e5cfd94219e22819eb7c2266f17fe10173a8ab53797f56f_prof);

        
        $__internal_a3864429f063c2e60d8560f8d6dfa686265f13a004c528b7eb432bc27b31a8ca->leave($__internal_a3864429f063c2e60d8560f8d6dfa686265f13a004c528b7eb432bc27b31a8ca_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 6,  40 => 5,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:check_email.html.twig", "/mnt/storage/private/public_html/bank/app/Resources/FOSUserBundle/views/Registration/check_email.html.twig");
    }
}
