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
        $__internal_d9712b51a1f0dc55d42b93dd0cf9c3ee7d44e1a56137985cc99f0393b4ffdf80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9712b51a1f0dc55d42b93dd0cf9c3ee7d44e1a56137985cc99f0393b4ffdf80->enter($__internal_d9712b51a1f0dc55d42b93dd0cf9c3ee7d44e1a56137985cc99f0393b4ffdf80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_ad3c9267fec376a7526981222d046494105cfdcbc9a974f9d53ad24a983e6d0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad3c9267fec376a7526981222d046494105cfdcbc9a974f9d53ad24a983e6d0d->enter($__internal_ad3c9267fec376a7526981222d046494105cfdcbc9a974f9d53ad24a983e6d0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_d9712b51a1f0dc55d42b93dd0cf9c3ee7d44e1a56137985cc99f0393b4ffdf80->leave($__internal_d9712b51a1f0dc55d42b93dd0cf9c3ee7d44e1a56137985cc99f0393b4ffdf80_prof);

        
        $__internal_ad3c9267fec376a7526981222d046494105cfdcbc9a974f9d53ad24a983e6d0d->leave($__internal_ad3c9267fec376a7526981222d046494105cfdcbc9a974f9d53ad24a983e6d0d_prof);

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
