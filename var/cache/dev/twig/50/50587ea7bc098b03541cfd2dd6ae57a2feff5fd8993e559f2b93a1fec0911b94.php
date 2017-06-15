<?php

/* base.html.twig */
class __TwigTemplate_edbe3be9d4dc3618bede9aef6240e30e2e40cf8d3078397ea0f7b10a9a5a9da4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_45679ee3638e04f22b630808a95e4eb56e8e4e058ea55e77b44f6cc95836d0c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45679ee3638e04f22b630808a95e4eb56e8e4e058ea55e77b44f6cc95836d0c3->enter($__internal_45679ee3638e04f22b630808a95e4eb56e8e4e058ea55e77b44f6cc95836d0c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_58bd8ff8dd2616a48553b8b8b0ffc8fcab6e841d57f15dfb3c3c31d905090b10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58bd8ff8dd2616a48553b8b8b0ffc8fcab6e841d57f15dfb3c3c31d905090b10->enter($__internal_58bd8ff8dd2616a48553b8b8b0ffc8fcab6e841d57f15dfb3c3c31d905090b10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_45679ee3638e04f22b630808a95e4eb56e8e4e058ea55e77b44f6cc95836d0c3->leave($__internal_45679ee3638e04f22b630808a95e4eb56e8e4e058ea55e77b44f6cc95836d0c3_prof);

        
        $__internal_58bd8ff8dd2616a48553b8b8b0ffc8fcab6e841d57f15dfb3c3c31d905090b10->leave($__internal_58bd8ff8dd2616a48553b8b8b0ffc8fcab6e841d57f15dfb3c3c31d905090b10_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_5c42d9604ebfba9879dda01a26ea9a1d640cdc92f0902d96d24271faec20d594 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c42d9604ebfba9879dda01a26ea9a1d640cdc92f0902d96d24271faec20d594->enter($__internal_5c42d9604ebfba9879dda01a26ea9a1d640cdc92f0902d96d24271faec20d594_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_560b079af5c612c047c87131146d4966b058d129f68a5cfb7cf098eb86a73737 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_560b079af5c612c047c87131146d4966b058d129f68a5cfb7cf098eb86a73737->enter($__internal_560b079af5c612c047c87131146d4966b058d129f68a5cfb7cf098eb86a73737_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_560b079af5c612c047c87131146d4966b058d129f68a5cfb7cf098eb86a73737->leave($__internal_560b079af5c612c047c87131146d4966b058d129f68a5cfb7cf098eb86a73737_prof);

        
        $__internal_5c42d9604ebfba9879dda01a26ea9a1d640cdc92f0902d96d24271faec20d594->leave($__internal_5c42d9604ebfba9879dda01a26ea9a1d640cdc92f0902d96d24271faec20d594_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_35653163d0473b7f86b654bd52f647c470b741f90412fce854e4e31369341850 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35653163d0473b7f86b654bd52f647c470b741f90412fce854e4e31369341850->enter($__internal_35653163d0473b7f86b654bd52f647c470b741f90412fce854e4e31369341850_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_fde6fe5d1357bd108762332314b34bcf481ced8ef20afab3d8e8ae9174dfdd73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fde6fe5d1357bd108762332314b34bcf481ced8ef20afab3d8e8ae9174dfdd73->enter($__internal_fde6fe5d1357bd108762332314b34bcf481ced8ef20afab3d8e8ae9174dfdd73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_fde6fe5d1357bd108762332314b34bcf481ced8ef20afab3d8e8ae9174dfdd73->leave($__internal_fde6fe5d1357bd108762332314b34bcf481ced8ef20afab3d8e8ae9174dfdd73_prof);

        
        $__internal_35653163d0473b7f86b654bd52f647c470b741f90412fce854e4e31369341850->leave($__internal_35653163d0473b7f86b654bd52f647c470b741f90412fce854e4e31369341850_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_b46c25c07f1929bc278b217322ca427e03413f7c5622c64705d8ee4b3696f7ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b46c25c07f1929bc278b217322ca427e03413f7c5622c64705d8ee4b3696f7ee->enter($__internal_b46c25c07f1929bc278b217322ca427e03413f7c5622c64705d8ee4b3696f7ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5b2dc12d27f1a0a57f390cfb5161f059e3f962e3dc1efda9965a49d743357c03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b2dc12d27f1a0a57f390cfb5161f059e3f962e3dc1efda9965a49d743357c03->enter($__internal_5b2dc12d27f1a0a57f390cfb5161f059e3f962e3dc1efda9965a49d743357c03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_5b2dc12d27f1a0a57f390cfb5161f059e3f962e3dc1efda9965a49d743357c03->leave($__internal_5b2dc12d27f1a0a57f390cfb5161f059e3f962e3dc1efda9965a49d743357c03_prof);

        
        $__internal_b46c25c07f1929bc278b217322ca427e03413f7c5622c64705d8ee4b3696f7ee->leave($__internal_b46c25c07f1929bc278b217322ca427e03413f7c5622c64705d8ee4b3696f7ee_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0f1a6df0f43724bb82017a87877bdc8e4462200adcc5e5efa970cde0b08b0170 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f1a6df0f43724bb82017a87877bdc8e4462200adcc5e5efa970cde0b08b0170->enter($__internal_0f1a6df0f43724bb82017a87877bdc8e4462200adcc5e5efa970cde0b08b0170_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_d4328bca393672bea21623bbb9980573966094c28d755d26527dbe9a138a906d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4328bca393672bea21623bbb9980573966094c28d755d26527dbe9a138a906d->enter($__internal_d4328bca393672bea21623bbb9980573966094c28d755d26527dbe9a138a906d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_d4328bca393672bea21623bbb9980573966094c28d755d26527dbe9a138a906d->leave($__internal_d4328bca393672bea21623bbb9980573966094c28d755d26527dbe9a138a906d_prof);

        
        $__internal_0f1a6df0f43724bb82017a87877bdc8e4462200adcc5e5efa970cde0b08b0170->leave($__internal_0f1a6df0f43724bb82017a87877bdc8e4462200adcc5e5efa970cde0b08b0170_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/mnt/storage/private/public_html/bank/app/Resources/views/base.html.twig");
    }
}
