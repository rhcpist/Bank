<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_e1999eedfc8fac4a420bfa6877cd059280c2dbf6442f32695722d9c5285dc1cc extends Twig_Template
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
        $__internal_489f9879d7c1de877f7fc050c9dfcde660c32b49c602464bfbd81c4b626752d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_489f9879d7c1de877f7fc050c9dfcde660c32b49c602464bfbd81c4b626752d9->enter($__internal_489f9879d7c1de877f7fc050c9dfcde660c32b49c602464bfbd81c4b626752d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_3e3a7311a7e417db6f579dba21a09ab9a8dc6ef43df077c4d28ab2799f153daa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e3a7311a7e417db6f579dba21a09ab9a8dc6ef43df077c4d28ab2799f153daa->enter($__internal_3e3a7311a7e417db6f579dba21a09ab9a8dc6ef43df077c4d28ab2799f153daa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_489f9879d7c1de877f7fc050c9dfcde660c32b49c602464bfbd81c4b626752d9->leave($__internal_489f9879d7c1de877f7fc050c9dfcde660c32b49c602464bfbd81c4b626752d9_prof);

        
        $__internal_3e3a7311a7e417db6f579dba21a09ab9a8dc6ef43df077c4d28ab2799f153daa->leave($__internal_3e3a7311a7e417db6f579dba21a09ab9a8dc6ef43df077c4d28ab2799f153daa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
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
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_attributes.html.php", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_attributes.html.php");
    }
}
