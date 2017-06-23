<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_1be51bb0e6c2111e442eeb6c5ef24086c9e3be15f2209df93ca677121db886ba extends Twig_Template
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
        $__internal_4e1564d03aca081de92b218a8ce5dc653f8a2ba5e4afddf06105223b92c04122 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e1564d03aca081de92b218a8ce5dc653f8a2ba5e4afddf06105223b92c04122->enter($__internal_4e1564d03aca081de92b218a8ce5dc653f8a2ba5e4afddf06105223b92c04122_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_627375112438b64f12c0f9a74bf6cee083a2d15b70a3b3a36ccad373f7e843be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_627375112438b64f12c0f9a74bf6cee083a2d15b70a3b3a36ccad373f7e843be->enter($__internal_627375112438b64f12c0f9a74bf6cee083a2d15b70a3b3a36ccad373f7e843be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_4e1564d03aca081de92b218a8ce5dc653f8a2ba5e4afddf06105223b92c04122->leave($__internal_4e1564d03aca081de92b218a8ce5dc653f8a2ba5e4afddf06105223b92c04122_prof);

        
        $__internal_627375112438b64f12c0f9a74bf6cee083a2d15b70a3b3a36ccad373f7e843be->leave($__internal_627375112438b64f12c0f9a74bf6cee083a2d15b70a3b3a36ccad373f7e843be_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
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
