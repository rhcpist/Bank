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
        $__internal_3782a0a40bdb8efe2291520aebee19f5e03ce5fabf9e64251a3978ce70b82297 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3782a0a40bdb8efe2291520aebee19f5e03ce5fabf9e64251a3978ce70b82297->enter($__internal_3782a0a40bdb8efe2291520aebee19f5e03ce5fabf9e64251a3978ce70b82297_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_51ac67feb0979a2a2107a5ecd75fc8cac02ee06aa5b178372b65d627cb7abc2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51ac67feb0979a2a2107a5ecd75fc8cac02ee06aa5b178372b65d627cb7abc2a->enter($__internal_51ac67feb0979a2a2107a5ecd75fc8cac02ee06aa5b178372b65d627cb7abc2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_3782a0a40bdb8efe2291520aebee19f5e03ce5fabf9e64251a3978ce70b82297->leave($__internal_3782a0a40bdb8efe2291520aebee19f5e03ce5fabf9e64251a3978ce70b82297_prof);

        
        $__internal_51ac67feb0979a2a2107a5ecd75fc8cac02ee06aa5b178372b65d627cb7abc2a->leave($__internal_51ac67feb0979a2a2107a5ecd75fc8cac02ee06aa5b178372b65d627cb7abc2a_prof);

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
