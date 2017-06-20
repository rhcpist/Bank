<?php

/* FOSUserBundle:Resetting:request_content.html.twig */
class __TwigTemplate_5ba11b64b760a9f7a010d98602977e6f2debf0b26c61faca75926b64d1263063 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fa228dc7adffd49102fcbcca9555afdba1b9c6bea727077432e7dff5fafe0af7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa228dc7adffd49102fcbcca9555afdba1b9c6bea727077432e7dff5fafe0af7->enter($__internal_fa228dc7adffd49102fcbcca9555afdba1b9c6bea727077432e7dff5fafe0af7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request_content.html.twig"));

        $__internal_75a37b3134d636e5178f0783980564ab015b1112b4fabb7c50faeb2597bda4eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75a37b3134d636e5178f0783980564ab015b1112b4fabb7c50faeb2597bda4eb->enter($__internal_75a37b3134d636e5178f0783980564ab015b1112b4fabb7c50faeb2597bda4eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request_content.html.twig"));

        // line 2
        echo "
<form action=\"";
        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_resetting_send_email");
        echo "\" method=\"POST\" class=\"fos_user_resetting_request\">
    <div>
        <label for=\"username\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.request.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
        <input type=\"text\" id=\"username\" name=\"username\" required=\"required\" />
    </div>
    <div>
        <input type=\"submit\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.request.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
</form>
";
        
        $__internal_fa228dc7adffd49102fcbcca9555afdba1b9c6bea727077432e7dff5fafe0af7->leave($__internal_fa228dc7adffd49102fcbcca9555afdba1b9c6bea727077432e7dff5fafe0af7_prof);

        
        $__internal_75a37b3134d636e5178f0783980564ab015b1112b4fabb7c50faeb2597bda4eb->leave($__internal_75a37b3134d636e5178f0783980564ab015b1112b4fabb7c50faeb2597bda4eb_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 9,  33 => 5,  28 => 3,  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<form action=\"{{ path('fos_user_resetting_send_email') }}\" method=\"POST\" class=\"fos_user_resetting_request\">
    <div>
        <label for=\"username\">{{ 'resetting.request.username'|trans }}</label>
        <input type=\"text\" id=\"username\" name=\"username\" required=\"required\" />
    </div>
    <div>
        <input type=\"submit\" value=\"{{ 'resetting.request.submit'|trans }}\" />
    </div>
</form>
", "FOSUserBundle:Resetting:request_content.html.twig", "/mnt/storage/private/public_html/bank/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/request_content.html.twig");
    }
}
