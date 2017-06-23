<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_dac36821a73888e0d91113b570e971f73242968a095a2b26c609213ef8fea79d extends Twig_Template
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
        $__internal_d54cfb44bf93efbab4685eceb15a69fd6f842041b1a340c7c665a44798fb8a21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d54cfb44bf93efbab4685eceb15a69fd6f842041b1a340c7c665a44798fb8a21->enter($__internal_d54cfb44bf93efbab4685eceb15a69fd6f842041b1a340c7c665a44798fb8a21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_a54d54f37e3c4a79e19ef2fda080904afa057af1383a6ae9ff87b61371013d85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a54d54f37e3c4a79e19ef2fda080904afa057af1383a6ae9ff87b61371013d85->enter($__internal_a54d54f37e3c4a79e19ef2fda080904afa057af1383a6ae9ff87b61371013d85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_d54cfb44bf93efbab4685eceb15a69fd6f842041b1a340c7c665a44798fb8a21->leave($__internal_d54cfb44bf93efbab4685eceb15a69fd6f842041b1a340c7c665a44798fb8a21_prof);

        
        $__internal_a54d54f37e3c4a79e19ef2fda080904afa057af1383a6ae9ff87b61371013d85->leave($__internal_a54d54f37e3c4a79e19ef2fda080904afa057af1383a6ae9ff87b61371013d85_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_attributes.html.php");
    }
}
