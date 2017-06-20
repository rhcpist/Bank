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
        $__internal_e3bcff91ef7264085c52e00160802ded7ee731344643c90fad096098f3649daf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3bcff91ef7264085c52e00160802ded7ee731344643c90fad096098f3649daf->enter($__internal_e3bcff91ef7264085c52e00160802ded7ee731344643c90fad096098f3649daf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_31558745760b8ab61d012945db486a9501632b9bb2ea75070a814e92f80fe73c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31558745760b8ab61d012945db486a9501632b9bb2ea75070a814e92f80fe73c->enter($__internal_31558745760b8ab61d012945db486a9501632b9bb2ea75070a814e92f80fe73c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_e3bcff91ef7264085c52e00160802ded7ee731344643c90fad096098f3649daf->leave($__internal_e3bcff91ef7264085c52e00160802ded7ee731344643c90fad096098f3649daf_prof);

        
        $__internal_31558745760b8ab61d012945db486a9501632b9bb2ea75070a814e92f80fe73c->leave($__internal_31558745760b8ab61d012945db486a9501632b9bb2ea75070a814e92f80fe73c_prof);

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
