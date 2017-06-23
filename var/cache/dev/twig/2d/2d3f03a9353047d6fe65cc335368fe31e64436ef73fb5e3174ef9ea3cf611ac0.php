<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_d529913c9c13e818e6ca281e0170ed902156c999d1a7f4d42f87f76426e45045 extends Twig_Template
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
        $__internal_f88e0c74e64ec7e1ee68bda82adfd37f1c326a7828047e190791989d5129685b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f88e0c74e64ec7e1ee68bda82adfd37f1c326a7828047e190791989d5129685b->enter($__internal_f88e0c74e64ec7e1ee68bda82adfd37f1c326a7828047e190791989d5129685b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_2eca74b2a94c11e2d5bb2e0cb00c1b232fc6e7394ba17fe9c1110d1b3ff56e5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2eca74b2a94c11e2d5bb2e0cb00c1b232fc6e7394ba17fe9c1110d1b3ff56e5e->enter($__internal_2eca74b2a94c11e2d5bb2e0cb00c1b232fc6e7394ba17fe9c1110d1b3ff56e5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_f88e0c74e64ec7e1ee68bda82adfd37f1c326a7828047e190791989d5129685b->leave($__internal_f88e0c74e64ec7e1ee68bda82adfd37f1c326a7828047e190791989d5129685b_prof);

        
        $__internal_2eca74b2a94c11e2d5bb2e0cb00c1b232fc6e7394ba17fe9c1110d1b3ff56e5e->leave($__internal_2eca74b2a94c11e2d5bb2e0cb00c1b232fc6e7394ba17fe9c1110d1b3ff56e5e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
