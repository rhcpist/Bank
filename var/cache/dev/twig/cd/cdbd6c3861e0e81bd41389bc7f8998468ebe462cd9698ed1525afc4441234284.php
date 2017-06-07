<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_ec9bc1c5d62a91f55de169a8c3e2636692453eb4b1df3d8c9dd537aea168e5dd extends Twig_Template
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
        $__internal_b49cf05c9f8729f0ea1aadf795b26a3850c5ab1edd87b74c7d5e32a1c1d3bf0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b49cf05c9f8729f0ea1aadf795b26a3850c5ab1edd87b74c7d5e32a1c1d3bf0f->enter($__internal_b49cf05c9f8729f0ea1aadf795b26a3850c5ab1edd87b74c7d5e32a1c1d3bf0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_b97623b20dff3b2718c495fd7909f90484d1fa82e4fac28253c1b9957bb3fe3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b97623b20dff3b2718c495fd7909f90484d1fa82e4fac28253c1b9957bb3fe3b->enter($__internal_b97623b20dff3b2718c495fd7909f90484d1fa82e4fac28253c1b9957bb3fe3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_b49cf05c9f8729f0ea1aadf795b26a3850c5ab1edd87b74c7d5e32a1c1d3bf0f->leave($__internal_b49cf05c9f8729f0ea1aadf795b26a3850c5ab1edd87b74c7d5e32a1c1d3bf0f_prof);

        
        $__internal_b97623b20dff3b2718c495fd7909f90484d1fa82e4fac28253c1b9957bb3fe3b->leave($__internal_b97623b20dff3b2718c495fd7909f90484d1fa82e4fac28253c1b9957bb3fe3b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/repeated_row.html.php");
    }
}
