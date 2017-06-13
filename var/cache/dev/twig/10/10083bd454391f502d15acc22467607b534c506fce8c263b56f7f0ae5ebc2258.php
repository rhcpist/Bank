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
        $__internal_ddf474b0e16b51722399ff9be9aed5b00a1a49f38f0068861269640afa104c93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ddf474b0e16b51722399ff9be9aed5b00a1a49f38f0068861269640afa104c93->enter($__internal_ddf474b0e16b51722399ff9be9aed5b00a1a49f38f0068861269640afa104c93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_a649af66395fb6f62240b13d44804a939cdcf246301020cc4dd2a62417f4112b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a649af66395fb6f62240b13d44804a939cdcf246301020cc4dd2a62417f4112b->enter($__internal_a649af66395fb6f62240b13d44804a939cdcf246301020cc4dd2a62417f4112b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_ddf474b0e16b51722399ff9be9aed5b00a1a49f38f0068861269640afa104c93->leave($__internal_ddf474b0e16b51722399ff9be9aed5b00a1a49f38f0068861269640afa104c93_prof);

        
        $__internal_a649af66395fb6f62240b13d44804a939cdcf246301020cc4dd2a62417f4112b->leave($__internal_a649af66395fb6f62240b13d44804a939cdcf246301020cc4dd2a62417f4112b_prof);

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
