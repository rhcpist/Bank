<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_b2249587d7d54492682496097767678d698a8ebf3fa6ef4d6d065efc379b6552 extends Twig_Template
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
        $__internal_485f0879d095ac75075a7d9e52ee0edf2805adb227cfc3b7b7d95456ead94824 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_485f0879d095ac75075a7d9e52ee0edf2805adb227cfc3b7b7d95456ead94824->enter($__internal_485f0879d095ac75075a7d9e52ee0edf2805adb227cfc3b7b7d95456ead94824_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_20664b449b26180a577c16139c75c127d283a2b2ff52b1782258aa80d06199cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20664b449b26180a577c16139c75c127d283a2b2ff52b1782258aa80d06199cf->enter($__internal_20664b449b26180a577c16139c75c127d283a2b2ff52b1782258aa80d06199cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_485f0879d095ac75075a7d9e52ee0edf2805adb227cfc3b7b7d95456ead94824->leave($__internal_485f0879d095ac75075a7d9e52ee0edf2805adb227cfc3b7b7d95456ead94824_prof);

        
        $__internal_20664b449b26180a577c16139c75c127d283a2b2ff52b1782258aa80d06199cf->leave($__internal_20664b449b26180a577c16139c75c127d283a2b2ff52b1782258aa80d06199cf_prof);

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
