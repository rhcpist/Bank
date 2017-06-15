<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_8a9d4986b03ccc5660623adf997e12961134e6bdcf8f38fa111bbb3c70b437b8 extends Twig_Template
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
        $__internal_a0736cfd6ca5beef1e6892da9e791aed41ef6ffb65471f0636729f28edbd7b4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0736cfd6ca5beef1e6892da9e791aed41ef6ffb65471f0636729f28edbd7b4e->enter($__internal_a0736cfd6ca5beef1e6892da9e791aed41ef6ffb65471f0636729f28edbd7b4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_7ea7dd3c8d5db0cdd27d1bf504f8f7b1841cfab5ff5356bf9e5f29ba426bc111 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ea7dd3c8d5db0cdd27d1bf504f8f7b1841cfab5ff5356bf9e5f29ba426bc111->enter($__internal_7ea7dd3c8d5db0cdd27d1bf504f8f7b1841cfab5ff5356bf9e5f29ba426bc111_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_a0736cfd6ca5beef1e6892da9e791aed41ef6ffb65471f0636729f28edbd7b4e->leave($__internal_a0736cfd6ca5beef1e6892da9e791aed41ef6ffb65471f0636729f28edbd7b4e_prof);

        
        $__internal_7ea7dd3c8d5db0cdd27d1bf504f8f7b1841cfab5ff5356bf9e5f29ba426bc111->leave($__internal_7ea7dd3c8d5db0cdd27d1bf504f8f7b1841cfab5ff5356bf9e5f29ba426bc111_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
