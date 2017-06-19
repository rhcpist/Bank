<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_f223a60a1a0c49be0d8aaf1ab4822ea5bfc6d7e750ca0937584a25792a50d191 extends Twig_Template
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
        $__internal_f6cab951866130060eca7d6ad64a761af68c4a85b2ace9e250d380fb0777369c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6cab951866130060eca7d6ad64a761af68c4a85b2ace9e250d380fb0777369c->enter($__internal_f6cab951866130060eca7d6ad64a761af68c4a85b2ace9e250d380fb0777369c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_265856dd2bb3363ecc3737e08048b53820987556c6e969fe7b82a14f31254f02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_265856dd2bb3363ecc3737e08048b53820987556c6e969fe7b82a14f31254f02->enter($__internal_265856dd2bb3363ecc3737e08048b53820987556c6e969fe7b82a14f31254f02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_f6cab951866130060eca7d6ad64a761af68c4a85b2ace9e250d380fb0777369c->leave($__internal_f6cab951866130060eca7d6ad64a761af68c4a85b2ace9e250d380fb0777369c_prof);

        
        $__internal_265856dd2bb3363ecc3737e08048b53820987556c6e969fe7b82a14f31254f02->leave($__internal_265856dd2bb3363ecc3737e08048b53820987556c6e969fe7b82a14f31254f02_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
