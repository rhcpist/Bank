<?php

/* default/content.html.twig */
class __TwigTemplate_f0e00c3ce5f0d8de3af9c3021427c64db05a3e5b9c6b20ae8f9bef24dbf5a2b1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/content.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3aec6c774f0047f8a8126306f7c209b6e3badce3f77578dea287bc4ede6c7028 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3aec6c774f0047f8a8126306f7c209b6e3badce3f77578dea287bc4ede6c7028->enter($__internal_3aec6c774f0047f8a8126306f7c209b6e3badce3f77578dea287bc4ede6c7028_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/content.html.twig"));

        $__internal_c815820f724ee4f9a01c52be3f0e8a0686048efbe6716e6777deb17890035d7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c815820f724ee4f9a01c52be3f0e8a0686048efbe6716e6777deb17890035d7a->enter($__internal_c815820f724ee4f9a01c52be3f0e8a0686048efbe6716e6777deb17890035d7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/content.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3aec6c774f0047f8a8126306f7c209b6e3badce3f77578dea287bc4ede6c7028->leave($__internal_3aec6c774f0047f8a8126306f7c209b6e3badce3f77578dea287bc4ede6c7028_prof);

        
        $__internal_c815820f724ee4f9a01c52be3f0e8a0686048efbe6716e6777deb17890035d7a->leave($__internal_c815820f724ee4f9a01c52be3f0e8a0686048efbe6716e6777deb17890035d7a_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_b12f7b357bba4a22ff568cbfecef7618e572bbe04e4dfb24a554b6283a1e8a12 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b12f7b357bba4a22ff568cbfecef7618e572bbe04e4dfb24a554b6283a1e8a12->enter($__internal_b12f7b357bba4a22ff568cbfecef7618e572bbe04e4dfb24a554b6283a1e8a12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_cb50777d843abba0e6356051a0ce262e32480615ce3aef6b0f3f5b49858780a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb50777d843abba0e6356051a0ce262e32480615ce3aef6b0f3f5b49858780a9->enter($__internal_cb50777d843abba0e6356051a0ce262e32480615ce3aef6b0f3f5b49858780a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "    <h1 style=\"text-align: center\">List of Transactions</h1>
    <a href=\"/logout\">Log out</a>
    <div class=\"row\" style=\"margin: 20px 0;\">
        <table id=\"dataTable\" class=\"display\"></table>
    </div>
";
        
        $__internal_cb50777d843abba0e6356051a0ce262e32480615ce3aef6b0f3f5b49858780a9->leave($__internal_cb50777d843abba0e6356051a0ce262e32480615ce3aef6b0f3f5b49858780a9_prof);

        
        $__internal_b12f7b357bba4a22ff568cbfecef7618e572bbe04e4dfb24a554b6283a1e8a12->leave($__internal_b12f7b357bba4a22ff568cbfecef7618e572bbe04e4dfb24a554b6283a1e8a12_prof);

    }

    // line 10
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6a462d3cc699ee84997cef1673c496a87f4be96020f145ae2bf265696bb3ee75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a462d3cc699ee84997cef1673c496a87f4be96020f145ae2bf265696bb3ee75->enter($__internal_6a462d3cc699ee84997cef1673c496a87f4be96020f145ae2bf265696bb3ee75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_9c88de32188cfc46c40560c39a8091235c668aea71b5ebff0ad5d5a69f68a569 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c88de32188cfc46c40560c39a8091235c668aea71b5ebff0ad5d5a69f68a569->enter($__internal_9c88de32188cfc46c40560c39a8091235c668aea71b5ebff0ad5d5a69f68a569_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 11
        echo "    <script>
        \$(document).ready(function(){
            
            var table = \$('#dataTable').DataTable({
                data: ";
        // line 15
        echo json_encode((isset($context["transactions"]) || array_key_exists("transactions", $context) ? $context["transactions"] : (function () { throw new Twig_Error_Runtime('Variable "transactions" does not exist.', 15, $this->getSourceContext()); })()));
        echo ",
                columns: [
                    { title: \"Transaction Id\",  data: 'id' },
                    { title: \"Amount \$\", data: 'amount' },
                    { title: \"Date\", data: 'date' },
                    { title: \"Customer name\", data: 'name' },
                    { title: \"Customer CNP\", data: 'cnp' },
                    { title: \"Customer Id\", data: 'customId' }
                ],
                pageLength: 10,
                lengthMenu: [ 5, 10, 50 ]
            });
        });
    </script>
";
        
        $__internal_9c88de32188cfc46c40560c39a8091235c668aea71b5ebff0ad5d5a69f68a569->leave($__internal_9c88de32188cfc46c40560c39a8091235c668aea71b5ebff0ad5d5a69f68a569_prof);

        
        $__internal_6a462d3cc699ee84997cef1673c496a87f4be96020f145ae2bf265696bb3ee75->leave($__internal_6a462d3cc699ee84997cef1673c496a87f4be96020f145ae2bf265696bb3ee75_prof);

    }

    public function getTemplateName()
    {
        return "default/content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 15,  74 => 11,  65 => 10,  50 => 3,  41 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block content %}
    <h1 style=\"text-align: center\">List of Transactions</h1>
    <a href=\"/logout\">Log out</a>
    <div class=\"row\" style=\"margin: 20px 0;\">
        <table id=\"dataTable\" class=\"display\"></table>
    </div>
{% endblock %}

{% block javascripts %}
    <script>
        \$(document).ready(function(){
            
            var table = \$('#dataTable').DataTable({
                data: {{ transactions | json_encode() | raw }},
                columns: [
                    { title: \"Transaction Id\",  data: 'id' },
                    { title: \"Amount \$\", data: 'amount' },
                    { title: \"Date\", data: 'date' },
                    { title: \"Customer name\", data: 'name' },
                    { title: \"Customer CNP\", data: 'cnp' },
                    { title: \"Customer Id\", data: 'customId' }
                ],
                pageLength: 10,
                lengthMenu: [ 5, 10, 50 ]
            });
        });
    </script>
{% endblock %}", "default/content.html.twig", "/mnt/storage/private/public_html/bank/app/Resources/views/default/content.html.twig");
    }
}
