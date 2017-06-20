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
        $__internal_d90b5387244c8d8fb761c24e9ff3708a8b77f0b290f6f3e8ec73b0a74aedb727 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d90b5387244c8d8fb761c24e9ff3708a8b77f0b290f6f3e8ec73b0a74aedb727->enter($__internal_d90b5387244c8d8fb761c24e9ff3708a8b77f0b290f6f3e8ec73b0a74aedb727_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $__internal_d09228bff359a69dc66ce3519080c99bba47f538248efd7feb9a3e2ce8ae5ad6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d09228bff359a69dc66ce3519080c99bba47f538248efd7feb9a3e2ce8ae5ad6->enter($__internal_d09228bff359a69dc66ce3519080c99bba47f538248efd7feb9a3e2ce8ae5ad6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d90b5387244c8d8fb761c24e9ff3708a8b77f0b290f6f3e8ec73b0a74aedb727->leave($__internal_d90b5387244c8d8fb761c24e9ff3708a8b77f0b290f6f3e8ec73b0a74aedb727_prof);

        
        $__internal_d09228bff359a69dc66ce3519080c99bba47f538248efd7feb9a3e2ce8ae5ad6->leave($__internal_d09228bff359a69dc66ce3519080c99bba47f538248efd7feb9a3e2ce8ae5ad6_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ff31bd4a6cfb7fdf10f65877e79b596a46d96f249a831963354caeda56ddc399 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff31bd4a6cfb7fdf10f65877e79b596a46d96f249a831963354caeda56ddc399->enter($__internal_ff31bd4a6cfb7fdf10f65877e79b596a46d96f249a831963354caeda56ddc399_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_17be2b08aaa828830f2efb9e755731ebdd15c47aafbf020a7370801ecaa37aeb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17be2b08aaa828830f2efb9e755731ebdd15c47aafbf020a7370801ecaa37aeb->enter($__internal_17be2b08aaa828830f2efb9e755731ebdd15c47aafbf020a7370801ecaa37aeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 6, $this->getSourceContext()); })()), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_17be2b08aaa828830f2efb9e755731ebdd15c47aafbf020a7370801ecaa37aeb->leave($__internal_17be2b08aaa828830f2efb9e755731ebdd15c47aafbf020a7370801ecaa37aeb_prof);

        
        $__internal_ff31bd4a6cfb7fdf10f65877e79b596a46d96f249a831963354caeda56ddc399->leave($__internal_ff31bd4a6cfb7fdf10f65877e79b596a46d96f249a831963354caeda56ddc399_prof);

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
