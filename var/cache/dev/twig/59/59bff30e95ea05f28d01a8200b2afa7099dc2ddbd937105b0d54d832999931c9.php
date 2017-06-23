<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_17b85ea572dda0118d98cdf3f24e02b23898a02e846ffa472dd161b067a7a48e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_10e8f57ec1ca1091e54012b11d4ecb89b8a186bee90fcf95677f1876d8fa73fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10e8f57ec1ca1091e54012b11d4ecb89b8a186bee90fcf95677f1876d8fa73fe->enter($__internal_10e8f57ec1ca1091e54012b11d4ecb89b8a186bee90fcf95677f1876d8fa73fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $__internal_b54f3e3bc0fa62f1ee58953f14314cb7b1087613c1f6a8475c0d96cbcf6ae398 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b54f3e3bc0fa62f1ee58953f14314cb7b1087613c1f6a8475c0d96cbcf6ae398->enter($__internal_b54f3e3bc0fa62f1ee58953f14314cb7b1087613c1f6a8475c0d96cbcf6ae398_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_10e8f57ec1ca1091e54012b11d4ecb89b8a186bee90fcf95677f1876d8fa73fe->leave($__internal_10e8f57ec1ca1091e54012b11d4ecb89b8a186bee90fcf95677f1876d8fa73fe_prof);

        
        $__internal_b54f3e3bc0fa62f1ee58953f14314cb7b1087613c1f6a8475c0d96cbcf6ae398->leave($__internal_b54f3e3bc0fa62f1ee58953f14314cb7b1087613c1f6a8475c0d96cbcf6ae398_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6e71449af528607e9487699628a8bba996b545ccf7ef658820994db4a4b846a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e71449af528607e9487699628a8bba996b545ccf7ef658820994db4a4b846a6->enter($__internal_6e71449af528607e9487699628a8bba996b545ccf7ef658820994db4a4b846a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_9dff302289874a93ebe4cd09a62229899905274ee6e8b3a1abcd768ed8835212 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9dff302289874a93ebe4cd09a62229899905274ee6e8b3a1abcd768ed8835212->enter($__internal_9dff302289874a93ebe4cd09a62229899905274ee6e8b3a1abcd768ed8835212_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_9dff302289874a93ebe4cd09a62229899905274ee6e8b3a1abcd768ed8835212->leave($__internal_9dff302289874a93ebe4cd09a62229899905274ee6e8b3a1abcd768ed8835212_prof);

        
        $__internal_6e71449af528607e9487699628a8bba996b545ccf7ef658820994db4a4b846a6->leave($__internal_6e71449af528607e9487699628a8bba996b545ccf7ef658820994db4a4b846a6_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:edit.html.twig", "/mnt/storage/private/public_html/bank/app/Resources/FOSUserBundle/views/Profile/edit.html.twig");
    }
}
