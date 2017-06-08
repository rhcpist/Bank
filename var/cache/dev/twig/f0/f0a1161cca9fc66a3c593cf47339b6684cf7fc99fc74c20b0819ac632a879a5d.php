<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_8ad01a504af0986d5b158b25b2dde7d33708abcc5a495e701389579c1bf29be1 extends Twig_Template
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
        $__internal_7a36624978c0f07f7612eb940fa0b3508364a86a861e44ed20144f7ab00714fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a36624978c0f07f7612eb940fa0b3508364a86a861e44ed20144f7ab00714fd->enter($__internal_7a36624978c0f07f7612eb940fa0b3508364a86a861e44ed20144f7ab00714fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_a767bb8bece08629b57d4913ad89c09a7c128336a5ce1af2d6bd7e9c3cab22c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a767bb8bece08629b57d4913ad89c09a7c128336a5ce1af2d6bd7e9c3cab22c1->enter($__internal_a767bb8bece08629b57d4913ad89c09a7c128336a5ce1af2d6bd7e9c3cab22c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_7a36624978c0f07f7612eb940fa0b3508364a86a861e44ed20144f7ab00714fd->leave($__internal_7a36624978c0f07f7612eb940fa0b3508364a86a861e44ed20144f7ab00714fd_prof);

        
        $__internal_a767bb8bece08629b57d4913ad89c09a7c128336a5ce1af2d6bd7e9c3cab22c1->leave($__internal_a767bb8bece08629b57d4913ad89c09a7c128336a5ce1af2d6bd7e9c3cab22c1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
