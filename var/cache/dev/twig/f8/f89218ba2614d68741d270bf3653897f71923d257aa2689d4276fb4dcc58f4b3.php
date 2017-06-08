<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_4d182c8f9010b4d7209adb06b54d837931278a49b6c4d79e26f2e84fb418e559 extends Twig_Template
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
        $__internal_86a593f87e9af1cc341da8eec16e4dfad983ac9cc91ba897067c8cc8cc32169c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86a593f87e9af1cc341da8eec16e4dfad983ac9cc91ba897067c8cc8cc32169c->enter($__internal_86a593f87e9af1cc341da8eec16e4dfad983ac9cc91ba897067c8cc8cc32169c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_07909a0005762c9d29e0fcd95c7fda0ebfe79793065870bec8979b92682d1b87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07909a0005762c9d29e0fcd95c7fda0ebfe79793065870bec8979b92682d1b87->enter($__internal_07909a0005762c9d29e0fcd95c7fda0ebfe79793065870bec8979b92682d1b87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_86a593f87e9af1cc341da8eec16e4dfad983ac9cc91ba897067c8cc8cc32169c->leave($__internal_86a593f87e9af1cc341da8eec16e4dfad983ac9cc91ba897067c8cc8cc32169c_prof);

        
        $__internal_07909a0005762c9d29e0fcd95c7fda0ebfe79793065870bec8979b92682d1b87->leave($__internal_07909a0005762c9d29e0fcd95c7fda0ebfe79793065870bec8979b92682d1b87_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
