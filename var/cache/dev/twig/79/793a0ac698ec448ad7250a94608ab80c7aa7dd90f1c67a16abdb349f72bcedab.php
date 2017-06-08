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
        $__internal_cb868dbbe9c46f73f9e6f007afa85c8380bc0729531819df0a4b447459ad9a74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb868dbbe9c46f73f9e6f007afa85c8380bc0729531819df0a4b447459ad9a74->enter($__internal_cb868dbbe9c46f73f9e6f007afa85c8380bc0729531819df0a4b447459ad9a74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_c4ced2509080a8c1770c000c21f4c3dcc2bb98b4f764aa734aca8c32a067b64c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4ced2509080a8c1770c000c21f4c3dcc2bb98b4f764aa734aca8c32a067b64c->enter($__internal_c4ced2509080a8c1770c000c21f4c3dcc2bb98b4f764aa734aca8c32a067b64c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_cb868dbbe9c46f73f9e6f007afa85c8380bc0729531819df0a4b447459ad9a74->leave($__internal_cb868dbbe9c46f73f9e6f007afa85c8380bc0729531819df0a4b447459ad9a74_prof);

        
        $__internal_c4ced2509080a8c1770c000c21f4c3dcc2bb98b4f764aa734aca8c32a067b64c->leave($__internal_c4ced2509080a8c1770c000c21f4c3dcc2bb98b4f764aa734aca8c32a067b64c_prof);

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
