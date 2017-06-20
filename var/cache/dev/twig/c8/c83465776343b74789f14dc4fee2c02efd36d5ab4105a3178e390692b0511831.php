<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_2de2f0990c4bfd2fbdbedcdeaf0eb8ce53eef56aee635852ad24345f90d83cf2 extends Twig_Template
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
        $__internal_f5718bfeb9fe79ea551d11b8d4bbd598b01d5627f528362c4dd932b1168229fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5718bfeb9fe79ea551d11b8d4bbd598b01d5627f528362c4dd932b1168229fa->enter($__internal_f5718bfeb9fe79ea551d11b8d4bbd598b01d5627f528362c4dd932b1168229fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $__internal_3a1e8788e27639eb4c08b5dca4e10a7ae78a42d350f27764346d42896eca9563 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a1e8788e27639eb4c08b5dca4e10a7ae78a42d350f27764346d42896eca9563->enter($__internal_3a1e8788e27639eb4c08b5dca4e10a7ae78a42d350f27764346d42896eca9563_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f5718bfeb9fe79ea551d11b8d4bbd598b01d5627f528362c4dd932b1168229fa->leave($__internal_f5718bfeb9fe79ea551d11b8d4bbd598b01d5627f528362c4dd932b1168229fa_prof);

        
        $__internal_3a1e8788e27639eb4c08b5dca4e10a7ae78a42d350f27764346d42896eca9563->leave($__internal_3a1e8788e27639eb4c08b5dca4e10a7ae78a42d350f27764346d42896eca9563_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3ece2c2b109677b1da0b6739f98b7667756d2120625b602f7a31ad80dcc49247 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ece2c2b109677b1da0b6739f98b7667756d2120625b602f7a31ad80dcc49247->enter($__internal_3ece2c2b109677b1da0b6739f98b7667756d2120625b602f7a31ad80dcc49247_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_06053a59b305cbbb7a18049bdd814fd5a923cc7400e9404d47362d023b69c5ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06053a59b305cbbb7a18049bdd814fd5a923cc7400e9404d47362d023b69c5ea->enter($__internal_06053a59b305cbbb7a18049bdd814fd5a923cc7400e9404d47362d023b69c5ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_06053a59b305cbbb7a18049bdd814fd5a923cc7400e9404d47362d023b69c5ea->leave($__internal_06053a59b305cbbb7a18049bdd814fd5a923cc7400e9404d47362d023b69c5ea_prof);

        
        $__internal_3ece2c2b109677b1da0b6739f98b7667756d2120625b602f7a31ad80dcc49247->leave($__internal_3ece2c2b109677b1da0b6739f98b7667756d2120625b602f7a31ad80dcc49247_prof);

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
", "FOSUserBundle:Group:new.html.twig", "/mnt/storage/private/public_html/bank/vendor/friendsofsymfony/user-bundle/Resources/views/Group/new.html.twig");
    }
}
