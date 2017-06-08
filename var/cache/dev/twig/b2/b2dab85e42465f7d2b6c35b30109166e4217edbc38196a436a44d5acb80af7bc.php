<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_998420e706f82e43c6479d081dc60fdc1ee483a1106c832e715f1622ada94883 extends Twig_Template
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
        $__internal_ecf4f095e332e6be1c39304d4e19fa4db777739ea98ad2eef766dd4f68bb1f55 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ecf4f095e332e6be1c39304d4e19fa4db777739ea98ad2eef766dd4f68bb1f55->enter($__internal_ecf4f095e332e6be1c39304d4e19fa4db777739ea98ad2eef766dd4f68bb1f55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_6053a848a24c6ff75902185095a244b945ef863ce0790af78d664d124e439082 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6053a848a24c6ff75902185095a244b945ef863ce0790af78d664d124e439082->enter($__internal_6053a848a24c6ff75902185095a244b945ef863ce0790af78d664d124e439082_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_ecf4f095e332e6be1c39304d4e19fa4db777739ea98ad2eef766dd4f68bb1f55->leave($__internal_ecf4f095e332e6be1c39304d4e19fa4db777739ea98ad2eef766dd4f68bb1f55_prof);

        
        $__internal_6053a848a24c6ff75902185095a244b945ef863ce0790af78d664d124e439082->leave($__internal_6053a848a24c6ff75902185095a244b945ef863ce0790af78d664d124e439082_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
