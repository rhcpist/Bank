<?php

/* FOSUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_dcc5353928a54c4d4a1afbdaa380989fbe919bcf0bbcedd3b8ea74bfc9e076f4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:check_email.html.twig", 1);
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
        $__internal_fb6109c5dc58833d2d016f289ac6f945e5617fa2af295dbc6401f151e349851f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb6109c5dc58833d2d016f289ac6f945e5617fa2af295dbc6401f151e349851f->enter($__internal_fb6109c5dc58833d2d016f289ac6f945e5617fa2af295dbc6401f151e349851f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $__internal_f5fe5cdce1d398a9c729c9e00ec184d74fa787e2f6c6eb948bd617a0b5bd38a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5fe5cdce1d398a9c729c9e00ec184d74fa787e2f6c6eb948bd617a0b5bd38a7->enter($__internal_f5fe5cdce1d398a9c729c9e00ec184d74fa787e2f6c6eb948bd617a0b5bd38a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fb6109c5dc58833d2d016f289ac6f945e5617fa2af295dbc6401f151e349851f->leave($__internal_fb6109c5dc58833d2d016f289ac6f945e5617fa2af295dbc6401f151e349851f_prof);

        
        $__internal_f5fe5cdce1d398a9c729c9e00ec184d74fa787e2f6c6eb948bd617a0b5bd38a7->leave($__internal_f5fe5cdce1d398a9c729c9e00ec184d74fa787e2f6c6eb948bd617a0b5bd38a7_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6735746a1b5bbd99ecf1c99b4d262d67441f19c60715fe22f6a1fab44dcabba0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6735746a1b5bbd99ecf1c99b4d262d67441f19c60715fe22f6a1fab44dcabba0->enter($__internal_6735746a1b5bbd99ecf1c99b4d262d67441f19c60715fe22f6a1fab44dcabba0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_7763c14a7102a69feae8290aedb80d65facfc5ea9b3fce9cd3fa4f764443e35e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7763c14a7102a69feae8290aedb80d65facfc5ea9b3fce9cd3fa4f764443e35e->enter($__internal_7763c14a7102a69feae8290aedb80d65facfc5ea9b3fce9cd3fa4f764443e35e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) || array_key_exists("tokenLifetime", $context) ? $context["tokenLifetime"] : (function () { throw new Twig_Error_Runtime('Variable "tokenLifetime" does not exist.', 7, $this->getSourceContext()); })())), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_7763c14a7102a69feae8290aedb80d65facfc5ea9b3fce9cd3fa4f764443e35e->leave($__internal_7763c14a7102a69feae8290aedb80d65facfc5ea9b3fce9cd3fa4f764443e35e_prof);

        
        $__internal_6735746a1b5bbd99ecf1c99b4d262d67441f19c60715fe22f6a1fab44dcabba0->leave($__internal_6735746a1b5bbd99ecf1c99b4d262d67441f19c60715fe22f6a1fab44dcabba0_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 7,  49 => 6,  40 => 5,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
<p>
{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime})|nl2br }}
</p>
{% endblock %}
", "FOSUserBundle:Resetting:check_email.html.twig", "/mnt/storage/private/public_html/bank/app/Resources/FOSUserBundle/views/Resetting/check_email.html.twig");
    }
}
