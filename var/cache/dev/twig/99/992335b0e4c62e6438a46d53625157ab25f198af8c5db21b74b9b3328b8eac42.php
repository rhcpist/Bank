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
        $__internal_5124f28d3525b16000c6f0b42e6b29c95ec21888fd053cffbd169815e8f13b02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5124f28d3525b16000c6f0b42e6b29c95ec21888fd053cffbd169815e8f13b02->enter($__internal_5124f28d3525b16000c6f0b42e6b29c95ec21888fd053cffbd169815e8f13b02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_d85eb6c776e5749b883aec142b7c00c49c5c08033f5d95b3f7ddf5c5c46cdf6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d85eb6c776e5749b883aec142b7c00c49c5c08033f5d95b3f7ddf5c5c46cdf6f->enter($__internal_d85eb6c776e5749b883aec142b7c00c49c5c08033f5d95b3f7ddf5c5c46cdf6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_5124f28d3525b16000c6f0b42e6b29c95ec21888fd053cffbd169815e8f13b02->leave($__internal_5124f28d3525b16000c6f0b42e6b29c95ec21888fd053cffbd169815e8f13b02_prof);

        
        $__internal_d85eb6c776e5749b883aec142b7c00c49c5c08033f5d95b3f7ddf5c5c46cdf6f->leave($__internal_d85eb6c776e5749b883aec142b7c00c49c5c08033f5d95b3f7ddf5c5c46cdf6f_prof);

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
