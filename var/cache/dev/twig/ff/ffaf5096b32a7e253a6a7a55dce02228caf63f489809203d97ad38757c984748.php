<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_94abc616ffb0c8026aa8b06e626807f9168e0fbbbc6a3a62becc6073c0ba0227 extends Twig_Template
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
        $__internal_3c0179dd7c6e347891cdf7922d0ab7da437a70011e8f4e7c14190fc1a59ef21f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c0179dd7c6e347891cdf7922d0ab7da437a70011e8f4e7c14190fc1a59ef21f->enter($__internal_3c0179dd7c6e347891cdf7922d0ab7da437a70011e8f4e7c14190fc1a59ef21f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_614ae2e5c7b188d4c48472dca686b82b1a0a546036a0afc9a13e7cc9d73dc224 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_614ae2e5c7b188d4c48472dca686b82b1a0a546036a0afc9a13e7cc9d73dc224->enter($__internal_614ae2e5c7b188d4c48472dca686b82b1a0a546036a0afc9a13e7cc9d73dc224_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

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
        
        $__internal_3c0179dd7c6e347891cdf7922d0ab7da437a70011e8f4e7c14190fc1a59ef21f->leave($__internal_3c0179dd7c6e347891cdf7922d0ab7da437a70011e8f4e7c14190fc1a59ef21f_prof);

        
        $__internal_614ae2e5c7b188d4c48472dca686b82b1a0a546036a0afc9a13e7cc9d73dc224->leave($__internal_614ae2e5c7b188d4c48472dca686b82b1a0a546036a0afc9a13e7cc9d73dc224_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
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
