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
        $__internal_7e0620274ce72ac7f967091d5329bdaaf77e5246b959863d853b5bcbc79ad42d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e0620274ce72ac7f967091d5329bdaaf77e5246b959863d853b5bcbc79ad42d->enter($__internal_7e0620274ce72ac7f967091d5329bdaaf77e5246b959863d853b5bcbc79ad42d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_f09bc3e61a9c46630120b64f506aae6ff914a924ca4c34be8058f5e48baa4e81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f09bc3e61a9c46630120b64f506aae6ff914a924ca4c34be8058f5e48baa4e81->enter($__internal_f09bc3e61a9c46630120b64f506aae6ff914a924ca4c34be8058f5e48baa4e81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_7e0620274ce72ac7f967091d5329bdaaf77e5246b959863d853b5bcbc79ad42d->leave($__internal_7e0620274ce72ac7f967091d5329bdaaf77e5246b959863d853b5bcbc79ad42d_prof);

        
        $__internal_f09bc3e61a9c46630120b64f506aae6ff914a924ca4c34be8058f5e48baa4e81->leave($__internal_f09bc3e61a9c46630120b64f506aae6ff914a924ca4c34be8058f5e48baa4e81_prof);

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
