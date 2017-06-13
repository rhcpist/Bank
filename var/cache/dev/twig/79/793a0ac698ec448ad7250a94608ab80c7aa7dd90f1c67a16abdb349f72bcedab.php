<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_45e41ff887bf452337ef061634ece413b4f13ff380ee913647613a14ce642f08 extends Twig_Template
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
        $__internal_561a14fef494704c332847e2b39dd76587031bca60bf9e8b8a5e7504a7f809e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_561a14fef494704c332847e2b39dd76587031bca60bf9e8b8a5e7504a7f809e2->enter($__internal_561a14fef494704c332847e2b39dd76587031bca60bf9e8b8a5e7504a7f809e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_bd99c270b964194581ef0ab0a7adfcbb1dd91366645d670d32fb5283ece829b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd99c270b964194581ef0ab0a7adfcbb1dd91366645d670d32fb5283ece829b6->enter($__internal_bd99c270b964194581ef0ab0a7adfcbb1dd91366645d670d32fb5283ece829b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_561a14fef494704c332847e2b39dd76587031bca60bf9e8b8a5e7504a7f809e2->leave($__internal_561a14fef494704c332847e2b39dd76587031bca60bf9e8b8a5e7504a7f809e2_prof);

        
        $__internal_bd99c270b964194581ef0ab0a7adfcbb1dd91366645d670d32fb5283ece829b6->leave($__internal_bd99c270b964194581ef0ab0a7adfcbb1dd91366645d670d32fb5283ece829b6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/datetime_widget.html.php");
    }
}
