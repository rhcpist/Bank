<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_32329112475ea34c1ae173b6ec6b88107f407d84673104eb8f2cdecb1ffe92c2 extends Twig_Template
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
        $__internal_8c9ced351316f6f92f807eea26b4055ea38cd0d2c8479b9cd9fdaa00f647d160 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c9ced351316f6f92f807eea26b4055ea38cd0d2c8479b9cd9fdaa00f647d160->enter($__internal_8c9ced351316f6f92f807eea26b4055ea38cd0d2c8479b9cd9fdaa00f647d160_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_0b61f2c8affea716a6581bf2011a16d11691652433c88a0a0cbaf8d490cda56c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b61f2c8affea716a6581bf2011a16d11691652433c88a0a0cbaf8d490cda56c->enter($__internal_0b61f2c8affea716a6581bf2011a16d11691652433c88a0a0cbaf8d490cda56c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_8c9ced351316f6f92f807eea26b4055ea38cd0d2c8479b9cd9fdaa00f647d160->leave($__internal_8c9ced351316f6f92f807eea26b4055ea38cd0d2c8479b9cd9fdaa00f647d160_prof);

        
        $__internal_0b61f2c8affea716a6581bf2011a16d11691652433c88a0a0cbaf8d490cda56c->leave($__internal_0b61f2c8affea716a6581bf2011a16d11691652433c88a0a0cbaf8d490cda56c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
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
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_attributes.html.php");
    }
}
