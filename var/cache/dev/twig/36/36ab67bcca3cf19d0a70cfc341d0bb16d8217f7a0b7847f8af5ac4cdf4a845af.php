<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_07cefad9c8777c154eb58d300795ce928d85f904e6d98fcbf7fddb4789ae8586 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_0b92d2c2457040371e7c494398c710f6fc73208a849918d83c98f716f3c4198f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b92d2c2457040371e7c494398c710f6fc73208a849918d83c98f716f3c4198f->enter($__internal_0b92d2c2457040371e7c494398c710f6fc73208a849918d83c98f716f3c4198f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $__internal_37a106daec517185e8f70dc1d4889fd61ed92766df0c1d80150107834c3f613b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37a106daec517185e8f70dc1d4889fd61ed92766df0c1d80150107834c3f613b->enter($__internal_37a106daec517185e8f70dc1d4889fd61ed92766df0c1d80150107834c3f613b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0b92d2c2457040371e7c494398c710f6fc73208a849918d83c98f716f3c4198f->leave($__internal_0b92d2c2457040371e7c494398c710f6fc73208a849918d83c98f716f3c4198f_prof);

        
        $__internal_37a106daec517185e8f70dc1d4889fd61ed92766df0c1d80150107834c3f613b->leave($__internal_37a106daec517185e8f70dc1d4889fd61ed92766df0c1d80150107834c3f613b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5a017c2ac60f3e069a1dead7131b17c0bb09422baa2140c4239ed210fe266f19 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a017c2ac60f3e069a1dead7131b17c0bb09422baa2140c4239ed210fe266f19->enter($__internal_5a017c2ac60f3e069a1dead7131b17c0bb09422baa2140c4239ed210fe266f19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_db22f22f9462d533bba8dde852688865ab374c8678f6fe3393b9341065391dd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db22f22f9462d533bba8dde852688865ab374c8678f6fe3393b9341065391dd8->enter($__internal_db22f22f9462d533bba8dde852688865ab374c8678f6fe3393b9341065391dd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_db22f22f9462d533bba8dde852688865ab374c8678f6fe3393b9341065391dd8->leave($__internal_db22f22f9462d533bba8dde852688865ab374c8678f6fe3393b9341065391dd8_prof);

        
        $__internal_5a017c2ac60f3e069a1dead7131b17c0bb09422baa2140c4239ed210fe266f19->leave($__internal_5a017c2ac60f3e069a1dead7131b17c0bb09422baa2140c4239ed210fe266f19_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:edit.html.twig", "/mnt/storage/private/public_html/bank/app/Resources/FOSUserBundle/views/Group/edit.html.twig");
    }
}
