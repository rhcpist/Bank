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
        $__internal_2e2f52a0e1fcd0bf2e6e70d4fa0c7ae0969487faae9759b2d416c92207daedd9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e2f52a0e1fcd0bf2e6e70d4fa0c7ae0969487faae9759b2d416c92207daedd9->enter($__internal_2e2f52a0e1fcd0bf2e6e70d4fa0c7ae0969487faae9759b2d416c92207daedd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_f1302304e4a473d507b226fe556be107374198cb310acc65c635e31d2a85f23e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1302304e4a473d507b226fe556be107374198cb310acc65c635e31d2a85f23e->enter($__internal_f1302304e4a473d507b226fe556be107374198cb310acc65c635e31d2a85f23e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

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
        
        $__internal_2e2f52a0e1fcd0bf2e6e70d4fa0c7ae0969487faae9759b2d416c92207daedd9->leave($__internal_2e2f52a0e1fcd0bf2e6e70d4fa0c7ae0969487faae9759b2d416c92207daedd9_prof);

        
        $__internal_f1302304e4a473d507b226fe556be107374198cb310acc65c635e31d2a85f23e->leave($__internal_f1302304e4a473d507b226fe556be107374198cb310acc65c635e31d2a85f23e_prof);

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
