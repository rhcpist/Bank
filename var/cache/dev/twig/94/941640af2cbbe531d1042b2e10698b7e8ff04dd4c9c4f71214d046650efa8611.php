<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_625d3bdd8897e5cf9bfa792514256f71d21a1f91b52510046dc5a1a2143fb8a0 extends Twig_Template
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
        $__internal_e9cbad90dfa0dc532e23003e181c4f507ff8cccb790b5d563bd2a42cb4422941 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9cbad90dfa0dc532e23003e181c4f507ff8cccb790b5d563bd2a42cb4422941->enter($__internal_e9cbad90dfa0dc532e23003e181c4f507ff8cccb790b5d563bd2a42cb4422941_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_f77d5d3f641b9fd03fcdd067d41eba03b6acdf711f1298e1de4b4b424a0f4d3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f77d5d3f641b9fd03fcdd067d41eba03b6acdf711f1298e1de4b4b424a0f4d3d->enter($__internal_f77d5d3f641b9fd03fcdd067d41eba03b6acdf711f1298e1de4b4b424a0f4d3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_e9cbad90dfa0dc532e23003e181c4f507ff8cccb790b5d563bd2a42cb4422941->leave($__internal_e9cbad90dfa0dc532e23003e181c4f507ff8cccb790b5d563bd2a42cb4422941_prof);

        
        $__internal_f77d5d3f641b9fd03fcdd067d41eba03b6acdf711f1298e1de4b4b424a0f4d3d->leave($__internal_f77d5d3f641b9fd03fcdd067d41eba03b6acdf711f1298e1de4b4b424a0f4d3d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
