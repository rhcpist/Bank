<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_8926cc1dfb20233e4a8dc11d92721f561f59dc5532f13378f2a1dff2a6a93fcd extends Twig_Template
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
        $__internal_e3773f237a510eb45ec0697c49d46aa7739ad9e890878e74ba3abec265f2dbf6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3773f237a510eb45ec0697c49d46aa7739ad9e890878e74ba3abec265f2dbf6->enter($__internal_e3773f237a510eb45ec0697c49d46aa7739ad9e890878e74ba3abec265f2dbf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_0122503bc808c85844e6aa7625ba151cc17d350f4495c4dd4335b410b99b5b06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0122503bc808c85844e6aa7625ba151cc17d350f4495c4dd4335b410b99b5b06->enter($__internal_0122503bc808c85844e6aa7625ba151cc17d350f4495c4dd4335b410b99b5b06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_e3773f237a510eb45ec0697c49d46aa7739ad9e890878e74ba3abec265f2dbf6->leave($__internal_e3773f237a510eb45ec0697c49d46aa7739ad9e890878e74ba3abec265f2dbf6_prof);

        
        $__internal_0122503bc808c85844e6aa7625ba151cc17d350f4495c4dd4335b410b99b5b06->leave($__internal_0122503bc808c85844e6aa7625ba151cc17d350f4495c4dd4335b410b99b5b06_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
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
