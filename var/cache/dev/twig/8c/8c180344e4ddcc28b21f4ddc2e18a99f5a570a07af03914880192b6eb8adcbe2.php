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
        $__internal_f926c272c7e797c7eae7156f7d875ca0839d8b62ebcc374788e45347b6fcfd95 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f926c272c7e797c7eae7156f7d875ca0839d8b62ebcc374788e45347b6fcfd95->enter($__internal_f926c272c7e797c7eae7156f7d875ca0839d8b62ebcc374788e45347b6fcfd95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_0d619c4ff5e1e36ca4108620b8e56b1b5e066d2596de67746e743316203ec206 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d619c4ff5e1e36ca4108620b8e56b1b5e066d2596de67746e743316203ec206->enter($__internal_0d619c4ff5e1e36ca4108620b8e56b1b5e066d2596de67746e743316203ec206_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

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
        
        $__internal_f926c272c7e797c7eae7156f7d875ca0839d8b62ebcc374788e45347b6fcfd95->leave($__internal_f926c272c7e797c7eae7156f7d875ca0839d8b62ebcc374788e45347b6fcfd95_prof);

        
        $__internal_0d619c4ff5e1e36ca4108620b8e56b1b5e066d2596de67746e743316203ec206->leave($__internal_0d619c4ff5e1e36ca4108620b8e56b1b5e066d2596de67746e743316203ec206_prof);

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
