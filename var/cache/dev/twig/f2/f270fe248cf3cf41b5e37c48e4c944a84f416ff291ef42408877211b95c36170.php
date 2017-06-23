<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_149795d19e330fcabb47db6a5411a8a0f8f81ba8ac8682b3a035537bf371c311 extends Twig_Template
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
        $__internal_583f2205f9a72ed7014b7a7a1f9162d92efd3ecc90cf18a43648c4bded52949b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_583f2205f9a72ed7014b7a7a1f9162d92efd3ecc90cf18a43648c4bded52949b->enter($__internal_583f2205f9a72ed7014b7a7a1f9162d92efd3ecc90cf18a43648c4bded52949b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_4249f887157bdb210186cbe7d375079030d327673c83a536b707de7e32d1f97c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4249f887157bdb210186cbe7d375079030d327673c83a536b707de7e32d1f97c->enter($__internal_4249f887157bdb210186cbe7d375079030d327673c83a536b707de7e32d1f97c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_583f2205f9a72ed7014b7a7a1f9162d92efd3ecc90cf18a43648c4bded52949b->leave($__internal_583f2205f9a72ed7014b7a7a1f9162d92efd3ecc90cf18a43648c4bded52949b_prof);

        
        $__internal_4249f887157bdb210186cbe7d375079030d327673c83a536b707de7e32d1f97c->leave($__internal_4249f887157bdb210186cbe7d375079030d327673c83a536b707de7e32d1f97c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_container_attributes.html.php");
    }
}
