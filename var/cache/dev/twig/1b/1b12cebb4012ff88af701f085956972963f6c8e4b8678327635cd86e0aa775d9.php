<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_b985f19094dcc24d7ce588318c009b8c218fb071309161ba2e645ef363cc2668 extends Twig_Template
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
        $__internal_3129f650dba383177c450398125ac714424b960e9ea1e23d335a08a54aa0b709 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3129f650dba383177c450398125ac714424b960e9ea1e23d335a08a54aa0b709->enter($__internal_3129f650dba383177c450398125ac714424b960e9ea1e23d335a08a54aa0b709_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_6aacb45c6cba1b9404c55f6808d2aeb40c80e9781f262e15eed6c82b3eda5427 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6aacb45c6cba1b9404c55f6808d2aeb40c80e9781f262e15eed6c82b3eda5427->enter($__internal_6aacb45c6cba1b9404c55f6808d2aeb40c80e9781f262e15eed6c82b3eda5427_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

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
        
        $__internal_3129f650dba383177c450398125ac714424b960e9ea1e23d335a08a54aa0b709->leave($__internal_3129f650dba383177c450398125ac714424b960e9ea1e23d335a08a54aa0b709_prof);

        
        $__internal_6aacb45c6cba1b9404c55f6808d2aeb40c80e9781f262e15eed6c82b3eda5427->leave($__internal_6aacb45c6cba1b9404c55f6808d2aeb40c80e9781f262e15eed6c82b3eda5427_prof);

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
