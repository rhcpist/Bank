<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_3310f6802108e62a2d50c713b67dde27cbc137de197c921a077a560207b3404b extends Twig_Template
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
        $__internal_7ea330e738d469814bb86a3299123b9546d99ca311285ecd6fc930581271ce1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ea330e738d469814bb86a3299123b9546d99ca311285ecd6fc930581271ce1c->enter($__internal_7ea330e738d469814bb86a3299123b9546d99ca311285ecd6fc930581271ce1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_5d9fc091a613bb592fc505fe2268e1e947ac2976e4d3f2d1b894887a1c3fa21b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d9fc091a613bb592fc505fe2268e1e947ac2976e4d3f2d1b894887a1c3fa21b->enter($__internal_5d9fc091a613bb592fc505fe2268e1e947ac2976e4d3f2d1b894887a1c3fa21b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_7ea330e738d469814bb86a3299123b9546d99ca311285ecd6fc930581271ce1c->leave($__internal_7ea330e738d469814bb86a3299123b9546d99ca311285ecd6fc930581271ce1c_prof);

        
        $__internal_5d9fc091a613bb592fc505fe2268e1e947ac2976e4d3f2d1b894887a1c3fa21b->leave($__internal_5d9fc091a613bb592fc505fe2268e1e947ac2976e4d3f2d1b894887a1c3fa21b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
