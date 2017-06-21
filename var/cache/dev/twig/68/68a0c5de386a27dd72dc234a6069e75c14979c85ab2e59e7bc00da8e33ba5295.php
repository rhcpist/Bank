<?php

/* FOSUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_dcc5353928a54c4d4a1afbdaa380989fbe919bcf0bbcedd3b8ea74bfc9e076f4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:check_email.html.twig", 1);
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
        $__internal_8726eb7b14280acb1a6458d623607d8de5d381540982728b0a3726ecf79e51ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8726eb7b14280acb1a6458d623607d8de5d381540982728b0a3726ecf79e51ee->enter($__internal_8726eb7b14280acb1a6458d623607d8de5d381540982728b0a3726ecf79e51ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $__internal_d984163765c0cca9546bf6a57d77f45ec9f082ff335e7b58aeee68d8f7763485 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d984163765c0cca9546bf6a57d77f45ec9f082ff335e7b58aeee68d8f7763485->enter($__internal_d984163765c0cca9546bf6a57d77f45ec9f082ff335e7b58aeee68d8f7763485_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8726eb7b14280acb1a6458d623607d8de5d381540982728b0a3726ecf79e51ee->leave($__internal_8726eb7b14280acb1a6458d623607d8de5d381540982728b0a3726ecf79e51ee_prof);

        
        $__internal_d984163765c0cca9546bf6a57d77f45ec9f082ff335e7b58aeee68d8f7763485->leave($__internal_d984163765c0cca9546bf6a57d77f45ec9f082ff335e7b58aeee68d8f7763485_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b5617a29fd96b363c3931cb4963b0492df13f899627235805657795f7e33e5f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5617a29fd96b363c3931cb4963b0492df13f899627235805657795f7e33e5f2->enter($__internal_b5617a29fd96b363c3931cb4963b0492df13f899627235805657795f7e33e5f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_eed05efcbb0d8d64034a3d5f3f65d4e63c53bbaa199fd577e687aba6c43fcd73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eed05efcbb0d8d64034a3d5f3f65d4e63c53bbaa199fd577e687aba6c43fcd73->enter($__internal_eed05efcbb0d8d64034a3d5f3f65d4e63c53bbaa199fd577e687aba6c43fcd73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) || array_key_exists("tokenLifetime", $context) ? $context["tokenLifetime"] : (function () { throw new Twig_Error_Runtime('Variable "tokenLifetime" does not exist.', 7, $this->getSourceContext()); })())), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_eed05efcbb0d8d64034a3d5f3f65d4e63c53bbaa199fd577e687aba6c43fcd73->leave($__internal_eed05efcbb0d8d64034a3d5f3f65d4e63c53bbaa199fd577e687aba6c43fcd73_prof);

        
        $__internal_b5617a29fd96b363c3931cb4963b0492df13f899627235805657795f7e33e5f2->leave($__internal_b5617a29fd96b363c3931cb4963b0492df13f899627235805657795f7e33e5f2_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 7,  49 => 6,  40 => 5,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
<p>
{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime})|nl2br }}
</p>
{% endblock %}
", "FOSUserBundle:Resetting:check_email.html.twig", "/mnt/storage/private/public_html/bank/app/Resources/FOSUserBundle/views/Resetting/check_email.html.twig");
    }
}
