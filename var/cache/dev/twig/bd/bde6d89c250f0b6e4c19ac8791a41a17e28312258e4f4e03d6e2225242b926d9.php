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
        $__internal_5568986b094db7c4f34b7c77d98f686871afc6609ba2940cbcc6759382d83e01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5568986b094db7c4f34b7c77d98f686871afc6609ba2940cbcc6759382d83e01->enter($__internal_5568986b094db7c4f34b7c77d98f686871afc6609ba2940cbcc6759382d83e01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request_content.html.twig"));

        $__internal_585d9a249a03150a3e045b94aa7b4f5b855fd6a95e7a1e3ad103ff2bfbb668b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_585d9a249a03150a3e045b94aa7b4f5b855fd6a95e7a1e3ad103ff2bfbb668b7->enter($__internal_585d9a249a03150a3e045b94aa7b4f5b855fd6a95e7a1e3ad103ff2bfbb668b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request_content.html.twig"));

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
        
        $__internal_5568986b094db7c4f34b7c77d98f686871afc6609ba2940cbcc6759382d83e01->leave($__internal_5568986b094db7c4f34b7c77d98f686871afc6609ba2940cbcc6759382d83e01_prof);

        
        $__internal_585d9a249a03150a3e045b94aa7b4f5b855fd6a95e7a1e3ad103ff2bfbb668b7->leave($__internal_585d9a249a03150a3e045b94aa7b4f5b855fd6a95e7a1e3ad103ff2bfbb668b7_prof);

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
