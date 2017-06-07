<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_8dd2af7a33e44fa34e59e23b934ac1809d98c0539f8078c562aab5cc79cdf06a extends Twig_Template
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
        $__internal_8121f6c70bec495ffb723a1abdd4f8dabd6118f6c540125e9d0cd5f826bd3358 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8121f6c70bec495ffb723a1abdd4f8dabd6118f6c540125e9d0cd5f826bd3358->enter($__internal_8121f6c70bec495ffb723a1abdd4f8dabd6118f6c540125e9d0cd5f826bd3358_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_f4964f60c6e6dd6b825dca06c1183e056113e7b425d5c71b7ad4654c525039f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4964f60c6e6dd6b825dca06c1183e056113e7b425d5c71b7ad4654c525039f1->enter($__internal_f4964f60c6e6dd6b825dca06c1183e056113e7b425d5c71b7ad4654c525039f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_8121f6c70bec495ffb723a1abdd4f8dabd6118f6c540125e9d0cd5f826bd3358->leave($__internal_8121f6c70bec495ffb723a1abdd4f8dabd6118f6c540125e9d0cd5f826bd3358_prof);

        
        $__internal_f4964f60c6e6dd6b825dca06c1183e056113e7b425d5c71b7ad4654c525039f1->leave($__internal_f4964f60c6e6dd6b825dca06c1183e056113e7b425d5c71b7ad4654c525039f1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
