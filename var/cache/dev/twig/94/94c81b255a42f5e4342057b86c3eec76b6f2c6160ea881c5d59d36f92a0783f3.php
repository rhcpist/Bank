<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_b48f7d6bed29620f885ea2e80001353162e7ee617ab5a8b1cc2bf9692841ab34 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c6c75538d44b8a9d9211be1698d5dfc7cb7bd73426943d1fa9297b5980715675 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6c75538d44b8a9d9211be1698d5dfc7cb7bd73426943d1fa9297b5980715675->enter($__internal_c6c75538d44b8a9d9211be1698d5dfc7cb7bd73426943d1fa9297b5980715675_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_e447971b7512e49a895f999faa6825e4df741fb07be0c5c9181d2270b9ac1663 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e447971b7512e49a895f999faa6825e4df741fb07be0c5c9181d2270b9ac1663->enter($__internal_e447971b7512e49a895f999faa6825e4df741fb07be0c5c9181d2270b9ac1663_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c6c75538d44b8a9d9211be1698d5dfc7cb7bd73426943d1fa9297b5980715675->leave($__internal_c6c75538d44b8a9d9211be1698d5dfc7cb7bd73426943d1fa9297b5980715675_prof);

        
        $__internal_e447971b7512e49a895f999faa6825e4df741fb07be0c5c9181d2270b9ac1663->leave($__internal_e447971b7512e49a895f999faa6825e4df741fb07be0c5c9181d2270b9ac1663_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_6501653f6e95e7bf5359e3b215d5f608e3136f989d227390eee808faf513c34f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6501653f6e95e7bf5359e3b215d5f608e3136f989d227390eee808faf513c34f->enter($__internal_6501653f6e95e7bf5359e3b215d5f608e3136f989d227390eee808faf513c34f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_5fa03be3a77606d6cd8c37bd7f5e85669013ffe743221e25b2470588fd7894a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fa03be3a77606d6cd8c37bd7f5e85669013ffe743221e25b2470588fd7894a6->enter($__internal_5fa03be3a77606d6cd8c37bd7f5e85669013ffe743221e25b2470588fd7894a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_5fa03be3a77606d6cd8c37bd7f5e85669013ffe743221e25b2470588fd7894a6->leave($__internal_5fa03be3a77606d6cd8c37bd7f5e85669013ffe743221e25b2470588fd7894a6_prof);

        
        $__internal_6501653f6e95e7bf5359e3b215d5f608e3136f989d227390eee808faf513c34f->leave($__internal_6501653f6e95e7bf5359e3b215d5f608e3136f989d227390eee808faf513c34f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_283cfdd495a012ce66fac2990edb15789d7b682bcc3e28e35b20766d7189f90f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_283cfdd495a012ce66fac2990edb15789d7b682bcc3e28e35b20766d7189f90f->enter($__internal_283cfdd495a012ce66fac2990edb15789d7b682bcc3e28e35b20766d7189f90f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_6b6b40b8bbb5f2d54aab0328e7cbc0c7146466ab3b788ecda757a9c529c5a014 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b6b40b8bbb5f2d54aab0328e7cbc0c7146466ab3b788ecda757a9c529c5a014->enter($__internal_6b6b40b8bbb5f2d54aab0328e7cbc0c7146466ab3b788ecda757a9c529c5a014_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_6b6b40b8bbb5f2d54aab0328e7cbc0c7146466ab3b788ecda757a9c529c5a014->leave($__internal_6b6b40b8bbb5f2d54aab0328e7cbc0c7146466ab3b788ecda757a9c529c5a014_prof);

        
        $__internal_283cfdd495a012ce66fac2990edb15789d7b682bcc3e28e35b20766d7189f90f->leave($__internal_283cfdd495a012ce66fac2990edb15789d7b682bcc3e28e35b20766d7189f90f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b64877b51639ef93d86ecf55de7837c1c1ba877351899ef4a3408df2cb94e3d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b64877b51639ef93d86ecf55de7837c1c1ba877351899ef4a3408df2cb94e3d2->enter($__internal_b64877b51639ef93d86ecf55de7837c1c1ba877351899ef4a3408df2cb94e3d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_459b909a98cf49eedad9d87d3365180c592b66afac68a138995e333e4e624d77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_459b909a98cf49eedad9d87d3365180c592b66afac68a138995e333e4e624d77->enter($__internal_459b909a98cf49eedad9d87d3365180c592b66afac68a138995e333e4e624d77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_459b909a98cf49eedad9d87d3365180c592b66afac68a138995e333e4e624d77->leave($__internal_459b909a98cf49eedad9d87d3365180c592b66afac68a138995e333e4e624d77_prof);

        
        $__internal_b64877b51639ef93d86ecf55de7837c1c1ba877351899ef4a3408df2cb94e3d2->leave($__internal_b64877b51639ef93d86ecf55de7837c1c1ba877351899ef4a3408df2cb94e3d2_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
