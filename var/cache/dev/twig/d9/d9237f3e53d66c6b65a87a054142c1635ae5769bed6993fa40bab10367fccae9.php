<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_dac36821a73888e0d91113b570e971f73242968a095a2b26c609213ef8fea79d extends Twig_Template
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
        $__internal_ac1059a6e186d42c51c08ef4f4c39430d51881782f558afb8b442fad3fc9344f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac1059a6e186d42c51c08ef4f4c39430d51881782f558afb8b442fad3fc9344f->enter($__internal_ac1059a6e186d42c51c08ef4f4c39430d51881782f558afb8b442fad3fc9344f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_378e665ae35af1a9e9db25b6311fc4d21534ee103f24125f0a8536c037d65f6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_378e665ae35af1a9e9db25b6311fc4d21534ee103f24125f0a8536c037d65f6e->enter($__internal_378e665ae35af1a9e9db25b6311fc4d21534ee103f24125f0a8536c037d65f6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

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
        
        $__internal_ac1059a6e186d42c51c08ef4f4c39430d51881782f558afb8b442fad3fc9344f->leave($__internal_ac1059a6e186d42c51c08ef4f4c39430d51881782f558afb8b442fad3fc9344f_prof);

        
        $__internal_378e665ae35af1a9e9db25b6311fc4d21534ee103f24125f0a8536c037d65f6e->leave($__internal_378e665ae35af1a9e9db25b6311fc4d21534ee103f24125f0a8536c037d65f6e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
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
