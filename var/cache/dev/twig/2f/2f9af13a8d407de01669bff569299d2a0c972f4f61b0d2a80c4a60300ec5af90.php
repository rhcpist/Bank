<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_418b4333062fa9476784ca8167f14f2edbb795fdb302be9389853e6d98be0b9e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c7a8147fc63efbec18216ce6ee1ff0b7e97b1c1d4eb6156bb3c05b91f77b4ef9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7a8147fc63efbec18216ce6ee1ff0b7e97b1c1d4eb6156bb3c05b91f77b4ef9->enter($__internal_c7a8147fc63efbec18216ce6ee1ff0b7e97b1c1d4eb6156bb3c05b91f77b4ef9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $__internal_3718f42546b5d384a604618444e0d34604644c0aa293c48daf574ee15b98ef6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3718f42546b5d384a604618444e0d34604644c0aa293c48daf574ee15b98ef6f->enter($__internal_3718f42546b5d384a604618444e0d34604644c0aa293c48daf574ee15b98ef6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        // line 1
        $this->displayBlock('title', $context, $blocks);
        // line 2
        echo "
";
        // line 3
        $this->displayBlock('content', $context, $blocks);
        
        $__internal_c7a8147fc63efbec18216ce6ee1ff0b7e97b1c1d4eb6156bb3c05b91f77b4ef9->leave($__internal_c7a8147fc63efbec18216ce6ee1ff0b7e97b1c1d4eb6156bb3c05b91f77b4ef9_prof);

        
        $__internal_3718f42546b5d384a604618444e0d34604644c0aa293c48daf574ee15b98ef6f->leave($__internal_3718f42546b5d384a604618444e0d34604644c0aa293c48daf574ee15b98ef6f_prof);

    }

    // line 1
    public function block_title($context, array $blocks = array())
    {
        $__internal_f5111219152e295379779aa3ea745211235b38c77dadcf7180e86b69c6f1c4ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5111219152e295379779aa3ea745211235b38c77dadcf7180e86b69c6f1c4ee->enter($__internal_f5111219152e295379779aa3ea745211235b38c77dadcf7180e86b69c6f1c4ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_54d295e867c3554b1a168e02fbda097e00ecf9a63604e3beff8e693a6730d2ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54d295e867c3554b1a168e02fbda097e00ecf9a63604e3beff8e693a6730d2ce->enter($__internal_54d295e867c3554b1a168e02fbda097e00ecf9a63604e3beff8e693a6730d2ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Demo Application";
        
        $__internal_54d295e867c3554b1a168e02fbda097e00ecf9a63604e3beff8e693a6730d2ce->leave($__internal_54d295e867c3554b1a168e02fbda097e00ecf9a63604e3beff8e693a6730d2ce_prof);

        
        $__internal_f5111219152e295379779aa3ea745211235b38c77dadcf7180e86b69c6f1c4ee->leave($__internal_f5111219152e295379779aa3ea745211235b38c77dadcf7180e86b69c6f1c4ee_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_0c065d735003c72a4b2dde7b0cb13349d660bcccb682b1e152030baeb5ef5e31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c065d735003c72a4b2dde7b0cb13349d660bcccb682b1e152030baeb5ef5e31->enter($__internal_0c065d735003c72a4b2dde7b0cb13349d660bcccb682b1e152030baeb5ef5e31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_3419a133ecc0bb44c0264aa70fe225589d645e35f321dbc5951f65e15fdd31bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3419a133ecc0bb44c0264aa70fe225589d645e35f321dbc5951f65e15fdd31bb->enter($__internal_3419a133ecc0bb44c0264aa70fe225589d645e35f321dbc5951f65e15fdd31bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_3419a133ecc0bb44c0264aa70fe225589d645e35f321dbc5951f65e15fdd31bb->leave($__internal_3419a133ecc0bb44c0264aa70fe225589d645e35f321dbc5951f65e15fdd31bb_prof);

        
        $__internal_0c065d735003c72a4b2dde7b0cb13349d660bcccb682b1e152030baeb5ef5e31->leave($__internal_0c065d735003c72a4b2dde7b0cb13349d660bcccb682b1e152030baeb5ef5e31_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6cc4b872aad4a80bde2408a016339cab378f15b1aefd1855e4c502313d4c98a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6cc4b872aad4a80bde2408a016339cab378f15b1aefd1855e4c502313d4c98a3->enter($__internal_6cc4b872aad4a80bde2408a016339cab378f15b1aefd1855e4c502313d4c98a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_3b0c8b5b2ce3060be3605ef454196d611c2230ccf30dbe144437776e1497760e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b0c8b5b2ce3060be3605ef454196d611c2230ccf30dbe144437776e1497760e->enter($__internal_3b0c8b5b2ce3060be3605ef454196d611c2230ccf30dbe144437776e1497760e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        
        $__internal_3b0c8b5b2ce3060be3605ef454196d611c2230ccf30dbe144437776e1497760e->leave($__internal_3b0c8b5b2ce3060be3605ef454196d611c2230ccf30dbe144437776e1497760e_prof);

        
        $__internal_6cc4b872aad4a80bde2408a016339cab378f15b1aefd1855e4c502313d4c98a3->leave($__internal_6cc4b872aad4a80bde2408a016339cab378f15b1aefd1855e4c502313d4c98a3_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  70 => 4,  61 => 3,  43 => 1,  33 => 3,  30 => 2,  28 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block title %}Demo Application{% endblock %}

{% block content %}
    {% block fos_user_content %}{% endblock %}
{% endblock %}", "@FOSUser/layout.html.twig", "/mnt/storage/private/public_html/bank/app/Resources/FOSUserBundle/views/layout.html.twig");
    }
}
