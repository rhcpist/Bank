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
        $__internal_ef9637dd1ba2b2f7ac69409fb57cb8a0c30d40c974549ac8a61959b3dbcee500 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef9637dd1ba2b2f7ac69409fb57cb8a0c30d40c974549ac8a61959b3dbcee500->enter($__internal_ef9637dd1ba2b2f7ac69409fb57cb8a0c30d40c974549ac8a61959b3dbcee500_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_7311d15959f86d011af42fd795eb1e3cd9c6f43ccc76464bc80829d9c7111e0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7311d15959f86d011af42fd795eb1e3cd9c6f43ccc76464bc80829d9c7111e0b->enter($__internal_7311d15959f86d011af42fd795eb1e3cd9c6f43ccc76464bc80829d9c7111e0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_ef9637dd1ba2b2f7ac69409fb57cb8a0c30d40c974549ac8a61959b3dbcee500->leave($__internal_ef9637dd1ba2b2f7ac69409fb57cb8a0c30d40c974549ac8a61959b3dbcee500_prof);

        
        $__internal_7311d15959f86d011af42fd795eb1e3cd9c6f43ccc76464bc80829d9c7111e0b->leave($__internal_7311d15959f86d011af42fd795eb1e3cd9c6f43ccc76464bc80829d9c7111e0b_prof);

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
