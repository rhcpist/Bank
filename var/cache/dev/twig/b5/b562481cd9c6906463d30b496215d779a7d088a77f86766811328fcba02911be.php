<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_2a0a6935aa6074436ff35cb419d068dc2fc13c9a106970dc2fcc535d4c251d5d extends Twig_Template
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
        $__internal_84cb4282b7db049c774168b339e6588ac15e71028ed8ee9422da432579c538c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84cb4282b7db049c774168b339e6588ac15e71028ed8ee9422da432579c538c8->enter($__internal_84cb4282b7db049c774168b339e6588ac15e71028ed8ee9422da432579c538c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_3f2e6f9251692f9ad5b8778f84a73b7b4976bc8425c2302fddd9e3bcfa73e64f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f2e6f9251692f9ad5b8778f84a73b7b4976bc8425c2302fddd9e3bcfa73e64f->enter($__internal_3f2e6f9251692f9ad5b8778f84a73b7b4976bc8425c2302fddd9e3bcfa73e64f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_84cb4282b7db049c774168b339e6588ac15e71028ed8ee9422da432579c538c8->leave($__internal_84cb4282b7db049c774168b339e6588ac15e71028ed8ee9422da432579c538c8_prof);

        
        $__internal_3f2e6f9251692f9ad5b8778f84a73b7b4976bc8425c2302fddd9e3bcfa73e64f->leave($__internal_3f2e6f9251692f9ad5b8778f84a73b7b4976bc8425c2302fddd9e3bcfa73e64f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
