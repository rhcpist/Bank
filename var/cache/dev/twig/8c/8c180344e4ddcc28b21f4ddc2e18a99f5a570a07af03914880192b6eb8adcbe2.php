<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_c66c4ebbe234033a461810cf83d257c2c86c0f20eaa564a27008665c3de8c928 extends Twig_Template
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
        $__internal_fe6845c28b5928cdf4f35bb7f846e05fbed64efb50934779e0a8262baceabd06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe6845c28b5928cdf4f35bb7f846e05fbed64efb50934779e0a8262baceabd06->enter($__internal_fe6845c28b5928cdf4f35bb7f846e05fbed64efb50934779e0a8262baceabd06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_6dccabd98f46d64240e60af65ac8af38747ab8ed179edfa0d9465cde13376eff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6dccabd98f46d64240e60af65ac8af38747ab8ed179edfa0d9465cde13376eff->enter($__internal_6dccabd98f46d64240e60af65ac8af38747ab8ed179edfa0d9465cde13376eff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_fe6845c28b5928cdf4f35bb7f846e05fbed64efb50934779e0a8262baceabd06->leave($__internal_fe6845c28b5928cdf4f35bb7f846e05fbed64efb50934779e0a8262baceabd06_prof);

        
        $__internal_6dccabd98f46d64240e60af65ac8af38747ab8ed179edfa0d9465cde13376eff->leave($__internal_6dccabd98f46d64240e60af65ac8af38747ab8ed179edfa0d9465cde13376eff_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/attributes.html.php", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
