<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_2beda8526df448ee404cd2467b83b7bd8b87ea2866a0291e475997ebe6d59691 extends Twig_Template
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
        $__internal_a9758c134e7776168ace7482fd915458e0f6e8eadfd518aac2a679431ac724e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9758c134e7776168ace7482fd915458e0f6e8eadfd518aac2a679431ac724e0->enter($__internal_a9758c134e7776168ace7482fd915458e0f6e8eadfd518aac2a679431ac724e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_692913209d2fdc4e76d1b641ee9342867f53785f2560545b5b3f53a2d238a62c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_692913209d2fdc4e76d1b641ee9342867f53785f2560545b5b3f53a2d238a62c->enter($__internal_692913209d2fdc4e76d1b641ee9342867f53785f2560545b5b3f53a2d238a62c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_a9758c134e7776168ace7482fd915458e0f6e8eadfd518aac2a679431ac724e0->leave($__internal_a9758c134e7776168ace7482fd915458e0f6e8eadfd518aac2a679431ac724e0_prof);

        
        $__internal_692913209d2fdc4e76d1b641ee9342867f53785f2560545b5b3f53a2d238a62c->leave($__internal_692913209d2fdc4e76d1b641ee9342867f53785f2560545b5b3f53a2d238a62c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
