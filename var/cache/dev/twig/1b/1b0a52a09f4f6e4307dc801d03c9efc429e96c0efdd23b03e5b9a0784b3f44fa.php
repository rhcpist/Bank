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
        $__internal_f27ca272ae03ade57f52231688d91544b83ab533b8cf359e3d7b0ec82c2ec81b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f27ca272ae03ade57f52231688d91544b83ab533b8cf359e3d7b0ec82c2ec81b->enter($__internal_f27ca272ae03ade57f52231688d91544b83ab533b8cf359e3d7b0ec82c2ec81b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:content.html.twig"));

        $__internal_efdc761cf307d695826ef3836d674d486d07c3d8c400fbb0e5ec85325a793df8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efdc761cf307d695826ef3836d674d486d07c3d8c400fbb0e5ec85325a793df8->enter($__internal_efdc761cf307d695826ef3836d674d486d07c3d8c400fbb0e5ec85325a793df8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:content.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f27ca272ae03ade57f52231688d91544b83ab533b8cf359e3d7b0ec82c2ec81b->leave($__internal_f27ca272ae03ade57f52231688d91544b83ab533b8cf359e3d7b0ec82c2ec81b_prof);

        
        $__internal_efdc761cf307d695826ef3836d674d486d07c3d8c400fbb0e5ec85325a793df8->leave($__internal_efdc761cf307d695826ef3836d674d486d07c3d8c400fbb0e5ec85325a793df8_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_60197c2b05983f9dbe2edcf4293065029925cd8a3b3cdf12b703ffe846dccac8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60197c2b05983f9dbe2edcf4293065029925cd8a3b3cdf12b703ffe846dccac8->enter($__internal_60197c2b05983f9dbe2edcf4293065029925cd8a3b3cdf12b703ffe846dccac8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_e45cbba4dca9adfa5f6b5f82545b388791b77479f8b99c61b8c552007630b0db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e45cbba4dca9adfa5f6b5f82545b388791b77479f8b99c61b8c552007630b0db->enter($__internal_e45cbba4dca9adfa5f6b5f82545b388791b77479f8b99c61b8c552007630b0db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_e45cbba4dca9adfa5f6b5f82545b388791b77479f8b99c61b8c552007630b0db->leave($__internal_e45cbba4dca9adfa5f6b5f82545b388791b77479f8b99c61b8c552007630b0db_prof);

        
        $__internal_60197c2b05983f9dbe2edcf4293065029925cd8a3b3cdf12b703ffe846dccac8->leave($__internal_60197c2b05983f9dbe2edcf4293065029925cd8a3b3cdf12b703ffe846dccac8_prof);

    }

    // line 21
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c08e42ae279efecc86197ebf1a9ce0559a7379359f79cffe1570e2dc10ea8352 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c08e42ae279efecc86197ebf1a9ce0559a7379359f79cffe1570e2dc10ea8352->enter($__internal_c08e42ae279efecc86197ebf1a9ce0559a7379359f79cffe1570e2dc10ea8352_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_ec95649b22d79a21622f98b73360310ef93da69cecf509328d76cf9ca54df35d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec95649b22d79a21622f98b73360310ef93da69cecf509328d76cf9ca54df35d->enter($__internal_ec95649b22d79a21622f98b73360310ef93da69cecf509328d76cf9ca54df35d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_ec95649b22d79a21622f98b73360310ef93da69cecf509328d76cf9ca54df35d->leave($__internal_ec95649b22d79a21622f98b73360310ef93da69cecf509328d76cf9ca54df35d_prof);

        
        $__internal_c08e42ae279efecc86197ebf1a9ce0559a7379359f79cffe1570e2dc10ea8352->leave($__internal_c08e42ae279efecc86197ebf1a9ce0559a7379359f79cffe1570e2dc10ea8352_prof);

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
