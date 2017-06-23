<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_cdb779f4622a8a731e1c3fd84dbc17b37198c52f49449d04e0ae5faa974a126b extends Twig_Template
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
        $__internal_1852a9aed6b478448bffa364050db6ce10cd6e3c35d7d5abd16070fca09e815f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1852a9aed6b478448bffa364050db6ce10cd6e3c35d7d5abd16070fca09e815f->enter($__internal_1852a9aed6b478448bffa364050db6ce10cd6e3c35d7d5abd16070fca09e815f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_3f63ca77fe27ad0455c35c304960671ab1d34f7941b1136e5a55eea04633edb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f63ca77fe27ad0455c35c304960671ab1d34f7941b1136e5a55eea04633edb4->enter($__internal_3f63ca77fe27ad0455c35c304960671ab1d34f7941b1136e5a55eea04633edb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_1852a9aed6b478448bffa364050db6ce10cd6e3c35d7d5abd16070fca09e815f->leave($__internal_1852a9aed6b478448bffa364050db6ce10cd6e3c35d7d5abd16070fca09e815f_prof);

        
        $__internal_3f63ca77fe27ad0455c35c304960671ab1d34f7941b1136e5a55eea04633edb4->leave($__internal_3f63ca77fe27ad0455c35c304960671ab1d34f7941b1136e5a55eea04633edb4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
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
