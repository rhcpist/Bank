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
        $__internal_6ec05c4259e9771bfd9311fcfbfdd69c7060a585526c241dfa118a4497ab6f91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ec05c4259e9771bfd9311fcfbfdd69c7060a585526c241dfa118a4497ab6f91->enter($__internal_6ec05c4259e9771bfd9311fcfbfdd69c7060a585526c241dfa118a4497ab6f91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $__internal_4f9e994358ecbc25d640a6ad6bd2940d0d2aeb57d1622d8e1002a1305ba2a6e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f9e994358ecbc25d640a6ad6bd2940d0d2aeb57d1622d8e1002a1305ba2a6e9->enter($__internal_4f9e994358ecbc25d640a6ad6bd2940d0d2aeb57d1622d8e1002a1305ba2a6e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6ec05c4259e9771bfd9311fcfbfdd69c7060a585526c241dfa118a4497ab6f91->leave($__internal_6ec05c4259e9771bfd9311fcfbfdd69c7060a585526c241dfa118a4497ab6f91_prof);

        
        $__internal_4f9e994358ecbc25d640a6ad6bd2940d0d2aeb57d1622d8e1002a1305ba2a6e9->leave($__internal_4f9e994358ecbc25d640a6ad6bd2940d0d2aeb57d1622d8e1002a1305ba2a6e9_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8968045a7baa42762661408c2cf78dab2c7d731d15e8490dec9c39af7cf54f53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8968045a7baa42762661408c2cf78dab2c7d731d15e8490dec9c39af7cf54f53->enter($__internal_8968045a7baa42762661408c2cf78dab2c7d731d15e8490dec9c39af7cf54f53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_4208052ac5212f8af1dc2e5a92d360fa2505304ba8042d48d44609a07f1871bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4208052ac5212f8af1dc2e5a92d360fa2505304ba8042d48d44609a07f1871bb->enter($__internal_4208052ac5212f8af1dc2e5a92d360fa2505304ba8042d48d44609a07f1871bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_4208052ac5212f8af1dc2e5a92d360fa2505304ba8042d48d44609a07f1871bb->leave($__internal_4208052ac5212f8af1dc2e5a92d360fa2505304ba8042d48d44609a07f1871bb_prof);

        
        $__internal_8968045a7baa42762661408c2cf78dab2c7d731d15e8490dec9c39af7cf54f53->leave($__internal_8968045a7baa42762661408c2cf78dab2c7d731d15e8490dec9c39af7cf54f53_prof);

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
