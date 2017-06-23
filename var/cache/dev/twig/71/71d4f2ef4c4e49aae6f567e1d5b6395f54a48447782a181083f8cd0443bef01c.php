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
        $__internal_4713970fed6055cb889bb87354a2a9eee6ce164a4bba2795456a6d9d389dd144 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4713970fed6055cb889bb87354a2a9eee6ce164a4bba2795456a6d9d389dd144->enter($__internal_4713970fed6055cb889bb87354a2a9eee6ce164a4bba2795456a6d9d389dd144_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_ae35496f4a9530666663f0a8a92818518969f2824c04585b151cfcf677cf66c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae35496f4a9530666663f0a8a92818518969f2824c04585b151cfcf677cf66c7->enter($__internal_ae35496f4a9530666663f0a8a92818518969f2824c04585b151cfcf677cf66c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_4713970fed6055cb889bb87354a2a9eee6ce164a4bba2795456a6d9d389dd144->leave($__internal_4713970fed6055cb889bb87354a2a9eee6ce164a4bba2795456a6d9d389dd144_prof);

        
        $__internal_ae35496f4a9530666663f0a8a92818518969f2824c04585b151cfcf677cf66c7->leave($__internal_ae35496f4a9530666663f0a8a92818518969f2824c04585b151cfcf677cf66c7_prof);

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
