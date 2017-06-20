<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_194de0f2183519fe6803dfdaba666aec5f864c1d196126dc4b59ab3e761ce5b4 extends Twig_Template
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
        $__internal_3ccb36484721561b42b13fed7d60c91c70872710c0a37427ad3d5dc8758edbdc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ccb36484721561b42b13fed7d60c91c70872710c0a37427ad3d5dc8758edbdc->enter($__internal_3ccb36484721561b42b13fed7d60c91c70872710c0a37427ad3d5dc8758edbdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_a755468238ea5b31e21897259d1ab0de579179df0eb8d81b7f0f4ab7cc672b0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a755468238ea5b31e21897259d1ab0de579179df0eb8d81b7f0f4ab7cc672b0f->enter($__internal_a755468238ea5b31e21897259d1ab0de579179df0eb8d81b7f0f4ab7cc672b0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_3ccb36484721561b42b13fed7d60c91c70872710c0a37427ad3d5dc8758edbdc->leave($__internal_3ccb36484721561b42b13fed7d60c91c70872710c0a37427ad3d5dc8758edbdc_prof);

        
        $__internal_a755468238ea5b31e21897259d1ab0de579179df0eb8d81b7f0f4ab7cc672b0f->leave($__internal_a755468238ea5b31e21897259d1ab0de579179df0eb8d81b7f0f4ab7cc672b0f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
