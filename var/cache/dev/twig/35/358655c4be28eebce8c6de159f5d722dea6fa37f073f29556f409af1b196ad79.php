<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_01d2fc9a20b21f4b3fe36330b28a6b3a89241676a6e193c8aaad5b040fea6c54 extends Twig_Template
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
        $__internal_0b607b5e1f3469906d54aecbba694df450647f5388336bc98d1836fb1f0e5947 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b607b5e1f3469906d54aecbba694df450647f5388336bc98d1836fb1f0e5947->enter($__internal_0b607b5e1f3469906d54aecbba694df450647f5388336bc98d1836fb1f0e5947_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_d774c094464dff56a93c2c581a19c3f4e837dd53367057a20619a81f978932a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d774c094464dff56a93c2c581a19c3f4e837dd53367057a20619a81f978932a4->enter($__internal_d774c094464dff56a93c2c581a19c3f4e837dd53367057a20619a81f978932a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_0b607b5e1f3469906d54aecbba694df450647f5388336bc98d1836fb1f0e5947->leave($__internal_0b607b5e1f3469906d54aecbba694df450647f5388336bc98d1836fb1f0e5947_prof);

        
        $__internal_d774c094464dff56a93c2c581a19c3f4e837dd53367057a20619a81f978932a4->leave($__internal_d774c094464dff56a93c2c581a19c3f4e837dd53367057a20619a81f978932a4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
