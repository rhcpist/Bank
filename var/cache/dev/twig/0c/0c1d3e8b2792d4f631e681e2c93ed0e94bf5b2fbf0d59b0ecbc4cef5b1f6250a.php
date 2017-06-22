<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_4b786d0bf6a16b54f4b2e364f1e3c1689d4940cb52d4d443166d705897208be4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e8f357163972798b5befb99537b1a5a8f8e00a05087fdc5f6f54f7cced42ba89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8f357163972798b5befb99537b1a5a8f8e00a05087fdc5f6f54f7cced42ba89->enter($__internal_e8f357163972798b5befb99537b1a5a8f8e00a05087fdc5f6f54f7cced42ba89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        $__internal_85e025266a1be688196a8701992e7e47ff9ba79ddc68bba52152cb98ee69559d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85e025266a1be688196a8701992e7e47ff9ba79ddc68bba52152cb98ee69559d->enter($__internal_85e025266a1be688196a8701992e7e47ff9ba79ddc68bba52152cb98ee69559d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_e8f357163972798b5befb99537b1a5a8f8e00a05087fdc5f6f54f7cced42ba89->leave($__internal_e8f357163972798b5befb99537b1a5a8f8e00a05087fdc5f6f54f7cced42ba89_prof);

        
        $__internal_85e025266a1be688196a8701992e7e47ff9ba79ddc68bba52152cb98ee69559d->leave($__internal_85e025266a1be688196a8701992e7e47ff9ba79ddc68bba52152cb98ee69559d_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_f062e214555614578fc920540a2f6efb32b74e561009f19de3055fa97db5b1f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f062e214555614578fc920540a2f6efb32b74e561009f19de3055fa97db5b1f5->enter($__internal_f062e214555614578fc920540a2f6efb32b74e561009f19de3055fa97db5b1f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_7f04e8c57277c995d43a70caeaeb457982b755a0b90fcea899279eb8d99eef7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f04e8c57277c995d43a70caeaeb457982b755a0b90fcea899279eb8d99eef7d->enter($__internal_7f04e8c57277c995d43a70caeaeb457982b755a0b90fcea899279eb8d99eef7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 4, $this->getSourceContext()); })()), "username", array())), "FOSUserBundle");
        
        $__internal_7f04e8c57277c995d43a70caeaeb457982b755a0b90fcea899279eb8d99eef7d->leave($__internal_7f04e8c57277c995d43a70caeaeb457982b755a0b90fcea899279eb8d99eef7d_prof);

        
        $__internal_f062e214555614578fc920540a2f6efb32b74e561009f19de3055fa97db5b1f5->leave($__internal_f062e214555614578fc920540a2f6efb32b74e561009f19de3055fa97db5b1f5_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_51f408013a3bfcf5e32ff989ef22d75db077c97aed7ee6d3b9da7b97b6bc5502 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51f408013a3bfcf5e32ff989ef22d75db077c97aed7ee6d3b9da7b97b6bc5502->enter($__internal_51f408013a3bfcf5e32ff989ef22d75db077c97aed7ee6d3b9da7b97b6bc5502_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_2f7b325c72ffbdfd39010eaa7a23f142c94ae6d96f0bd430387bc5940515a784 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f7b325c72ffbdfd39010eaa7a23f142c94ae6d96f0bd430387bc5940515a784->enter($__internal_2f7b325c72ffbdfd39010eaa7a23f142c94ae6d96f0bd430387bc5940515a784_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 10, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 10, $this->getSourceContext()); })())), "FOSUserBundle");
        echo "
";
        
        $__internal_2f7b325c72ffbdfd39010eaa7a23f142c94ae6d96f0bd430387bc5940515a784->leave($__internal_2f7b325c72ffbdfd39010eaa7a23f142c94ae6d96f0bd430387bc5940515a784_prof);

        
        $__internal_51f408013a3bfcf5e32ff989ef22d75db077c97aed7ee6d3b9da7b97b6bc5502->leave($__internal_51f408013a3bfcf5e32ff989ef22d75db077c97aed7ee6d3b9da7b97b6bc5502_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_e795a9535b227c96799bb52127a026fe910e991dd949e84655d7cee0ba4c4f84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e795a9535b227c96799bb52127a026fe910e991dd949e84655d7cee0ba4c4f84->enter($__internal_e795a9535b227c96799bb52127a026fe910e991dd949e84655d7cee0ba4c4f84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_ec2ecf8fe66c7c79db8ebccff32572e9041d2017898533389d0d0c1cad11c28c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec2ecf8fe66c7c79db8ebccff32572e9041d2017898533389d0d0c1cad11c28c->enter($__internal_ec2ecf8fe66c7c79db8ebccff32572e9041d2017898533389d0d0c1cad11c28c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_ec2ecf8fe66c7c79db8ebccff32572e9041d2017898533389d0d0c1cad11c28c->leave($__internal_ec2ecf8fe66c7c79db8ebccff32572e9041d2017898533389d0d0c1cad11c28c_prof);

        
        $__internal_e795a9535b227c96799bb52127a026fe910e991dd949e84655d7cee0ba4c4f84->leave($__internal_e795a9535b227c96799bb52127a026fe910e991dd949e84655d7cee0ba4c4f84_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  85 => 13,  73 => 10,  64 => 8,  54 => 4,  45 => 2,  35 => 13,  33 => 8,  30 => 7,  28 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{%- autoescape false -%}
{{ 'resetting.email.subject'|trans({'%username%': user.username}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Resetting:email.txt.twig", "/mnt/storage/private/public_html/bank/app/Resources/FOSUserBundle/views/Resetting/email.txt.twig");
    }
}
