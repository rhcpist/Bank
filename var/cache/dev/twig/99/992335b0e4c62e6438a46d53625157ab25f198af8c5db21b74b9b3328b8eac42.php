<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_4c571d9b591916a9b958416d79427e2e049dcbcb0860e5f2de65c0b8ef7e9d35 extends Twig_Template
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
        $__internal_a66af59b195b915fd0ec74cb1e4e53297b300167506395e546cc14c4fa1d88ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a66af59b195b915fd0ec74cb1e4e53297b300167506395e546cc14c4fa1d88ef->enter($__internal_a66af59b195b915fd0ec74cb1e4e53297b300167506395e546cc14c4fa1d88ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_062c9ecfc9a514b6ac06a993fe524dc4cd2212988c7f449eda583fdd4921f7b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_062c9ecfc9a514b6ac06a993fe524dc4cd2212988c7f449eda583fdd4921f7b8->enter($__internal_062c9ecfc9a514b6ac06a993fe524dc4cd2212988c7f449eda583fdd4921f7b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_a66af59b195b915fd0ec74cb1e4e53297b300167506395e546cc14c4fa1d88ef->leave($__internal_a66af59b195b915fd0ec74cb1e4e53297b300167506395e546cc14c4fa1d88ef_prof);

        
        $__internal_062c9ecfc9a514b6ac06a993fe524dc4cd2212988c7f449eda583fdd4921f7b8->leave($__internal_062c9ecfc9a514b6ac06a993fe524dc4cd2212988c7f449eda583fdd4921f7b8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
