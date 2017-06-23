<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_567329e5426171255dd4fea8a1095917a90e0fad03f828879e3452b709a89664 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_3d3d051224ce2dfd88876fba9a8f1a25bafa4dc7e117d2fcbc7da5912c3b1a77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d3d051224ce2dfd88876fba9a8f1a25bafa4dc7e117d2fcbc7da5912c3b1a77->enter($__internal_3d3d051224ce2dfd88876fba9a8f1a25bafa4dc7e117d2fcbc7da5912c3b1a77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $__internal_a6ebb3e99cac8b172d6323a38312c557c7d8fa71aa531c75b204777d080f654d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6ebb3e99cac8b172d6323a38312c557c7d8fa71aa531c75b204777d080f654d->enter($__internal_a6ebb3e99cac8b172d6323a38312c557c7d8fa71aa531c75b204777d080f654d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3d3d051224ce2dfd88876fba9a8f1a25bafa4dc7e117d2fcbc7da5912c3b1a77->leave($__internal_3d3d051224ce2dfd88876fba9a8f1a25bafa4dc7e117d2fcbc7da5912c3b1a77_prof);

        
        $__internal_a6ebb3e99cac8b172d6323a38312c557c7d8fa71aa531c75b204777d080f654d->leave($__internal_a6ebb3e99cac8b172d6323a38312c557c7d8fa71aa531c75b204777d080f654d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_955b6d6bdb6d2810b619833f989977b45ef09809b60ffc7adb579cf84e3cd7c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_955b6d6bdb6d2810b619833f989977b45ef09809b60ffc7adb579cf84e3cd7c4->enter($__internal_955b6d6bdb6d2810b619833f989977b45ef09809b60ffc7adb579cf84e3cd7c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_2e63fc6609fe4ccafe1c53e248fca819b0d1c448728b542ce5bf7d13d06b9bbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e63fc6609fe4ccafe1c53e248fca819b0d1c448728b542ce5bf7d13d06b9bbc->enter($__internal_2e63fc6609fe4ccafe1c53e248fca819b0d1c448728b542ce5bf7d13d06b9bbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_2e63fc6609fe4ccafe1c53e248fca819b0d1c448728b542ce5bf7d13d06b9bbc->leave($__internal_2e63fc6609fe4ccafe1c53e248fca819b0d1c448728b542ce5bf7d13d06b9bbc_prof);

        
        $__internal_955b6d6bdb6d2810b619833f989977b45ef09809b60ffc7adb579cf84e3cd7c4->leave($__internal_955b6d6bdb6d2810b619833f989977b45ef09809b60ffc7adb579cf84e3cd7c4_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
{% include \"@FOSUser/Group/new_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:new.html.twig", "/mnt/storage/private/public_html/bank/app/Resources/FOSUserBundle/views/Group/new.html.twig");
    }
}
