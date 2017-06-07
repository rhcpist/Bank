<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_021ce57bc0d63ae140a0e40cbe1dbd2e174a0e3bb86abe2814d6a5246d0002d9 extends Twig_Template
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
        $__internal_3c074b063fc25f796cbc38b2593205e00f862e10cb81aaa0c2d4395a4012421d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c074b063fc25f796cbc38b2593205e00f862e10cb81aaa0c2d4395a4012421d->enter($__internal_3c074b063fc25f796cbc38b2593205e00f862e10cb81aaa0c2d4395a4012421d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_5f5b51a0302614b0997a7bb1534c082c43d68991b71466b3df1913efdcdd1fbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f5b51a0302614b0997a7bb1534c082c43d68991b71466b3df1913efdcdd1fbc->enter($__internal_5f5b51a0302614b0997a7bb1534c082c43d68991b71466b3df1913efdcdd1fbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_3c074b063fc25f796cbc38b2593205e00f862e10cb81aaa0c2d4395a4012421d->leave($__internal_3c074b063fc25f796cbc38b2593205e00f862e10cb81aaa0c2d4395a4012421d_prof);

        
        $__internal_5f5b51a0302614b0997a7bb1534c082c43d68991b71466b3df1913efdcdd1fbc->leave($__internal_5f5b51a0302614b0997a7bb1534c082c43d68991b71466b3df1913efdcdd1fbc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
