<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_407ed210eeee603e9a1e7bde97adcf1b37d52f68265bb6de0cdf709575850c70 extends Twig_Template
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
        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), ($context["user"] ?? null), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? null)), "FOSUserBundle");
    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), ($context["user"] ?? null), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? null)), "FOSUserBundle");
        echo "
";
    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  49 => 13,  43 => 10,  40 => 8,  36 => 4,  33 => 2,  29 => 13,  27 => 8,  24 => 7,  22 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "FOSUserBundle:Registration:email.txt.twig", "/mnt/storage/private/public_html/bank/app/Resources/FOSUserBundle/views/Registration/email.txt.twig");
    }
}
