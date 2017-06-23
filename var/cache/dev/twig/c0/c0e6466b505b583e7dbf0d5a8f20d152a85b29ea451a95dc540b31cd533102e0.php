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
        $__internal_6d23d59768af5caf96f0e137c7713c2ba10e05702b703c382aff400cc75fe9ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d23d59768af5caf96f0e137c7713c2ba10e05702b703c382aff400cc75fe9ad->enter($__internal_6d23d59768af5caf96f0e137c7713c2ba10e05702b703c382aff400cc75fe9ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_2a84c297b368bcc4fd7630b00e591c1ee7d989e545af1937b0ccc95e8ee84660 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a84c297b368bcc4fd7630b00e591c1ee7d989e545af1937b0ccc95e8ee84660->enter($__internal_2a84c297b368bcc4fd7630b00e591c1ee7d989e545af1937b0ccc95e8ee84660_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_6d23d59768af5caf96f0e137c7713c2ba10e05702b703c382aff400cc75fe9ad->leave($__internal_6d23d59768af5caf96f0e137c7713c2ba10e05702b703c382aff400cc75fe9ad_prof);

        
        $__internal_2a84c297b368bcc4fd7630b00e591c1ee7d989e545af1937b0ccc95e8ee84660->leave($__internal_2a84c297b368bcc4fd7630b00e591c1ee7d989e545af1937b0ccc95e8ee84660_prof);

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
