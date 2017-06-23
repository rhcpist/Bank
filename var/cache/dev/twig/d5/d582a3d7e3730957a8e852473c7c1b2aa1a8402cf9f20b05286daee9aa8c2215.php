<?php

/* FOSUserBundle:Security:login_content.html.twig */
class __TwigTemplate_fca6b4330c593cbce9c393fe64e31e825d2d51658caf499d4816f9d08ac5c021 extends Twig_Template
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
        $__internal_f59c4c4012e9d86066f959a023f36249121eef89a68c4252cc75bbc5517b68c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f59c4c4012e9d86066f959a023f36249121eef89a68c4252cc75bbc5517b68c5->enter($__internal_f59c4c4012e9d86066f959a023f36249121eef89a68c4252cc75bbc5517b68c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login_content.html.twig"));

        $__internal_9e7ddb27bde78aeaf717ab4e56d16613f3893175664caf0e9a0b521285bf6230 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e7ddb27bde78aeaf717ab4e56d16613f3893175664caf0e9a0b521285bf6230->enter($__internal_9e7ddb27bde78aeaf717ab4e56d16613f3893175664caf0e9a0b521285bf6230_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 3, $this->getSourceContext()); })())) {
            // line 4
            echo "    <div class=\"alert alert-danger\" role=\"alert\">
        ";
            // line 5
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 5, $this->getSourceContext()); })()), "messageKey", array()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 5, $this->getSourceContext()); })()), "messageData", array()), "security"), "html", null, true);
            echo "
    </div>
";
        }
        // line 8
        echo "
<form action=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\" class=\"form-signin\">
    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) || array_key_exists("csrf_token", $context) ? $context["csrf_token"] : (function () { throw new Twig_Error_Runtime('Variable "csrf_token" does not exist.', 10, $this->getSourceContext()); })()), "html", null, true);
        echo "\" />

    <h2 class=\"form-signin-heading\">Please sign in</h2>
    <label for=\"username\" class=\"sr-only\">";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new Twig_Error_Runtime('Variable "last_username" does not exist.', 14, $this->getSourceContext()); })()), "html", null, true);
        echo "\" placeholder=\"Email address\" class=\"form-control\" required autofocus />
    <label for=\"password\" class=\"sr-only\">";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
    <input type=\"password\" id=\"password\" name=\"_password\" class=\"form-control\" placeholder=\"Password\" required />
    <div class=\"checkbox\">
        <label>
            <input type=\"checkbox\"
                   id=\"remember_me\"
                   name=\"_remember_me\"
                   value=\"on\" /> ";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "
        </label>
    </div>
    <input type=\"submit\"
           class=\"btn btn-lg btn-primary btn-block\"
           id=\"_submit\"
           name=\"_submit\"
           value=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
</form>

<style>
    body {
        padding-top: 40px;
        padding-bottom: 40px;
        background-color: #eee;
    }

    .form-signin {
        max-width: 330px;
        padding: 15px;
        margin: 0 auto;
    }

    .form-signin .form-signin-heading,
    .form-signin .checkbox {
        margin-bottom: 10px;
    }

    .form-signin .checkbox {
        font-weight: normal;
    }

    .form-signin .form-control {
        position: relative;
        height: auto;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
        padding: 10px;
        font-size: 16px;
    }

    .form-signin .form-control:focus {
        z-index: 2;
    }

    .form-signin input[type=\"email\"] {
        margin-bottom: -1px;
        border-bottom-right-radius: 0;
        border-bottom-left-radius: 0;
    }

    .form-signin input[type=\"password\"] {
        margin-bottom: 10px;
        border-top-left-radius: 0;
        border-top-right-radius: 0;
    }
</style>";
        
        $__internal_f59c4c4012e9d86066f959a023f36249121eef89a68c4252cc75bbc5517b68c5->leave($__internal_f59c4c4012e9d86066f959a023f36249121eef89a68c4252cc75bbc5517b68c5_prof);

        
        $__internal_9e7ddb27bde78aeaf717ab4e56d16613f3893175664caf0e9a0b521285bf6230->leave($__internal_9e7ddb27bde78aeaf717ab4e56d16613f3893175664caf0e9a0b521285bf6230_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 29,  70 => 22,  60 => 15,  56 => 14,  52 => 13,  46 => 10,  42 => 9,  39 => 8,  33 => 5,  30 => 4,  28 => 3,  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

{% if error %}
    <div class=\"alert alert-danger\" role=\"alert\">
        {{ error.messageKey|trans(error.messageData, 'security') }}
    </div>
{% endif %}

<form action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\" class=\"form-signin\">
    <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />

    <h2 class=\"form-signin-heading\">Please sign in</h2>
    <label for=\"username\" class=\"sr-only\">{{ 'security.login.username'|trans }}</label>
    <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" placeholder=\"Email address\" class=\"form-control\" required autofocus />
    <label for=\"password\" class=\"sr-only\">{{ 'security.login.password'|trans }}</label>
    <input type=\"password\" id=\"password\" name=\"_password\" class=\"form-control\" placeholder=\"Password\" required />
    <div class=\"checkbox\">
        <label>
            <input type=\"checkbox\"
                   id=\"remember_me\"
                   name=\"_remember_me\"
                   value=\"on\" /> {{ 'security.login.remember_me'|trans }}
        </label>
    </div>
    <input type=\"submit\"
           class=\"btn btn-lg btn-primary btn-block\"
           id=\"_submit\"
           name=\"_submit\"
           value=\"{{ 'security.login.submit'|trans }}\" />
</form>

<style>
    body {
        padding-top: 40px;
        padding-bottom: 40px;
        background-color: #eee;
    }

    .form-signin {
        max-width: 330px;
        padding: 15px;
        margin: 0 auto;
    }

    .form-signin .form-signin-heading,
    .form-signin .checkbox {
        margin-bottom: 10px;
    }

    .form-signin .checkbox {
        font-weight: normal;
    }

    .form-signin .form-control {
        position: relative;
        height: auto;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
        padding: 10px;
        font-size: 16px;
    }

    .form-signin .form-control:focus {
        z-index: 2;
    }

    .form-signin input[type=\"email\"] {
        margin-bottom: -1px;
        border-bottom-right-radius: 0;
        border-bottom-left-radius: 0;
    }

    .form-signin input[type=\"password\"] {
        margin-bottom: 10px;
        border-top-left-radius: 0;
        border-top-right-radius: 0;
    }
</style>", "FOSUserBundle:Security:login_content.html.twig", "/mnt/storage/private/public_html/bank/app/Resources/FOSUserBundle/views/Security/login_content.html.twig");
    }
}
