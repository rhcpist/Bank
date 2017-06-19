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
        $__internal_10b6d875ea504f00706f04983d0faf62f5aa328309781e989eb4093db9c2d783 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10b6d875ea504f00706f04983d0faf62f5aa328309781e989eb4093db9c2d783->enter($__internal_10b6d875ea504f00706f04983d0faf62f5aa328309781e989eb4093db9c2d783_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_b716831bab4cca8a78a6b6ef286d0b8ccfd35d4a16a6d9348b9e2a159c49c69b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b716831bab4cca8a78a6b6ef286d0b8ccfd35d4a16a6d9348b9e2a159c49c69b->enter($__internal_b716831bab4cca8a78a6b6ef286d0b8ccfd35d4a16a6d9348b9e2a159c49c69b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_10b6d875ea504f00706f04983d0faf62f5aa328309781e989eb4093db9c2d783->leave($__internal_10b6d875ea504f00706f04983d0faf62f5aa328309781e989eb4093db9c2d783_prof);

        
        $__internal_b716831bab4cca8a78a6b6ef286d0b8ccfd35d4a16a6d9348b9e2a159c49c69b->leave($__internal_b716831bab4cca8a78a6b6ef286d0b8ccfd35d4a16a6d9348b9e2a159c49c69b_prof);

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
