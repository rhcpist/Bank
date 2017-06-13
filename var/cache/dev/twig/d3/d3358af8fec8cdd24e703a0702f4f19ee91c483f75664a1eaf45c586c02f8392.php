<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_baf9636fa2070d1c1066968c7e7c42060988712dac978a86927756e110c3f700 extends Twig_Template
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
        $__internal_2d2425a563c1606d96b6f8119a320e151dd1d43d1d01bafc4d960e08777f81dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d2425a563c1606d96b6f8119a320e151dd1d43d1d01bafc4d960e08777f81dc->enter($__internal_2d2425a563c1606d96b6f8119a320e151dd1d43d1d01bafc4d960e08777f81dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_5ec8c70d3dced224c5a349988b2ecfb1cde9d4f90c17329cdd92b279bf1278c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ec8c70d3dced224c5a349988b2ecfb1cde9d4f90c17329cdd92b279bf1278c0->enter($__internal_5ec8c70d3dced224c5a349988b2ecfb1cde9d4f90c17329cdd92b279bf1278c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_2d2425a563c1606d96b6f8119a320e151dd1d43d1d01bafc4d960e08777f81dc->leave($__internal_2d2425a563c1606d96b6f8119a320e151dd1d43d1d01bafc4d960e08777f81dc_prof);

        
        $__internal_5ec8c70d3dced224c5a349988b2ecfb1cde9d4f90c17329cdd92b279bf1278c0->leave($__internal_5ec8c70d3dced224c5a349988b2ecfb1cde9d4f90c17329cdd92b279bf1278c0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
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
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_container_attributes.html.php");
    }
}
