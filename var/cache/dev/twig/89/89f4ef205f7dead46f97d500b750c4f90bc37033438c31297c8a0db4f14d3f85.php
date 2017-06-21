<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_e579a67f9ed40ab05cdd3bc7cf3b3026da9c1d27edf1c41bc16457ffb6902ff8 extends Twig_Template
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
        $__internal_cf1d26e3bef15510c7afe25bcbe35521785d14c9f2340ec4d101187500212630 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf1d26e3bef15510c7afe25bcbe35521785d14c9f2340ec4d101187500212630->enter($__internal_cf1d26e3bef15510c7afe25bcbe35521785d14c9f2340ec4d101187500212630_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register_content.html.twig"));

        $__internal_0e2bf8ad70aae6aa12d89ebc08d60c9509215f6a781830c888b11a1193690435 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e2bf8ad70aae6aa12d89ebc08d60c9509215f6a781830c888b11a1193690435->enter($__internal_0e2bf8ad70aae6aa12d89ebc08d60c9509215f6a781830c888b11a1193690435_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 3, $this->getSourceContext()); })()), 'form_start', array("method" => "post", "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register"), "attr" => array("class" => "fos_user_registration_register")));
        echo "
    ";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 4, $this->getSourceContext()); })()), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 8, $this->getSourceContext()); })()), 'form_end');
        echo "
";
        
        $__internal_cf1d26e3bef15510c7afe25bcbe35521785d14c9f2340ec4d101187500212630->leave($__internal_cf1d26e3bef15510c7afe25bcbe35521785d14c9f2340ec4d101187500212630_prof);

        
        $__internal_0e2bf8ad70aae6aa12d89ebc08d60c9509215f6a781830c888b11a1193690435->leave($__internal_0e2bf8ad70aae6aa12d89ebc08d60c9509215f6a781830c888b11a1193690435_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register_content.html.twig";
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

{{ form_start(form, {'method': 'post', 'action': path('fos_user_registration_register'), 'attr': {'class': 'fos_user_registration_register'}}) }}
    {{ form_widget(form) }}
    <div>
        <input type=\"submit\" value=\"{{ 'registration.submit'|trans }}\" />
    </div>
{{ form_end(form) }}
", "FOSUserBundle:Registration:register_content.html.twig", "/mnt/storage/private/public_html/bank/app/Resources/FOSUserBundle/views/Registration/register_content.html.twig");
    }
}
