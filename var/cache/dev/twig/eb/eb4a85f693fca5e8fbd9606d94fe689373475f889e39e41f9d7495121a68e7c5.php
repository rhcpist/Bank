<?php

/* FOSUserBundle:ChangePassword:change_password_content.html.twig */
class __TwigTemplate_c199990556729ec98b70b4d04ba9f7a39b9f263f715291c05ddc60d91828ef98 extends Twig_Template
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
        $__internal_9b2173a2a5218564dc4e1f072567d178b921b905275cb8e42b825ad8a438f156 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b2173a2a5218564dc4e1f072567d178b921b905275cb8e42b825ad8a438f156->enter($__internal_9b2173a2a5218564dc4e1f072567d178b921b905275cb8e42b825ad8a438f156_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password_content.html.twig"));

        $__internal_cfd96f078acf4fc8403c7828fa07826a920ba84793f9ba40090134ed0c9e277b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfd96f078acf4fc8403c7828fa07826a920ba84793f9ba40090134ed0c9e277b->enter($__internal_cfd96f078acf4fc8403c7828fa07826a920ba84793f9ba40090134ed0c9e277b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 3, $this->getSourceContext()); })()), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_change_password"), "attr" => array("class" => "fos_user_change_password")));
        echo "
    ";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 4, $this->getSourceContext()); })()), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("change_password.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 8, $this->getSourceContext()); })()), 'form_end');
        echo "
";
        
        $__internal_9b2173a2a5218564dc4e1f072567d178b921b905275cb8e42b825ad8a438f156->leave($__internal_9b2173a2a5218564dc4e1f072567d178b921b905275cb8e42b825ad8a438f156_prof);

        
        $__internal_cfd96f078acf4fc8403c7828fa07826a920ba84793f9ba40090134ed0c9e277b->leave($__internal_cfd96f078acf4fc8403c7828fa07826a920ba84793f9ba40090134ed0c9e277b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 8,  37 => 6,  32 => 4,  28 => 3,  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

{{ form_start(form, { 'action': path('fos_user_change_password'), 'attr': { 'class': 'fos_user_change_password' } }) }}
    {{ form_widget(form) }}
    <div>
        <input type=\"submit\" value=\"{{ 'change_password.submit'|trans }}\" />
    </div>
{{ form_end(form) }}
", "FOSUserBundle:ChangePassword:change_password_content.html.twig", "/mnt/storage/private/public_html/bank/app/Resources/FOSUserBundle/views/ChangePassword/change_password_content.html.twig");
    }
}
