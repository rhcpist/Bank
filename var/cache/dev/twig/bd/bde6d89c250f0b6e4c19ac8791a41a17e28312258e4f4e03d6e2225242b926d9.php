<?php

/* FOSUserBundle:Resetting:request_content.html.twig */
class __TwigTemplate_043d7bf40241877be88ab52a15ec1c8f7e034a8b9c83d28d2f0ad40e35cb6028 extends Twig_Template
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
        $__internal_f4f065aa6cb8e79674e0544ae11a48105a38e857f579352497344e1f400ca871 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4f065aa6cb8e79674e0544ae11a48105a38e857f579352497344e1f400ca871->enter($__internal_f4f065aa6cb8e79674e0544ae11a48105a38e857f579352497344e1f400ca871_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request_content.html.twig"));

        $__internal_7e063c549a5dfc5cf9e403561068408f1df77dc3f50690ca26daea98f4786748 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e063c549a5dfc5cf9e403561068408f1df77dc3f50690ca26daea98f4786748->enter($__internal_7e063c549a5dfc5cf9e403561068408f1df77dc3f50690ca26daea98f4786748_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request_content.html.twig"));

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
        
        $__internal_f4f065aa6cb8e79674e0544ae11a48105a38e857f579352497344e1f400ca871->leave($__internal_f4f065aa6cb8e79674e0544ae11a48105a38e857f579352497344e1f400ca871_prof);

        
        $__internal_7e063c549a5dfc5cf9e403561068408f1df77dc3f50690ca26daea98f4786748->leave($__internal_7e063c549a5dfc5cf9e403561068408f1df77dc3f50690ca26daea98f4786748_prof);

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
", "FOSUserBundle:Resetting:request_content.html.twig", "/mnt/storage/private/public_html/bank/app/Resources/FOSUserBundle/views/Resetting/request_content.html.twig");
    }
}
