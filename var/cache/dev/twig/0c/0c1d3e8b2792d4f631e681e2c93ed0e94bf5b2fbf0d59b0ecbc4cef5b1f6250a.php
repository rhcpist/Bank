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
        $__internal_3dc21bf72bf10cd201d6e64040d3d950fbb817341cb4fa477c0117eee2ed607b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3dc21bf72bf10cd201d6e64040d3d950fbb817341cb4fa477c0117eee2ed607b->enter($__internal_3dc21bf72bf10cd201d6e64040d3d950fbb817341cb4fa477c0117eee2ed607b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        $__internal_dc9f165ac5add743768473387838ddf043bf892110334e2025997afd7c8fc10c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc9f165ac5add743768473387838ddf043bf892110334e2025997afd7c8fc10c->enter($__internal_dc9f165ac5add743768473387838ddf043bf892110334e2025997afd7c8fc10c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_3dc21bf72bf10cd201d6e64040d3d950fbb817341cb4fa477c0117eee2ed607b->leave($__internal_3dc21bf72bf10cd201d6e64040d3d950fbb817341cb4fa477c0117eee2ed607b_prof);

        
        $__internal_dc9f165ac5add743768473387838ddf043bf892110334e2025997afd7c8fc10c->leave($__internal_dc9f165ac5add743768473387838ddf043bf892110334e2025997afd7c8fc10c_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_ead2c4966dddfff029563a2861a5ba2741f5893018898fcd46067d5e70658daa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ead2c4966dddfff029563a2861a5ba2741f5893018898fcd46067d5e70658daa->enter($__internal_ead2c4966dddfff029563a2861a5ba2741f5893018898fcd46067d5e70658daa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_65b8f4b0d098976cee68a5492581bce32b7caa18e563c485574076929b5d584d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65b8f4b0d098976cee68a5492581bce32b7caa18e563c485574076929b5d584d->enter($__internal_65b8f4b0d098976cee68a5492581bce32b7caa18e563c485574076929b5d584d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 4, $this->getSourceContext()); })()), "username", array())), "FOSUserBundle");
        
        $__internal_65b8f4b0d098976cee68a5492581bce32b7caa18e563c485574076929b5d584d->leave($__internal_65b8f4b0d098976cee68a5492581bce32b7caa18e563c485574076929b5d584d_prof);

        
        $__internal_ead2c4966dddfff029563a2861a5ba2741f5893018898fcd46067d5e70658daa->leave($__internal_ead2c4966dddfff029563a2861a5ba2741f5893018898fcd46067d5e70658daa_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_41673e9c234befe0c80bd2a2bd4ff446bd26e2898e6d8e848939c044ca22fcc0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41673e9c234befe0c80bd2a2bd4ff446bd26e2898e6d8e848939c044ca22fcc0->enter($__internal_41673e9c234befe0c80bd2a2bd4ff446bd26e2898e6d8e848939c044ca22fcc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_ed4abb5d50c1082fdd9a53db9f6eec88e8c58cdfe1880ba2532f8fb2fd03ee12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed4abb5d50c1082fdd9a53db9f6eec88e8c58cdfe1880ba2532f8fb2fd03ee12->enter($__internal_ed4abb5d50c1082fdd9a53db9f6eec88e8c58cdfe1880ba2532f8fb2fd03ee12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 10, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 10, $this->getSourceContext()); })())), "FOSUserBundle");
        echo "
";
        
        $__internal_ed4abb5d50c1082fdd9a53db9f6eec88e8c58cdfe1880ba2532f8fb2fd03ee12->leave($__internal_ed4abb5d50c1082fdd9a53db9f6eec88e8c58cdfe1880ba2532f8fb2fd03ee12_prof);

        
        $__internal_41673e9c234befe0c80bd2a2bd4ff446bd26e2898e6d8e848939c044ca22fcc0->leave($__internal_41673e9c234befe0c80bd2a2bd4ff446bd26e2898e6d8e848939c044ca22fcc0_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_4abe63fb75992c16c9bda0890146a818d2c77e972a782cec519b125fe3c0da91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4abe63fb75992c16c9bda0890146a818d2c77e972a782cec519b125fe3c0da91->enter($__internal_4abe63fb75992c16c9bda0890146a818d2c77e972a782cec519b125fe3c0da91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_f4f20d72eef6b107db8183538ec2ba8a0ae0e75f9fe87595ad73671cd5943a96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4f20d72eef6b107db8183538ec2ba8a0ae0e75f9fe87595ad73671cd5943a96->enter($__internal_f4f20d72eef6b107db8183538ec2ba8a0ae0e75f9fe87595ad73671cd5943a96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_f4f20d72eef6b107db8183538ec2ba8a0ae0e75f9fe87595ad73671cd5943a96->leave($__internal_f4f20d72eef6b107db8183538ec2ba8a0ae0e75f9fe87595ad73671cd5943a96_prof);

        
        $__internal_4abe63fb75992c16c9bda0890146a818d2c77e972a782cec519b125fe3c0da91->leave($__internal_4abe63fb75992c16c9bda0890146a818d2c77e972a782cec519b125fe3c0da91_prof);

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
