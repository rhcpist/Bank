<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_f62b45cf32f7a5d0d0c671c17ddd2565c3f7661d35d918449186a5d31df76569 extends Twig_Template
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
        $__internal_020aa3591dd5d9aa6869d62afb4e14da356c91471c04284d0eff8505cf12e343 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_020aa3591dd5d9aa6869d62afb4e14da356c91471c04284d0eff8505cf12e343->enter($__internal_020aa3591dd5d9aa6869d62afb4e14da356c91471c04284d0eff8505cf12e343_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_15a85e218b6696612a0d80fb59c33da1cef7fe2d6fed0865fff714e211ffd72c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15a85e218b6696612a0d80fb59c33da1cef7fe2d6fed0865fff714e211ffd72c->enter($__internal_15a85e218b6696612a0d80fb59c33da1cef7fe2d6fed0865fff714e211ffd72c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_020aa3591dd5d9aa6869d62afb4e14da356c91471c04284d0eff8505cf12e343->leave($__internal_020aa3591dd5d9aa6869d62afb4e14da356c91471c04284d0eff8505cf12e343_prof);

        
        $__internal_15a85e218b6696612a0d80fb59c33da1cef7fe2d6fed0865fff714e211ffd72c->leave($__internal_15a85e218b6696612a0d80fb59c33da1cef7fe2d6fed0865fff714e211ffd72c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_attributes.html.php");
    }
}
