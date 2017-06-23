<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_44cc86f352a69cd32bf4878fd379279a6e2630b3ef2a85d4e0cd0b0b3cdb3237 extends Twig_Template
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
        $__internal_61782fd877fe09d79874bd8739a328c991a9b16545ab2a24919ffae1678dbca5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61782fd877fe09d79874bd8739a328c991a9b16545ab2a24919ffae1678dbca5->enter($__internal_61782fd877fe09d79874bd8739a328c991a9b16545ab2a24919ffae1678dbca5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_5782014cf8772158e801ca0736c375d47b41505fc2cccac3888a59e6d5d9a8f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5782014cf8772158e801ca0736c375d47b41505fc2cccac3888a59e6d5d9a8f1->enter($__internal_5782014cf8772158e801ca0736c375d47b41505fc2cccac3888a59e6d5d9a8f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_61782fd877fe09d79874bd8739a328c991a9b16545ab2a24919ffae1678dbca5->leave($__internal_61782fd877fe09d79874bd8739a328c991a9b16545ab2a24919ffae1678dbca5_prof);

        
        $__internal_5782014cf8772158e801ca0736c375d47b41505fc2cccac3888a59e6d5d9a8f1->leave($__internal_5782014cf8772158e801ca0736c375d47b41505fc2cccac3888a59e6d5d9a8f1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
