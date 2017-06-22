<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_5918dc8c36ae954b73c9a1cdc7bf2b3f7a0bb3152aee65a7ccf40638e06beed1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_a07e402ebab13b9b1e8911c84977d970bab77eff894a60b647f92f0336fe0e15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a07e402ebab13b9b1e8911c84977d970bab77eff894a60b647f92f0336fe0e15->enter($__internal_a07e402ebab13b9b1e8911c84977d970bab77eff894a60b647f92f0336fe0e15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $__internal_7bb609d2429db1b45b854d7c4638c5824ea941ff1412a05172b46f8ca9605370 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bb609d2429db1b45b854d7c4638c5824ea941ff1412a05172b46f8ca9605370->enter($__internal_7bb609d2429db1b45b854d7c4638c5824ea941ff1412a05172b46f8ca9605370_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a07e402ebab13b9b1e8911c84977d970bab77eff894a60b647f92f0336fe0e15->leave($__internal_a07e402ebab13b9b1e8911c84977d970bab77eff894a60b647f92f0336fe0e15_prof);

        
        $__internal_7bb609d2429db1b45b854d7c4638c5824ea941ff1412a05172b46f8ca9605370->leave($__internal_7bb609d2429db1b45b854d7c4638c5824ea941ff1412a05172b46f8ca9605370_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0ac00a91bc45dc31d57368eafc09c59f1601d0aa4ee2fa5c2d6202e008c554f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ac00a91bc45dc31d57368eafc09c59f1601d0aa4ee2fa5c2d6202e008c554f8->enter($__internal_0ac00a91bc45dc31d57368eafc09c59f1601d0aa4ee2fa5c2d6202e008c554f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_611776473cf8059d61492da866b7be3c23af1b5094b66f81d93e25341d377534 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_611776473cf8059d61492da866b7be3c23af1b5094b66f81d93e25341d377534->enter($__internal_611776473cf8059d61492da866b7be3c23af1b5094b66f81d93e25341d377534_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_611776473cf8059d61492da866b7be3c23af1b5094b66f81d93e25341d377534->leave($__internal_611776473cf8059d61492da866b7be3c23af1b5094b66f81d93e25341d377534_prof);

        
        $__internal_0ac00a91bc45dc31d57368eafc09c59f1601d0aa4ee2fa5c2d6202e008c554f8->leave($__internal_0ac00a91bc45dc31d57368eafc09c59f1601d0aa4ee2fa5c2d6202e008c554f8_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
{% include \"@FOSUser/Group/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:show.html.twig", "/mnt/storage/private/public_html/bank/app/Resources/FOSUserBundle/views/Group/show.html.twig");
    }
}
