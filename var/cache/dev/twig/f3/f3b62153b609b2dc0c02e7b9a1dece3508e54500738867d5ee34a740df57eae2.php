<?php

/* base.html.twig */
class __TwigTemplate_da1ebb29c69d740a2466af7153152aa29e5ed6d9832edb7c4d7db610533998e8 extends Twig_Template
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
        $__internal_01b55d91dc45216943fa9982d145e541e150a06c67846570fd6a129aad4b51da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01b55d91dc45216943fa9982d145e541e150a06c67846570fd6a129aad4b51da->enter($__internal_01b55d91dc45216943fa9982d145e541e150a06c67846570fd6a129aad4b51da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_dfcb678e15781ff15953075febb437d8570f813ab2258da8ecdf1b38488ed3c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfcb678e15781ff15953075febb437d8570f813ab2258da8ecdf1b38488ed3c7->enter($__internal_dfcb678e15781ff15953075febb437d8570f813ab2258da8ecdf1b38488ed3c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_01b55d91dc45216943fa9982d145e541e150a06c67846570fd6a129aad4b51da->leave($__internal_01b55d91dc45216943fa9982d145e541e150a06c67846570fd6a129aad4b51da_prof);

        
        $__internal_dfcb678e15781ff15953075febb437d8570f813ab2258da8ecdf1b38488ed3c7->leave($__internal_dfcb678e15781ff15953075febb437d8570f813ab2258da8ecdf1b38488ed3c7_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e89e4bc129e31d1f0c5052b46da514fc0173afacb6d3e5342774aef022e05a75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e89e4bc129e31d1f0c5052b46da514fc0173afacb6d3e5342774aef022e05a75->enter($__internal_e89e4bc129e31d1f0c5052b46da514fc0173afacb6d3e5342774aef022e05a75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e2dd3c46a2cfb3daac1c0af828332f7cf493f55cae2f3e8caa441d577fb8f32e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2dd3c46a2cfb3daac1c0af828332f7cf493f55cae2f3e8caa441d577fb8f32e->enter($__internal_e2dd3c46a2cfb3daac1c0af828332f7cf493f55cae2f3e8caa441d577fb8f32e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_e2dd3c46a2cfb3daac1c0af828332f7cf493f55cae2f3e8caa441d577fb8f32e->leave($__internal_e2dd3c46a2cfb3daac1c0af828332f7cf493f55cae2f3e8caa441d577fb8f32e_prof);

        
        $__internal_e89e4bc129e31d1f0c5052b46da514fc0173afacb6d3e5342774aef022e05a75->leave($__internal_e89e4bc129e31d1f0c5052b46da514fc0173afacb6d3e5342774aef022e05a75_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_269df74c492fa3d3453987c03206416e86ecf9a69e9768977f55db0b32342b52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_269df74c492fa3d3453987c03206416e86ecf9a69e9768977f55db0b32342b52->enter($__internal_269df74c492fa3d3453987c03206416e86ecf9a69e9768977f55db0b32342b52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_9d028bbbfd2c1de14a22a1dac23f174af29863ce13b75c55fc9ebb9dd870edfe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d028bbbfd2c1de14a22a1dac23f174af29863ce13b75c55fc9ebb9dd870edfe->enter($__internal_9d028bbbfd2c1de14a22a1dac23f174af29863ce13b75c55fc9ebb9dd870edfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_9d028bbbfd2c1de14a22a1dac23f174af29863ce13b75c55fc9ebb9dd870edfe->leave($__internal_9d028bbbfd2c1de14a22a1dac23f174af29863ce13b75c55fc9ebb9dd870edfe_prof);

        
        $__internal_269df74c492fa3d3453987c03206416e86ecf9a69e9768977f55db0b32342b52->leave($__internal_269df74c492fa3d3453987c03206416e86ecf9a69e9768977f55db0b32342b52_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_05ac986155ce0904cf79826ad56905729c71f69f7b0d663500dd40e1e65f75e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05ac986155ce0904cf79826ad56905729c71f69f7b0d663500dd40e1e65f75e7->enter($__internal_05ac986155ce0904cf79826ad56905729c71f69f7b0d663500dd40e1e65f75e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cf6e4b1f6a371b92071b3ec31357bc70dd809a6a983b31ca7a4c9fac88bf028b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf6e4b1f6a371b92071b3ec31357bc70dd809a6a983b31ca7a4c9fac88bf028b->enter($__internal_cf6e4b1f6a371b92071b3ec31357bc70dd809a6a983b31ca7a4c9fac88bf028b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_cf6e4b1f6a371b92071b3ec31357bc70dd809a6a983b31ca7a4c9fac88bf028b->leave($__internal_cf6e4b1f6a371b92071b3ec31357bc70dd809a6a983b31ca7a4c9fac88bf028b_prof);

        
        $__internal_05ac986155ce0904cf79826ad56905729c71f69f7b0d663500dd40e1e65f75e7->leave($__internal_05ac986155ce0904cf79826ad56905729c71f69f7b0d663500dd40e1e65f75e7_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d178a97d0b20809ea9d9a028d827a14a912e1e4ae122a06a19e1f1fe1f192ec6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d178a97d0b20809ea9d9a028d827a14a912e1e4ae122a06a19e1f1fe1f192ec6->enter($__internal_d178a97d0b20809ea9d9a028d827a14a912e1e4ae122a06a19e1f1fe1f192ec6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_5e52a04860bbb2e453d8d7c6432ca719ed78f299746c9fbc8ecb7899f0ecc8ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e52a04860bbb2e453d8d7c6432ca719ed78f299746c9fbc8ecb7899f0ecc8ed->enter($__internal_5e52a04860bbb2e453d8d7c6432ca719ed78f299746c9fbc8ecb7899f0ecc8ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_5e52a04860bbb2e453d8d7c6432ca719ed78f299746c9fbc8ecb7899f0ecc8ed->leave($__internal_5e52a04860bbb2e453d8d7c6432ca719ed78f299746c9fbc8ecb7899f0ecc8ed_prof);

        
        $__internal_d178a97d0b20809ea9d9a028d827a14a912e1e4ae122a06a19e1f1fe1f192ec6->leave($__internal_d178a97d0b20809ea9d9a028d827a14a912e1e4ae122a06a19e1f1fe1f192ec6_prof);

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
