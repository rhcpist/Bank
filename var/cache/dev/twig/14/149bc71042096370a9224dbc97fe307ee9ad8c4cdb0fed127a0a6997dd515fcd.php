<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_51dac5e686caeee664aa8179676a817704bc67171636a645680e7a6cb6f418f4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_a7081c7bf526feb7b626623eee499057dbdf41a8406d6bd4b879d67260db81ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7081c7bf526feb7b626623eee499057dbdf41a8406d6bd4b879d67260db81ca->enter($__internal_a7081c7bf526feb7b626623eee499057dbdf41a8406d6bd4b879d67260db81ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $__internal_9304a516f39c7bd797303c19842aaedd6515bba236e46e174c9df6b6d963674a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9304a516f39c7bd797303c19842aaedd6515bba236e46e174c9df6b6d963674a->enter($__internal_9304a516f39c7bd797303c19842aaedd6515bba236e46e174c9df6b6d963674a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a7081c7bf526feb7b626623eee499057dbdf41a8406d6bd4b879d67260db81ca->leave($__internal_a7081c7bf526feb7b626623eee499057dbdf41a8406d6bd4b879d67260db81ca_prof);

        
        $__internal_9304a516f39c7bd797303c19842aaedd6515bba236e46e174c9df6b6d963674a->leave($__internal_9304a516f39c7bd797303c19842aaedd6515bba236e46e174c9df6b6d963674a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4208e2b14fcadfb90945598d1fbcf561b1dc57f3c2f1fd1116eb697ce42f56d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4208e2b14fcadfb90945598d1fbcf561b1dc57f3c2f1fd1116eb697ce42f56d0->enter($__internal_4208e2b14fcadfb90945598d1fbcf561b1dc57f3c2f1fd1116eb697ce42f56d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_a653e2087ab2185e6786094de38e2b6155bee7656a38d48df2634a9f6218d0ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a653e2087ab2185e6786094de38e2b6155bee7656a38d48df2634a9f6218d0ca->enter($__internal_a653e2087ab2185e6786094de38e2b6155bee7656a38d48df2634a9f6218d0ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_a653e2087ab2185e6786094de38e2b6155bee7656a38d48df2634a9f6218d0ca->leave($__internal_a653e2087ab2185e6786094de38e2b6155bee7656a38d48df2634a9f6218d0ca_prof);

        
        $__internal_4208e2b14fcadfb90945598d1fbcf561b1dc57f3c2f1fd1116eb697ce42f56d0->leave($__internal_4208e2b14fcadfb90945598d1fbcf561b1dc57f3c2f1fd1116eb697ce42f56d0_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:register.html.twig", "/mnt/storage/private/public_html/bank/app/Resources/FOSUserBundle/views/Registration/register.html.twig");
    }
}
