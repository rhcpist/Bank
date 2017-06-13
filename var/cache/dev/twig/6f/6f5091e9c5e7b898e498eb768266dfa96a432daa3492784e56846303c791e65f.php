<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_8a9d4986b03ccc5660623adf997e12961134e6bdcf8f38fa111bbb3c70b437b8 extends Twig_Template
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
        $__internal_c7a158a1c08d78331bdbac71b58b120d3ab58b210e97aace38ec2a909c6469b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7a158a1c08d78331bdbac71b58b120d3ab58b210e97aace38ec2a909c6469b4->enter($__internal_c7a158a1c08d78331bdbac71b58b120d3ab58b210e97aace38ec2a909c6469b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_3c22d8f3af1787aaa46bfc22cdafa7e9b24f4c2a75b44efe08586ecc9a67b35f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c22d8f3af1787aaa46bfc22cdafa7e9b24f4c2a75b44efe08586ecc9a67b35f->enter($__internal_3c22d8f3af1787aaa46bfc22cdafa7e9b24f4c2a75b44efe08586ecc9a67b35f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_c7a158a1c08d78331bdbac71b58b120d3ab58b210e97aace38ec2a909c6469b4->leave($__internal_c7a158a1c08d78331bdbac71b58b120d3ab58b210e97aace38ec2a909c6469b4_prof);

        
        $__internal_3c22d8f3af1787aaa46bfc22cdafa7e9b24f4c2a75b44efe08586ecc9a67b35f->leave($__internal_3c22d8f3af1787aaa46bfc22cdafa7e9b24f4c2a75b44efe08586ecc9a67b35f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
