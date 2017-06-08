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
        $__internal_34fed09909f66f942f6258234161c8a2d27cfe529da54548514ff67acbf5f606 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34fed09909f66f942f6258234161c8a2d27cfe529da54548514ff67acbf5f606->enter($__internal_34fed09909f66f942f6258234161c8a2d27cfe529da54548514ff67acbf5f606_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_ba968571b318ca67953095d15bfe80518232628bb7485beee8a4dbea19773945 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba968571b318ca67953095d15bfe80518232628bb7485beee8a4dbea19773945->enter($__internal_ba968571b318ca67953095d15bfe80518232628bb7485beee8a4dbea19773945_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_34fed09909f66f942f6258234161c8a2d27cfe529da54548514ff67acbf5f606->leave($__internal_34fed09909f66f942f6258234161c8a2d27cfe529da54548514ff67acbf5f606_prof);

        
        $__internal_ba968571b318ca67953095d15bfe80518232628bb7485beee8a4dbea19773945->leave($__internal_ba968571b318ca67953095d15bfe80518232628bb7485beee8a4dbea19773945_prof);

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
