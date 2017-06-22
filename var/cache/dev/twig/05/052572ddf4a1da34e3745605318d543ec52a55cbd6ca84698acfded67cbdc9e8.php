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
        $__internal_aa3cb7199d9a7f6734f882a24ed513dbc10c29207cc99a4584b20dcddcc159fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa3cb7199d9a7f6734f882a24ed513dbc10c29207cc99a4584b20dcddcc159fb->enter($__internal_aa3cb7199d9a7f6734f882a24ed513dbc10c29207cc99a4584b20dcddcc159fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $__internal_c8d27179675e9aa3f399f5e93a0f43729ea0af2fcedf1106b6d1e137c6a359a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8d27179675e9aa3f399f5e93a0f43729ea0af2fcedf1106b6d1e137c6a359a6->enter($__internal_c8d27179675e9aa3f399f5e93a0f43729ea0af2fcedf1106b6d1e137c6a359a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aa3cb7199d9a7f6734f882a24ed513dbc10c29207cc99a4584b20dcddcc159fb->leave($__internal_aa3cb7199d9a7f6734f882a24ed513dbc10c29207cc99a4584b20dcddcc159fb_prof);

        
        $__internal_c8d27179675e9aa3f399f5e93a0f43729ea0af2fcedf1106b6d1e137c6a359a6->leave($__internal_c8d27179675e9aa3f399f5e93a0f43729ea0af2fcedf1106b6d1e137c6a359a6_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d126e99e0c91aa9bd209c7e37977ff5c984f5990c45ef666ec5a7e8cb63d03f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d126e99e0c91aa9bd209c7e37977ff5c984f5990c45ef666ec5a7e8cb63d03f4->enter($__internal_d126e99e0c91aa9bd209c7e37977ff5c984f5990c45ef666ec5a7e8cb63d03f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_f343ea5c3b91878f5038a662832038029483750908e6169fa298d1205f832eba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f343ea5c3b91878f5038a662832038029483750908e6169fa298d1205f832eba->enter($__internal_f343ea5c3b91878f5038a662832038029483750908e6169fa298d1205f832eba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_f343ea5c3b91878f5038a662832038029483750908e6169fa298d1205f832eba->leave($__internal_f343ea5c3b91878f5038a662832038029483750908e6169fa298d1205f832eba_prof);

        
        $__internal_d126e99e0c91aa9bd209c7e37977ff5c984f5990c45ef666ec5a7e8cb63d03f4->leave($__internal_d126e99e0c91aa9bd209c7e37977ff5c984f5990c45ef666ec5a7e8cb63d03f4_prof);

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
