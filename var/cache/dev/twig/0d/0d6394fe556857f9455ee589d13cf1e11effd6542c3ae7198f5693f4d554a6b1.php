<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_8926cc1dfb20233e4a8dc11d92721f561f59dc5532f13378f2a1dff2a6a93fcd extends Twig_Template
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
        $__internal_2b6b6b856967facf8209a7eac6b157dd5c1c423f79fd0881aca3504d8c00f088 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b6b6b856967facf8209a7eac6b157dd5c1c423f79fd0881aca3504d8c00f088->enter($__internal_2b6b6b856967facf8209a7eac6b157dd5c1c423f79fd0881aca3504d8c00f088_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_738d29b045515e3644bf32f6b29c6ffd8bb39f1e60f831d7a75eb5b54bb982be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_738d29b045515e3644bf32f6b29c6ffd8bb39f1e60f831d7a75eb5b54bb982be->enter($__internal_738d29b045515e3644bf32f6b29c6ffd8bb39f1e60f831d7a75eb5b54bb982be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_2b6b6b856967facf8209a7eac6b157dd5c1c423f79fd0881aca3504d8c00f088->leave($__internal_2b6b6b856967facf8209a7eac6b157dd5c1c423f79fd0881aca3504d8c00f088_prof);

        
        $__internal_738d29b045515e3644bf32f6b29c6ffd8bb39f1e60f831d7a75eb5b54bb982be->leave($__internal_738d29b045515e3644bf32f6b29c6ffd8bb39f1e60f831d7a75eb5b54bb982be_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
