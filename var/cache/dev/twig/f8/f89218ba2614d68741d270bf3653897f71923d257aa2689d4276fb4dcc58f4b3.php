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
        $__internal_1f84d1db82f9d572b60f08e39505f7f982403c14ab4e2ed2be989cd0f4258267 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f84d1db82f9d572b60f08e39505f7f982403c14ab4e2ed2be989cd0f4258267->enter($__internal_1f84d1db82f9d572b60f08e39505f7f982403c14ab4e2ed2be989cd0f4258267_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_b0d92a8fd5b3790ce696fbfe646261c31e6f237772214eafb1c415d29a76420e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0d92a8fd5b3790ce696fbfe646261c31e6f237772214eafb1c415d29a76420e->enter($__internal_b0d92a8fd5b3790ce696fbfe646261c31e6f237772214eafb1c415d29a76420e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_1f84d1db82f9d572b60f08e39505f7f982403c14ab4e2ed2be989cd0f4258267->leave($__internal_1f84d1db82f9d572b60f08e39505f7f982403c14ab4e2ed2be989cd0f4258267_prof);

        
        $__internal_b0d92a8fd5b3790ce696fbfe646261c31e6f237772214eafb1c415d29a76420e->leave($__internal_b0d92a8fd5b3790ce696fbfe646261c31e6f237772214eafb1c415d29a76420e_prof);

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
