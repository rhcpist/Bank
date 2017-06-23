<?php

/* :default:content.html.twig */
class __TwigTemplate_8deb7a41e107e4aff1fd0dfcb0f62b8ab7bf818622b4449a465cfa1dbde8194d extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
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
    }

    // line 21
    public function block_javascripts($context, array $blocks = array())
    {
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
        echo json_encode(($context["transactions"] ?? null));
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
        return array (  66 => 31,  55 => 22,  52 => 21,  32 => 3,  29 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":default:content.html.twig", "/mnt/storage/private/public_html/bank/app/Resources/views/default/content.html.twig");
    }
}
