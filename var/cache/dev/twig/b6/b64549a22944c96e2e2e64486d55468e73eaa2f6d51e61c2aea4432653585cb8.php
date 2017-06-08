<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_b125537520881b25f4e88375af82196f40b0ca54c123dea3caa6be44fbf2e804 extends Twig_Template
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
        $__internal_51b47710491996bd12a58e805eb8da81935319b5726c42a6d45297ac6594dd5a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51b47710491996bd12a58e805eb8da81935319b5726c42a6d45297ac6594dd5a->enter($__internal_51b47710491996bd12a58e805eb8da81935319b5726c42a6d45297ac6594dd5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_f9e1f78ee20cbec47c040790e2f02f4abb4c957322b4cc9d3d559849f4f885de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9e1f78ee20cbec47c040790e2f02f4abb4c957322b4cc9d3d559849f4f885de->enter($__internal_f9e1f78ee20cbec47c040790e2f02f4abb4c957322b4cc9d3d559849f4f885de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_51b47710491996bd12a58e805eb8da81935319b5726c42a6d45297ac6594dd5a->leave($__internal_51b47710491996bd12a58e805eb8da81935319b5726c42a6d45297ac6594dd5a_prof);

        
        $__internal_f9e1f78ee20cbec47c040790e2f02f4abb4c957322b4cc9d3d559849f4f885de->leave($__internal_f9e1f78ee20cbec47c040790e2f02f4abb4c957322b4cc9d3d559849f4f885de_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
