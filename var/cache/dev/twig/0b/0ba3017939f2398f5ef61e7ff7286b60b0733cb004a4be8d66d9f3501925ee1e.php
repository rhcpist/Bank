<?php

/* FOSUserBundle:Group:new_content.html.twig */
class __TwigTemplate_d1755b0287f6ae3b7f32607ca0d4438cec0c4dce4e443fba15b22ac96bb5c78c extends Twig_Template
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
        $__internal_bd96002c9a7d629b9be432f1bd3e101d5cb6b5b43effee668b950fb9c27b2718 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd96002c9a7d629b9be432f1bd3e101d5cb6b5b43effee668b950fb9c27b2718->enter($__internal_bd96002c9a7d629b9be432f1bd3e101d5cb6b5b43effee668b950fb9c27b2718_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new_content.html.twig"));

        $__internal_ed9d39bacbd40f85f20ea00c74dc704954c1655a8a7a27d700e9bac33b22b076 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed9d39bacbd40f85f20ea00c74dc704954c1655a8a7a27d700e9bac33b22b076->enter($__internal_ed9d39bacbd40f85f20ea00c74dc704954c1655a8a7a27d700e9bac33b22b076_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 3, $this->getSourceContext()); })()), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_group_new"), "attr" => array("class" => "fos_user_group_new")));
        echo "
    ";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 4, $this->getSourceContext()); })()), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("group.new.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 8, $this->getSourceContext()); })()), 'form_end');
        echo "
";
        
        $__internal_bd96002c9a7d629b9be432f1bd3e101d5cb6b5b43effee668b950fb9c27b2718->leave($__internal_bd96002c9a7d629b9be432f1bd3e101d5cb6b5b43effee668b950fb9c27b2718_prof);

        
        $__internal_ed9d39bacbd40f85f20ea00c74dc704954c1655a8a7a27d700e9bac33b22b076->leave($__internal_ed9d39bacbd40f85f20ea00c74dc704954c1655a8a7a27d700e9bac33b22b076_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new_content.html.twig";
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

{{ form_start(form, { 'action': path('fos_user_group_new'), 'attr': { 'class': 'fos_user_group_new' } }) }}
    {{ form_widget(form) }}
    <div>
        <input type=\"submit\" value=\"{{ 'group.new.submit'|trans }}\" />
    </div>
{{ form_end(form) }}
", "FOSUserBundle:Group:new_content.html.twig", "/mnt/storage/private/public_html/bank/app/Resources/FOSUserBundle/views/Group/new_content.html.twig");
    }
}
