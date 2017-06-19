<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_c11d49803ab542dd1dd269eeb233880a5418b985434d195136e7e320b30faf3f extends Twig_Template
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
        $__internal_a05b04d0384c3ca8a28aef4ddc4aff2ccb20522968ef6f9d7fd459647636eb7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a05b04d0384c3ca8a28aef4ddc4aff2ccb20522968ef6f9d7fd459647636eb7a->enter($__internal_a05b04d0384c3ca8a28aef4ddc4aff2ccb20522968ef6f9d7fd459647636eb7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_c17f65c4d517c01fc7b402e681dc7f29ef4cb53e54999a767c4cdd522a21f17e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c17f65c4d517c01fc7b402e681dc7f29ef4cb53e54999a767c4cdd522a21f17e->enter($__internal_c17f65c4d517c01fc7b402e681dc7f29ef4cb53e54999a767c4cdd522a21f17e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_a05b04d0384c3ca8a28aef4ddc4aff2ccb20522968ef6f9d7fd459647636eb7a->leave($__internal_a05b04d0384c3ca8a28aef4ddc4aff2ccb20522968ef6f9d7fd459647636eb7a_prof);

        
        $__internal_c17f65c4d517c01fc7b402e681dc7f29ef4cb53e54999a767c4cdd522a21f17e->leave($__internal_c17f65c4d517c01fc7b402e681dc7f29ef4cb53e54999a767c4cdd522a21f17e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
