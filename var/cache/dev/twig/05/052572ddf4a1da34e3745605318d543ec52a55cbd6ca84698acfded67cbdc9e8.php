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
        $__internal_1a285ac1d5fd135104826e5beed67d0ac09ef3afc31fb3921ec3c7668ae43fd5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a285ac1d5fd135104826e5beed67d0ac09ef3afc31fb3921ec3c7668ae43fd5->enter($__internal_1a285ac1d5fd135104826e5beed67d0ac09ef3afc31fb3921ec3c7668ae43fd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $__internal_29a4a55f36a9fa9ecd2aa79070c34369dc2d1ca9b12243bc052eff3e61b87f0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29a4a55f36a9fa9ecd2aa79070c34369dc2d1ca9b12243bc052eff3e61b87f0b->enter($__internal_29a4a55f36a9fa9ecd2aa79070c34369dc2d1ca9b12243bc052eff3e61b87f0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1a285ac1d5fd135104826e5beed67d0ac09ef3afc31fb3921ec3c7668ae43fd5->leave($__internal_1a285ac1d5fd135104826e5beed67d0ac09ef3afc31fb3921ec3c7668ae43fd5_prof);

        
        $__internal_29a4a55f36a9fa9ecd2aa79070c34369dc2d1ca9b12243bc052eff3e61b87f0b->leave($__internal_29a4a55f36a9fa9ecd2aa79070c34369dc2d1ca9b12243bc052eff3e61b87f0b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f83d59426de74c4277d8ac803c9589ca53d85bc265e7dada30f71ea35f489c2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f83d59426de74c4277d8ac803c9589ca53d85bc265e7dada30f71ea35f489c2d->enter($__internal_f83d59426de74c4277d8ac803c9589ca53d85bc265e7dada30f71ea35f489c2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_85ebc842c442a548137d815dfe105098eb12c343ed1cc002e3eb104450862073 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85ebc842c442a548137d815dfe105098eb12c343ed1cc002e3eb104450862073->enter($__internal_85ebc842c442a548137d815dfe105098eb12c343ed1cc002e3eb104450862073_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_85ebc842c442a548137d815dfe105098eb12c343ed1cc002e3eb104450862073->leave($__internal_85ebc842c442a548137d815dfe105098eb12c343ed1cc002e3eb104450862073_prof);

        
        $__internal_f83d59426de74c4277d8ac803c9589ca53d85bc265e7dada30f71ea35f489c2d->leave($__internal_f83d59426de74c4277d8ac803c9589ca53d85bc265e7dada30f71ea35f489c2d_prof);

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
