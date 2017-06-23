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
        $__internal_1baac35f533cdfdd47f00199808fd02b4f4a1638e789c7c57d0eab503f69527a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1baac35f533cdfdd47f00199808fd02b4f4a1638e789c7c57d0eab503f69527a->enter($__internal_1baac35f533cdfdd47f00199808fd02b4f4a1638e789c7c57d0eab503f69527a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_c4a4ab4af67f60369524ddf9474e617ede0df2bd05e4849a5e947db09e9370ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4a4ab4af67f60369524ddf9474e617ede0df2bd05e4849a5e947db09e9370ff->enter($__internal_c4a4ab4af67f60369524ddf9474e617ede0df2bd05e4849a5e947db09e9370ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_1baac35f533cdfdd47f00199808fd02b4f4a1638e789c7c57d0eab503f69527a->leave($__internal_1baac35f533cdfdd47f00199808fd02b4f4a1638e789c7c57d0eab503f69527a_prof);

        
        $__internal_c4a4ab4af67f60369524ddf9474e617ede0df2bd05e4849a5e947db09e9370ff->leave($__internal_c4a4ab4af67f60369524ddf9474e617ede0df2bd05e4849a5e947db09e9370ff_prof);

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
