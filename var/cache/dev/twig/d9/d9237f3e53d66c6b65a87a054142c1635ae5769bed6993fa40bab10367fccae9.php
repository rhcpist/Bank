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
        $__internal_a19866942d864b07f69d8d358a3e1ebb246a986ad79e6c7f4cbfc60a6dd17e16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a19866942d864b07f69d8d358a3e1ebb246a986ad79e6c7f4cbfc60a6dd17e16->enter($__internal_a19866942d864b07f69d8d358a3e1ebb246a986ad79e6c7f4cbfc60a6dd17e16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_0e6868a0ead5d60f9035308d0a165731b366dfefc6bad0b5cb781072f2be3938 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e6868a0ead5d60f9035308d0a165731b366dfefc6bad0b5cb781072f2be3938->enter($__internal_0e6868a0ead5d60f9035308d0a165731b366dfefc6bad0b5cb781072f2be3938_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

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
        
        $__internal_a19866942d864b07f69d8d358a3e1ebb246a986ad79e6c7f4cbfc60a6dd17e16->leave($__internal_a19866942d864b07f69d8d358a3e1ebb246a986ad79e6c7f4cbfc60a6dd17e16_prof);

        
        $__internal_0e6868a0ead5d60f9035308d0a165731b366dfefc6bad0b5cb781072f2be3938->leave($__internal_0e6868a0ead5d60f9035308d0a165731b366dfefc6bad0b5cb781072f2be3938_prof);

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
