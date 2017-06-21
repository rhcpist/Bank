<?php

/* FOSUserBundle:Profile:edit_content.html.twig */
class __TwigTemplate_be440d9d9481f8747493889712f0c7d111351acc4f3d68cd400a774dbfd96f14 extends Twig_Template
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
        $__internal_ad22705781b760abc3ab8a07d06233649ee3a461ef5a92a55d6a0a5f654b3552 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad22705781b760abc3ab8a07d06233649ee3a461ef5a92a55d6a0a5f654b3552->enter($__internal_ad22705781b760abc3ab8a07d06233649ee3a461ef5a92a55d6a0a5f654b3552_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit_content.html.twig"));

        $__internal_7adb237f6cf4142bbaf2fe3607e9300e58193d4dc7c9c26102eca66886fd9ef8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7adb237f6cf4142bbaf2fe3607e9300e58193d4dc7c9c26102eca66886fd9ef8->enter($__internal_7adb237f6cf4142bbaf2fe3607e9300e58193d4dc7c9c26102eca66886fd9ef8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 3, $this->getSourceContext()); })()), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit"), "attr" => array("class" => "fos_user_profile_edit")));
        echo "
    ";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 4, $this->getSourceContext()); })()), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.edit.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 8, $this->getSourceContext()); })()), 'form_end');
        echo "
";
        
        $__internal_ad22705781b760abc3ab8a07d06233649ee3a461ef5a92a55d6a0a5f654b3552->leave($__internal_ad22705781b760abc3ab8a07d06233649ee3a461ef5a92a55d6a0a5f654b3552_prof);

        
        $__internal_7adb237f6cf4142bbaf2fe3607e9300e58193d4dc7c9c26102eca66886fd9ef8->leave($__internal_7adb237f6cf4142bbaf2fe3607e9300e58193d4dc7c9c26102eca66886fd9ef8_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit_content.html.twig";
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

{{ form_start(form, { 'action': path('fos_user_profile_edit'), 'attr': { 'class': 'fos_user_profile_edit' } }) }}
    {{ form_widget(form) }}
    <div>
        <input type=\"submit\" value=\"{{ 'profile.edit.submit'|trans }}\" />
    </div>
{{ form_end(form) }}
", "FOSUserBundle:Profile:edit_content.html.twig", "/mnt/storage/private/public_html/bank/app/Resources/FOSUserBundle/views/Profile/edit_content.html.twig");
    }
}
