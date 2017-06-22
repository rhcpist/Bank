<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_24ef5875ab9380cf100cf3f7ea460ae4018b737be65a024e46a2fd248bd134a9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_06035a597a99de08f61938341fd12f9f7353e964c94e89f5c5120a38ae2d808d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06035a597a99de08f61938341fd12f9f7353e964c94e89f5c5120a38ae2d808d->enter($__internal_06035a597a99de08f61938341fd12f9f7353e964c94e89f5c5120a38ae2d808d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $__internal_9a25b3a44aa4562690ff693030c69bdef806dec46b83707fc0257ad78c417247 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a25b3a44aa4562690ff693030c69bdef806dec46b83707fc0257ad78c417247->enter($__internal_9a25b3a44aa4562690ff693030c69bdef806dec46b83707fc0257ad78c417247_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_06035a597a99de08f61938341fd12f9f7353e964c94e89f5c5120a38ae2d808d->leave($__internal_06035a597a99de08f61938341fd12f9f7353e964c94e89f5c5120a38ae2d808d_prof);

        
        $__internal_9a25b3a44aa4562690ff693030c69bdef806dec46b83707fc0257ad78c417247->leave($__internal_9a25b3a44aa4562690ff693030c69bdef806dec46b83707fc0257ad78c417247_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c4757031394e385528a3767964fce7d7f2d1f2f188df5b2a33b1f3880d6f7616 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4757031394e385528a3767964fce7d7f2d1f2f188df5b2a33b1f3880d6f7616->enter($__internal_c4757031394e385528a3767964fce7d7f2d1f2f188df5b2a33b1f3880d6f7616_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_d132248e79a1c27bf46805926f8dffa765e2feff35d811ded0b22f610e3bc39e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d132248e79a1c27bf46805926f8dffa765e2feff35d811ded0b22f610e3bc39e->enter($__internal_d132248e79a1c27bf46805926f8dffa765e2feff35d811ded0b22f610e3bc39e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_d132248e79a1c27bf46805926f8dffa765e2feff35d811ded0b22f610e3bc39e->leave($__internal_d132248e79a1c27bf46805926f8dffa765e2feff35d811ded0b22f610e3bc39e_prof);

        
        $__internal_c4757031394e385528a3767964fce7d7f2d1f2f188df5b2a33b1f3880d6f7616->leave($__internal_c4757031394e385528a3767964fce7d7f2d1f2f188df5b2a33b1f3880d6f7616_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
{% include \"@FOSUser/Group/list_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:list.html.twig", "/mnt/storage/private/public_html/bank/app/Resources/FOSUserBundle/views/Group/list.html.twig");
    }
}
