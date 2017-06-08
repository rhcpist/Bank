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
        $__internal_755f6c21256cd68662f35fe68ccbf97d06db7c7dc9d371951739249ff7ad9a7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_755f6c21256cd68662f35fe68ccbf97d06db7c7dc9d371951739249ff7ad9a7f->enter($__internal_755f6c21256cd68662f35fe68ccbf97d06db7c7dc9d371951739249ff7ad9a7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_15b2d4cf7b74b5263ff26e5c20abd525a70d9243598554afe957d1b833100170 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15b2d4cf7b74b5263ff26e5c20abd525a70d9243598554afe957d1b833100170->enter($__internal_15b2d4cf7b74b5263ff26e5c20abd525a70d9243598554afe957d1b833100170_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_755f6c21256cd68662f35fe68ccbf97d06db7c7dc9d371951739249ff7ad9a7f->leave($__internal_755f6c21256cd68662f35fe68ccbf97d06db7c7dc9d371951739249ff7ad9a7f_prof);

        
        $__internal_15b2d4cf7b74b5263ff26e5c20abd525a70d9243598554afe957d1b833100170->leave($__internal_15b2d4cf7b74b5263ff26e5c20abd525a70d9243598554afe957d1b833100170_prof);

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
