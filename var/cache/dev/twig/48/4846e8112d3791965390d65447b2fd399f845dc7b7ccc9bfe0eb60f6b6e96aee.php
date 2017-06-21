<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_b04551a39dae58e67eafa561918bff12c05a9b290a89b5c1f4c9d0a03dccd80f extends Twig_Template
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
        $__internal_6f53a8a4284287d9637a67dd24c88992f0b602475d50403bd3351d79e0c58b0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f53a8a4284287d9637a67dd24c88992f0b602475d50403bd3351d79e0c58b0b->enter($__internal_6f53a8a4284287d9637a67dd24c88992f0b602475d50403bd3351d79e0c58b0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_5f1a481a0a5069d1aa070f7d37ee991ad033e837839fe79f2629ae4cbb1ad405 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f1a481a0a5069d1aa070f7d37ee991ad033e837839fe79f2629ae4cbb1ad405->enter($__internal_5f1a481a0a5069d1aa070f7d37ee991ad033e837839fe79f2629ae4cbb1ad405_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_6f53a8a4284287d9637a67dd24c88992f0b602475d50403bd3351d79e0c58b0b->leave($__internal_6f53a8a4284287d9637a67dd24c88992f0b602475d50403bd3351d79e0c58b0b_prof);

        
        $__internal_5f1a481a0a5069d1aa070f7d37ee991ad033e837839fe79f2629ae4cbb1ad405->leave($__internal_5f1a481a0a5069d1aa070f7d37ee991ad033e837839fe79f2629ae4cbb1ad405_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
