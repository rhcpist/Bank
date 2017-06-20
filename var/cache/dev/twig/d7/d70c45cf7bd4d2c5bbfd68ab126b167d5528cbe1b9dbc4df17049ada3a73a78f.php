<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_bd8040b56ef363dbd564786eaffbd034fa5e9b755d139a59eebb5ac1e67ed2c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_fb381da27e95964c36f360bbbd62931ff6915f83fea861718af22ff519956dd2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb381da27e95964c36f360bbbd62931ff6915f83fea861718af22ff519956dd2->enter($__internal_fb381da27e95964c36f360bbbd62931ff6915f83fea861718af22ff519956dd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $__internal_91fc915102f42d298c24b800bb0adccd011bcbd1987fdfbf6ed5799c3d6f9fdc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91fc915102f42d298c24b800bb0adccd011bcbd1987fdfbf6ed5799c3d6f9fdc->enter($__internal_91fc915102f42d298c24b800bb0adccd011bcbd1987fdfbf6ed5799c3d6f9fdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fb381da27e95964c36f360bbbd62931ff6915f83fea861718af22ff519956dd2->leave($__internal_fb381da27e95964c36f360bbbd62931ff6915f83fea861718af22ff519956dd2_prof);

        
        $__internal_91fc915102f42d298c24b800bb0adccd011bcbd1987fdfbf6ed5799c3d6f9fdc->leave($__internal_91fc915102f42d298c24b800bb0adccd011bcbd1987fdfbf6ed5799c3d6f9fdc_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_db618d868dc657f15dbfb43773f050ece90dedc19b1ff38a35879e243b2e308c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db618d868dc657f15dbfb43773f050ece90dedc19b1ff38a35879e243b2e308c->enter($__internal_db618d868dc657f15dbfb43773f050ece90dedc19b1ff38a35879e243b2e308c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_eed7cea01c742db08f3b2d747b10285de59316f2de610b6405fb764ebd6701eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eed7cea01c742db08f3b2d747b10285de59316f2de610b6405fb764ebd6701eb->enter($__internal_eed7cea01c742db08f3b2d747b10285de59316f2de610b6405fb764ebd6701eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_eed7cea01c742db08f3b2d747b10285de59316f2de610b6405fb764ebd6701eb->leave($__internal_eed7cea01c742db08f3b2d747b10285de59316f2de610b6405fb764ebd6701eb_prof);

        
        $__internal_db618d868dc657f15dbfb43773f050ece90dedc19b1ff38a35879e243b2e308c->leave($__internal_db618d868dc657f15dbfb43773f050ece90dedc19b1ff38a35879e243b2e308c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:request.html.twig", "/mnt/storage/private/public_html/bank/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/request.html.twig");
    }
}
