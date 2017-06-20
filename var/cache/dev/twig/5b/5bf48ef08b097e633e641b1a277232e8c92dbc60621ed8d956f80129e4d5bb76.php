<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_899bd4f0cddec6105912a3e738410b614414cda70129013148c5c0527d7ae341 extends Twig_Template
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
        $__internal_26b0725b73f16540b3e25fc3e488acf961fe4ee5752456fa079dd4dbb0c8b35b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26b0725b73f16540b3e25fc3e488acf961fe4ee5752456fa079dd4dbb0c8b35b->enter($__internal_26b0725b73f16540b3e25fc3e488acf961fe4ee5752456fa079dd4dbb0c8b35b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_02f27cc8b3745676b4d97f7ae4dc53b97b65a359bee6d29f80abd75530a46043 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02f27cc8b3745676b4d97f7ae4dc53b97b65a359bee6d29f80abd75530a46043->enter($__internal_02f27cc8b3745676b4d97f7ae4dc53b97b65a359bee6d29f80abd75530a46043_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_26b0725b73f16540b3e25fc3e488acf961fe4ee5752456fa079dd4dbb0c8b35b->leave($__internal_26b0725b73f16540b3e25fc3e488acf961fe4ee5752456fa079dd4dbb0c8b35b_prof);

        
        $__internal_02f27cc8b3745676b4d97f7ae4dc53b97b65a359bee6d29f80abd75530a46043->leave($__internal_02f27cc8b3745676b4d97f7ae4dc53b97b65a359bee6d29f80abd75530a46043_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_attributes.html.php");
    }
}
