<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_260595d1ff632f6b07d559fd7a45ad42a38cc063992f4228278dea34ee9e1061 extends Twig_Template
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
        $__internal_4e1ef71b7f3eb16e94c97349725c40348d136d853cb0e5059c2c9d9bbe52be5b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e1ef71b7f3eb16e94c97349725c40348d136d853cb0e5059c2c9d9bbe52be5b->enter($__internal_4e1ef71b7f3eb16e94c97349725c40348d136d853cb0e5059c2c9d9bbe52be5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_96d51b42552234fd1e82d08a96ec1173bc09d22965898d0022ff03c0f0259b1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96d51b42552234fd1e82d08a96ec1173bc09d22965898d0022ff03c0f0259b1b->enter($__internal_96d51b42552234fd1e82d08a96ec1173bc09d22965898d0022ff03c0f0259b1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_4e1ef71b7f3eb16e94c97349725c40348d136d853cb0e5059c2c9d9bbe52be5b->leave($__internal_4e1ef71b7f3eb16e94c97349725c40348d136d853cb0e5059c2c9d9bbe52be5b_prof);

        
        $__internal_96d51b42552234fd1e82d08a96ec1173bc09d22965898d0022ff03c0f0259b1b->leave($__internal_96d51b42552234fd1e82d08a96ec1173bc09d22965898d0022ff03c0f0259b1b_prof);

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
