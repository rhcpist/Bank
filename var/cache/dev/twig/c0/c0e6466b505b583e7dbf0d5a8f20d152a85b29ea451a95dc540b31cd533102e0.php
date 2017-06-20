<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_cf8c52c5a7d443fb120a8abdbc715580e644f4ce54c935927f7822c641796a83 extends Twig_Template
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
        $__internal_5e3b7919a184d80f173cbba322270c0846511b67eabd82ec21fa0f6cd8b0c090 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e3b7919a184d80f173cbba322270c0846511b67eabd82ec21fa0f6cd8b0c090->enter($__internal_5e3b7919a184d80f173cbba322270c0846511b67eabd82ec21fa0f6cd8b0c090_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_1f3cd0f4ed78ff29f3a1857538ac03b2eaf3ee396849818d66f3bb79a948ea0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f3cd0f4ed78ff29f3a1857538ac03b2eaf3ee396849818d66f3bb79a948ea0c->enter($__internal_1f3cd0f4ed78ff29f3a1857538ac03b2eaf3ee396849818d66f3bb79a948ea0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_5e3b7919a184d80f173cbba322270c0846511b67eabd82ec21fa0f6cd8b0c090->leave($__internal_5e3b7919a184d80f173cbba322270c0846511b67eabd82ec21fa0f6cd8b0c090_prof);

        
        $__internal_1f3cd0f4ed78ff29f3a1857538ac03b2eaf3ee396849818d66f3bb79a948ea0c->leave($__internal_1f3cd0f4ed78ff29f3a1857538ac03b2eaf3ee396849818d66f3bb79a948ea0c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
