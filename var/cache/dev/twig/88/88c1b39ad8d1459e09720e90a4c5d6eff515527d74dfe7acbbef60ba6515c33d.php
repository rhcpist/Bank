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
        $__internal_420d808ed7302afc80ead868d8e5b68d280e6231d2d21e4ad95007e585997467 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_420d808ed7302afc80ead868d8e5b68d280e6231d2d21e4ad95007e585997467->enter($__internal_420d808ed7302afc80ead868d8e5b68d280e6231d2d21e4ad95007e585997467_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_e399fe7c16521f4afbcc5fb35653dacb35c558fdf11bc4bed96df06ecdbcefba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e399fe7c16521f4afbcc5fb35653dacb35c558fdf11bc4bed96df06ecdbcefba->enter($__internal_e399fe7c16521f4afbcc5fb35653dacb35c558fdf11bc4bed96df06ecdbcefba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_420d808ed7302afc80ead868d8e5b68d280e6231d2d21e4ad95007e585997467->leave($__internal_420d808ed7302afc80ead868d8e5b68d280e6231d2d21e4ad95007e585997467_prof);

        
        $__internal_e399fe7c16521f4afbcc5fb35653dacb35c558fdf11bc4bed96df06ecdbcefba->leave($__internal_e399fe7c16521f4afbcc5fb35653dacb35c558fdf11bc4bed96df06ecdbcefba_prof);

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
