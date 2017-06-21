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
        $__internal_bbe864aa45de9364bc7ce13b3722ba3a8b84b063389fc7d40068c0654a4eb800 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bbe864aa45de9364bc7ce13b3722ba3a8b84b063389fc7d40068c0654a4eb800->enter($__internal_bbe864aa45de9364bc7ce13b3722ba3a8b84b063389fc7d40068c0654a4eb800_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_cb6450626a31b5471d8af3171f9f20fc1cb0549478f96aa4f547ff2cefe51310 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb6450626a31b5471d8af3171f9f20fc1cb0549478f96aa4f547ff2cefe51310->enter($__internal_cb6450626a31b5471d8af3171f9f20fc1cb0549478f96aa4f547ff2cefe51310_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

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
        
        $__internal_bbe864aa45de9364bc7ce13b3722ba3a8b84b063389fc7d40068c0654a4eb800->leave($__internal_bbe864aa45de9364bc7ce13b3722ba3a8b84b063389fc7d40068c0654a4eb800_prof);

        
        $__internal_cb6450626a31b5471d8af3171f9f20fc1cb0549478f96aa4f547ff2cefe51310->leave($__internal_cb6450626a31b5471d8af3171f9f20fc1cb0549478f96aa4f547ff2cefe51310_prof);

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
