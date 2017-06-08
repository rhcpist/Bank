<?php

/* base.html.twig */
class __TwigTemplate_edbe3be9d4dc3618bede9aef6240e30e2e40cf8d3078397ea0f7b10a9a5a9da4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_78d8b19c8559c50804715d672ad148d6f1a2970200a4955640ee423ef8df8a30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78d8b19c8559c50804715d672ad148d6f1a2970200a4955640ee423ef8df8a30->enter($__internal_78d8b19c8559c50804715d672ad148d6f1a2970200a4955640ee423ef8df8a30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_9331ec9f9daefcd9e02dc359b016ebec184626e199cd77d5a09ce8d0cb778366 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9331ec9f9daefcd9e02dc359b016ebec184626e199cd77d5a09ce8d0cb778366->enter($__internal_9331ec9f9daefcd9e02dc359b016ebec184626e199cd77d5a09ce8d0cb778366_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_78d8b19c8559c50804715d672ad148d6f1a2970200a4955640ee423ef8df8a30->leave($__internal_78d8b19c8559c50804715d672ad148d6f1a2970200a4955640ee423ef8df8a30_prof);

        
        $__internal_9331ec9f9daefcd9e02dc359b016ebec184626e199cd77d5a09ce8d0cb778366->leave($__internal_9331ec9f9daefcd9e02dc359b016ebec184626e199cd77d5a09ce8d0cb778366_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_bb89330365d683435f40e552b400f107552ea6308c9bad95f29123712a5a3e3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb89330365d683435f40e552b400f107552ea6308c9bad95f29123712a5a3e3f->enter($__internal_bb89330365d683435f40e552b400f107552ea6308c9bad95f29123712a5a3e3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_79aed7700f0ec972d678891424c6bc6094464234d2cc9dc44f8c5132e326a333 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79aed7700f0ec972d678891424c6bc6094464234d2cc9dc44f8c5132e326a333->enter($__internal_79aed7700f0ec972d678891424c6bc6094464234d2cc9dc44f8c5132e326a333_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_79aed7700f0ec972d678891424c6bc6094464234d2cc9dc44f8c5132e326a333->leave($__internal_79aed7700f0ec972d678891424c6bc6094464234d2cc9dc44f8c5132e326a333_prof);

        
        $__internal_bb89330365d683435f40e552b400f107552ea6308c9bad95f29123712a5a3e3f->leave($__internal_bb89330365d683435f40e552b400f107552ea6308c9bad95f29123712a5a3e3f_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_be19115bb55f98f010b3c7af11138ff3397556918d8e8154d2e8cb4033697efb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be19115bb55f98f010b3c7af11138ff3397556918d8e8154d2e8cb4033697efb->enter($__internal_be19115bb55f98f010b3c7af11138ff3397556918d8e8154d2e8cb4033697efb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_acfd4c2969e523ad8042ca7a56f2b5bdad957209bf096f383a7223e60254149a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acfd4c2969e523ad8042ca7a56f2b5bdad957209bf096f383a7223e60254149a->enter($__internal_acfd4c2969e523ad8042ca7a56f2b5bdad957209bf096f383a7223e60254149a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_acfd4c2969e523ad8042ca7a56f2b5bdad957209bf096f383a7223e60254149a->leave($__internal_acfd4c2969e523ad8042ca7a56f2b5bdad957209bf096f383a7223e60254149a_prof);

        
        $__internal_be19115bb55f98f010b3c7af11138ff3397556918d8e8154d2e8cb4033697efb->leave($__internal_be19115bb55f98f010b3c7af11138ff3397556918d8e8154d2e8cb4033697efb_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_457875f7760523b1bb3a7e8158aaf39b374323775b7fcf7ab373a873704081b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_457875f7760523b1bb3a7e8158aaf39b374323775b7fcf7ab373a873704081b5->enter($__internal_457875f7760523b1bb3a7e8158aaf39b374323775b7fcf7ab373a873704081b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cc8d70e0c987b0242fce62ce4437000b844c87953c424c1e610dddc787ba8848 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc8d70e0c987b0242fce62ce4437000b844c87953c424c1e610dddc787ba8848->enter($__internal_cc8d70e0c987b0242fce62ce4437000b844c87953c424c1e610dddc787ba8848_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_cc8d70e0c987b0242fce62ce4437000b844c87953c424c1e610dddc787ba8848->leave($__internal_cc8d70e0c987b0242fce62ce4437000b844c87953c424c1e610dddc787ba8848_prof);

        
        $__internal_457875f7760523b1bb3a7e8158aaf39b374323775b7fcf7ab373a873704081b5->leave($__internal_457875f7760523b1bb3a7e8158aaf39b374323775b7fcf7ab373a873704081b5_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0fc20b38c1e192a10dcfb900b0c4f303454e66eed93b136ef8858d3f537abe1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0fc20b38c1e192a10dcfb900b0c4f303454e66eed93b136ef8858d3f537abe1e->enter($__internal_0fc20b38c1e192a10dcfb900b0c4f303454e66eed93b136ef8858d3f537abe1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_c41c6558d30335a907eca9da72a0075dfa3ff2d6aad00aa51be6ba02e234ff45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c41c6558d30335a907eca9da72a0075dfa3ff2d6aad00aa51be6ba02e234ff45->enter($__internal_c41c6558d30335a907eca9da72a0075dfa3ff2d6aad00aa51be6ba02e234ff45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_c41c6558d30335a907eca9da72a0075dfa3ff2d6aad00aa51be6ba02e234ff45->leave($__internal_c41c6558d30335a907eca9da72a0075dfa3ff2d6aad00aa51be6ba02e234ff45_prof);

        
        $__internal_0fc20b38c1e192a10dcfb900b0c4f303454e66eed93b136ef8858d3f537abe1e->leave($__internal_0fc20b38c1e192a10dcfb900b0c4f303454e66eed93b136ef8858d3f537abe1e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/mnt/storage/private/public_html/bank/app/Resources/views/base.html.twig");
    }
}
