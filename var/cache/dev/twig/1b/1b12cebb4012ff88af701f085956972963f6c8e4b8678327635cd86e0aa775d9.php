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
        $__internal_231badbfe1370e8655626f8cd6f94d02161b6e19af3bef3b5b688799b60a28a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_231badbfe1370e8655626f8cd6f94d02161b6e19af3bef3b5b688799b60a28a0->enter($__internal_231badbfe1370e8655626f8cd6f94d02161b6e19af3bef3b5b688799b60a28a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_044d117feb690a7d0f7b86163e4e0a5d85726492bfb85241ff8d861688fe3f0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_044d117feb690a7d0f7b86163e4e0a5d85726492bfb85241ff8d861688fe3f0a->enter($__internal_044d117feb690a7d0f7b86163e4e0a5d85726492bfb85241ff8d861688fe3f0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

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
        
        $__internal_231badbfe1370e8655626f8cd6f94d02161b6e19af3bef3b5b688799b60a28a0->leave($__internal_231badbfe1370e8655626f8cd6f94d02161b6e19af3bef3b5b688799b60a28a0_prof);

        
        $__internal_044d117feb690a7d0f7b86163e4e0a5d85726492bfb85241ff8d861688fe3f0a->leave($__internal_044d117feb690a7d0f7b86163e4e0a5d85726492bfb85241ff8d861688fe3f0a_prof);

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
