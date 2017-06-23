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
        $__internal_4c92fe228059bed0508ee1f145cf61ed0b2aa52189f2d21408dad4ec6acce543 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c92fe228059bed0508ee1f145cf61ed0b2aa52189f2d21408dad4ec6acce543->enter($__internal_4c92fe228059bed0508ee1f145cf61ed0b2aa52189f2d21408dad4ec6acce543_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_f45622958f8ea62f7b1c4d3e6b130f4e1745d77d956a94bea123d144b12e6d4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f45622958f8ea62f7b1c4d3e6b130f4e1745d77d956a94bea123d144b12e6d4c->enter($__internal_f45622958f8ea62f7b1c4d3e6b130f4e1745d77d956a94bea123d144b12e6d4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_4c92fe228059bed0508ee1f145cf61ed0b2aa52189f2d21408dad4ec6acce543->leave($__internal_4c92fe228059bed0508ee1f145cf61ed0b2aa52189f2d21408dad4ec6acce543_prof);

        
        $__internal_f45622958f8ea62f7b1c4d3e6b130f4e1745d77d956a94bea123d144b12e6d4c->leave($__internal_f45622958f8ea62f7b1c4d3e6b130f4e1745d77d956a94bea123d144b12e6d4c_prof);

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
