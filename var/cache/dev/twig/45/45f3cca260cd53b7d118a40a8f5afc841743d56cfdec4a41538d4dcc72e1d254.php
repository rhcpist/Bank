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
        $__internal_201676cc085ec1cd80edb363560d5374cf7496f9b45291609e4dfb95e0c326cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_201676cc085ec1cd80edb363560d5374cf7496f9b45291609e4dfb95e0c326cf->enter($__internal_201676cc085ec1cd80edb363560d5374cf7496f9b45291609e4dfb95e0c326cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_e104606168e98453c5061f2dde0634686380a77809bca02a89ebb6b8193e4fc4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e104606168e98453c5061f2dde0634686380a77809bca02a89ebb6b8193e4fc4->enter($__internal_e104606168e98453c5061f2dde0634686380a77809bca02a89ebb6b8193e4fc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_201676cc085ec1cd80edb363560d5374cf7496f9b45291609e4dfb95e0c326cf->leave($__internal_201676cc085ec1cd80edb363560d5374cf7496f9b45291609e4dfb95e0c326cf_prof);

        
        $__internal_e104606168e98453c5061f2dde0634686380a77809bca02a89ebb6b8193e4fc4->leave($__internal_e104606168e98453c5061f2dde0634686380a77809bca02a89ebb6b8193e4fc4_prof);

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
