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
        $__internal_cb7a8df9a132b0e14d99e697aba52c3029230d9f7eede95f5ab8cd19da949561 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb7a8df9a132b0e14d99e697aba52c3029230d9f7eede95f5ab8cd19da949561->enter($__internal_cb7a8df9a132b0e14d99e697aba52c3029230d9f7eede95f5ab8cd19da949561_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:content.html.twig"));

        $__internal_ecd9f9e3dcaacf6c2abf3ec147ddb074f1746e34778e6767c52158ec7f5bef15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecd9f9e3dcaacf6c2abf3ec147ddb074f1746e34778e6767c52158ec7f5bef15->enter($__internal_ecd9f9e3dcaacf6c2abf3ec147ddb074f1746e34778e6767c52158ec7f5bef15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:content.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cb7a8df9a132b0e14d99e697aba52c3029230d9f7eede95f5ab8cd19da949561->leave($__internal_cb7a8df9a132b0e14d99e697aba52c3029230d9f7eede95f5ab8cd19da949561_prof);

        
        $__internal_ecd9f9e3dcaacf6c2abf3ec147ddb074f1746e34778e6767c52158ec7f5bef15->leave($__internal_ecd9f9e3dcaacf6c2abf3ec147ddb074f1746e34778e6767c52158ec7f5bef15_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_27a9dc9a7588049e0351e6a928040faeedae2b7150e2cad18ed663cda27316f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27a9dc9a7588049e0351e6a928040faeedae2b7150e2cad18ed663cda27316f5->enter($__internal_27a9dc9a7588049e0351e6a928040faeedae2b7150e2cad18ed663cda27316f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_0a97ee88ebc83b6d7e1448d282d147838f71c688b9448cb0657f7fad614b6979 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a97ee88ebc83b6d7e1448d282d147838f71c688b9448cb0657f7fad614b6979->enter($__internal_0a97ee88ebc83b6d7e1448d282d147838f71c688b9448cb0657f7fad614b6979_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "    <h1 style=\"text-align: center\">List of Transactions</h1>
    <a href=\"/logout\">Log out</a>
    <div class=\"row\" style=\"margin: 20px 0;\">
        <table id=\"dataTable\" class=\"display\">
            <tfoot>
            <tr>
                <th>Transaction Id</th>
                <th>Amount</th>
                <th>Date</th>
                <th>Customer name</th>
                <th>Customer CNP</th>
                <th>Customer Id</th>
            </tr>
            </tfoot>
        </table>
    </div>
";
        
        $__internal_0a97ee88ebc83b6d7e1448d282d147838f71c688b9448cb0657f7fad614b6979->leave($__internal_0a97ee88ebc83b6d7e1448d282d147838f71c688b9448cb0657f7fad614b6979_prof);

        
        $__internal_27a9dc9a7588049e0351e6a928040faeedae2b7150e2cad18ed663cda27316f5->leave($__internal_27a9dc9a7588049e0351e6a928040faeedae2b7150e2cad18ed663cda27316f5_prof);

    }

    // line 21
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5bc54f1ab4da4e592f48d3005ed276dd8e23aad2306f2041e2f02644b1f1b89e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5bc54f1ab4da4e592f48d3005ed276dd8e23aad2306f2041e2f02644b1f1b89e->enter($__internal_5bc54f1ab4da4e592f48d3005ed276dd8e23aad2306f2041e2f02644b1f1b89e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6523cd70b5fef900737238bae401400bb8aba845eabf96c6bea95aacae88a5f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6523cd70b5fef900737238bae401400bb8aba845eabf96c6bea95aacae88a5f4->enter($__internal_6523cd70b5fef900737238bae401400bb8aba845eabf96c6bea95aacae88a5f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 22
        echo "    <script>
        \$(document).ready(function(){

            \$('#dataTable tfoot th').each( function () {
                var title = \$(this).text();
                \$(this).html( '<input type=\"text\" class=\"form-control\" placeholder=\"Search '+title+'\" />' );
            } );

            var table = \$('#dataTable').DataTable({
                data: ";
        // line 31
        echo json_encode((isset($context["transactions"]) || array_key_exists("transactions", $context) ? $context["transactions"] : (function () { throw new Twig_Error_Runtime('Variable "transactions" does not exist.', 31, $this->getSourceContext()); })()));
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

            table.columns().every( function () {
                var that = this;

                \$( 'input', this.footer() ).on( 'keyup change', function () {
                    if ( that.search() !== this.value ) {
                        that.search( this.value ).draw();
                    }
                } );
            } );
        });
    </script>
";
        
        $__internal_6523cd70b5fef900737238bae401400bb8aba845eabf96c6bea95aacae88a5f4->leave($__internal_6523cd70b5fef900737238bae401400bb8aba845eabf96c6bea95aacae88a5f4_prof);

        
        $__internal_5bc54f1ab4da4e592f48d3005ed276dd8e23aad2306f2041e2f02644b1f1b89e->leave($__internal_5bc54f1ab4da4e592f48d3005ed276dd8e23aad2306f2041e2f02644b1f1b89e_prof);

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
        return array (  96 => 31,  85 => 22,  76 => 21,  50 => 3,  41 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block content %}
    <h1 style=\"text-align: center\">List of Transactions</h1>
    <a href=\"/logout\">Log out</a>
    <div class=\"row\" style=\"margin: 20px 0;\">
        <table id=\"dataTable\" class=\"display\">
            <tfoot>
            <tr>
                <th>Transaction Id</th>
                <th>Amount</th>
                <th>Date</th>
                <th>Customer name</th>
                <th>Customer CNP</th>
                <th>Customer Id</th>
            </tr>
            </tfoot>
        </table>
    </div>
{% endblock %}

{% block javascripts %}
    <script>
        \$(document).ready(function(){

            \$('#dataTable tfoot th').each( function () {
                var title = \$(this).text();
                \$(this).html( '<input type=\"text\" class=\"form-control\" placeholder=\"Search '+title+'\" />' );
            } );

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

            table.columns().every( function () {
                var that = this;

                \$( 'input', this.footer() ).on( 'keyup change', function () {
                    if ( that.search() !== this.value ) {
                        that.search( this.value ).draw();
                    }
                } );
            } );
        });
    </script>
{% endblock %}", ":default:content.html.twig", "/mnt/storage/private/public_html/bank/app/Resources/views/default/content.html.twig");
    }
}
