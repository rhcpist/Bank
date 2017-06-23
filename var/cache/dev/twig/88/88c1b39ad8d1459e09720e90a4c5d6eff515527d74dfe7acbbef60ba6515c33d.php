<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_fc03a2b00a027e8068acf4b8788a2e5433a000dc986dca7d00474dd005814e76 extends Twig_Template
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
        $__internal_f77d0cc9301fab71dbfab323f99479abb9d9a0988d8d60e192659cbfb0ce4f92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f77d0cc9301fab71dbfab323f99479abb9d9a0988d8d60e192659cbfb0ce4f92->enter($__internal_f77d0cc9301fab71dbfab323f99479abb9d9a0988d8d60e192659cbfb0ce4f92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_0eb470d004cd1ccd2b0563200a6e07409c9a5e87b5853fb4ba9fc3eb138670eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0eb470d004cd1ccd2b0563200a6e07409c9a5e87b5853fb4ba9fc3eb138670eb->enter($__internal_0eb470d004cd1ccd2b0563200a6e07409c9a5e87b5853fb4ba9fc3eb138670eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_f77d0cc9301fab71dbfab323f99479abb9d9a0988d8d60e192659cbfb0ce4f92->leave($__internal_f77d0cc9301fab71dbfab323f99479abb9d9a0988d8d60e192659cbfb0ce4f92_prof);

        
        $__internal_0eb470d004cd1ccd2b0563200a6e07409c9a5e87b5853fb4ba9fc3eb138670eb->leave($__internal_0eb470d004cd1ccd2b0563200a6e07409c9a5e87b5853fb4ba9fc3eb138670eb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
