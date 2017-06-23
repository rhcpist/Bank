<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_4e760b62dcc6956e5b94a4e9a7267d087861b2e21214a43ad44e85c7b0b80e9b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
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
        $__internal_f3bb1953ba3d50c5925565ee6fae4fcb6f4f55be6ed94997f3df903d44a07527 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3bb1953ba3d50c5925565ee6fae4fcb6f4f55be6ed94997f3df903d44a07527->enter($__internal_f3bb1953ba3d50c5925565ee6fae4fcb6f4f55be6ed94997f3df903d44a07527_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $__internal_30a8edca0f25510a664fb627a8d02527cd5c80731adb2b979309160774f5e27b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30a8edca0f25510a664fb627a8d02527cd5c80731adb2b979309160774f5e27b->enter($__internal_30a8edca0f25510a664fb627a8d02527cd5c80731adb2b979309160774f5e27b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f3bb1953ba3d50c5925565ee6fae4fcb6f4f55be6ed94997f3df903d44a07527->leave($__internal_f3bb1953ba3d50c5925565ee6fae4fcb6f4f55be6ed94997f3df903d44a07527_prof);

        
        $__internal_30a8edca0f25510a664fb627a8d02527cd5c80731adb2b979309160774f5e27b->leave($__internal_30a8edca0f25510a664fb627a8d02527cd5c80731adb2b979309160774f5e27b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6c18de77317fa5aa3ac33b45b907f17fee8b652381ebd8d06c9b8d3c62746946 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c18de77317fa5aa3ac33b45b907f17fee8b652381ebd8d06c9b8d3c62746946->enter($__internal_6c18de77317fa5aa3ac33b45b907f17fee8b652381ebd8d06c9b8d3c62746946_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_47f4336cad755346becccdabd950cb3fe8dbf4aca1f233cac6e8312ce8569583 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47f4336cad755346becccdabd950cb3fe8dbf4aca1f233cac6e8312ce8569583->enter($__internal_47f4336cad755346becccdabd950cb3fe8dbf4aca1f233cac6e8312ce8569583_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_47f4336cad755346becccdabd950cb3fe8dbf4aca1f233cac6e8312ce8569583->leave($__internal_47f4336cad755346becccdabd950cb3fe8dbf4aca1f233cac6e8312ce8569583_prof);

        
        $__internal_6c18de77317fa5aa3ac33b45b907f17fee8b652381ebd8d06c9b8d3c62746946->leave($__internal_6c18de77317fa5aa3ac33b45b907f17fee8b652381ebd8d06c9b8d3c62746946_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
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
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "FOSUserBundle:Security:login.html.twig", "/mnt/storage/private/public_html/bank/app/Resources/FOSUserBundle/views/Security/login.html.twig");
    }
}
