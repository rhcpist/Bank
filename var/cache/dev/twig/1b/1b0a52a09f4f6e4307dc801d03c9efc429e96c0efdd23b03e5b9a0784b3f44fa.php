<?php

/* :default:content.html.twig */
class __TwigTemplate_f0e00c3ce5f0d8de3af9c3021427c64db05a3e5b9c6b20ae8f9bef24dbf5a2b1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":default:content.html.twig", 1);
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
        $__internal_73e832334399080e73b43ef1b0724a019d3a8d625a7d5ec2aabbffd8048f50ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73e832334399080e73b43ef1b0724a019d3a8d625a7d5ec2aabbffd8048f50ae->enter($__internal_73e832334399080e73b43ef1b0724a019d3a8d625a7d5ec2aabbffd8048f50ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:content.html.twig"));

        $__internal_ad502e4edf7d6a2ff5f0b800e64ddd61c94d7cfa6683342e569841ca914a7004 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad502e4edf7d6a2ff5f0b800e64ddd61c94d7cfa6683342e569841ca914a7004->enter($__internal_ad502e4edf7d6a2ff5f0b800e64ddd61c94d7cfa6683342e569841ca914a7004_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:content.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_73e832334399080e73b43ef1b0724a019d3a8d625a7d5ec2aabbffd8048f50ae->leave($__internal_73e832334399080e73b43ef1b0724a019d3a8d625a7d5ec2aabbffd8048f50ae_prof);

        
        $__internal_ad502e4edf7d6a2ff5f0b800e64ddd61c94d7cfa6683342e569841ca914a7004->leave($__internal_ad502e4edf7d6a2ff5f0b800e64ddd61c94d7cfa6683342e569841ca914a7004_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_81481daa550e2095f292dd34366996670116a0f7409b7c6d97737d82c0d9bbc4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81481daa550e2095f292dd34366996670116a0f7409b7c6d97737d82c0d9bbc4->enter($__internal_81481daa550e2095f292dd34366996670116a0f7409b7c6d97737d82c0d9bbc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_829404cb7719b78ef57f9e62cdb74abf189887211baea128820c27d4b0db570f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_829404cb7719b78ef57f9e62cdb74abf189887211baea128820c27d4b0db570f->enter($__internal_829404cb7719b78ef57f9e62cdb74abf189887211baea128820c27d4b0db570f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "    <h1 style=\"text-align: center\">List of Transactions</h1>
    <a href=\"/logout\">Log out</a>
    <div class=\"row\" style=\"margin: 20px 0;\">
        <table id=\"dataTable\" class=\"display\"></table>
    </div>
";
        
        $__internal_829404cb7719b78ef57f9e62cdb74abf189887211baea128820c27d4b0db570f->leave($__internal_829404cb7719b78ef57f9e62cdb74abf189887211baea128820c27d4b0db570f_prof);

        
        $__internal_81481daa550e2095f292dd34366996670116a0f7409b7c6d97737d82c0d9bbc4->leave($__internal_81481daa550e2095f292dd34366996670116a0f7409b7c6d97737d82c0d9bbc4_prof);

    }

    // line 10
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d272f45320f84ed727f30ad1dc525187dd4958f7f9fde4e144c7bd7939c09682 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d272f45320f84ed727f30ad1dc525187dd4958f7f9fde4e144c7bd7939c09682->enter($__internal_d272f45320f84ed727f30ad1dc525187dd4958f7f9fde4e144c7bd7939c09682_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_87f50755c8cb8328043e540d52ed043b07a672e2f386586552e999741f37d04d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87f50755c8cb8328043e540d52ed043b07a672e2f386586552e999741f37d04d->enter($__internal_87f50755c8cb8328043e540d52ed043b07a672e2f386586552e999741f37d04d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 11
        echo "    <script>
        \$(document).ready(function(){
            \$('#dataTable').DataTable({
                data: ";
        // line 14
        echo json_encode((isset($context["transactions"]) || array_key_exists("transactions", $context) ? $context["transactions"] : (function () { throw new Twig_Error_Runtime('Variable "transactions" does not exist.', 14, $this->getSourceContext()); })()));
        echo ",
                columns: [
                    { title: \"Transaction Id\",  data: 'id' },
                    { title: \"Amount \$\", data: 'amount' },
                    { title: \"Date\", data: 'date' },
                    { title: \"Customer name\", data: 'name' },
                    { title: \"Customer CNP\", data: 'cnp' }
                ],
                pageLength: 10,
                lengthMenu: [ 5, 10, 50 ]
            });
        });
    </script>
";
        
        $__internal_87f50755c8cb8328043e540d52ed043b07a672e2f386586552e999741f37d04d->leave($__internal_87f50755c8cb8328043e540d52ed043b07a672e2f386586552e999741f37d04d_prof);

        
        $__internal_d272f45320f84ed727f30ad1dc525187dd4958f7f9fde4e144c7bd7939c09682->leave($__internal_d272f45320f84ed727f30ad1dc525187dd4958f7f9fde4e144c7bd7939c09682_prof);

    }

    public function getTemplateName()
    {
        return ":default:content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 14,  74 => 11,  65 => 10,  50 => 3,  41 => 2,  11 => 1,);
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
            \$('#dataTable').DataTable({
                data: {{ transactions | json_encode() | raw }},
                columns: [
                    { title: \"Transaction Id\",  data: 'id' },
                    { title: \"Amount \$\", data: 'amount' },
                    { title: \"Date\", data: 'date' },
                    { title: \"Customer name\", data: 'name' },
                    { title: \"Customer CNP\", data: 'cnp' }
                ],
                pageLength: 10,
                lengthMenu: [ 5, 10, 50 ]
            });
        });
    </script>
{% endblock %}", ":default:content.html.twig", "/mnt/storage/private/public_html/bank/app/Resources/views/default/content.html.twig");
    }
}
