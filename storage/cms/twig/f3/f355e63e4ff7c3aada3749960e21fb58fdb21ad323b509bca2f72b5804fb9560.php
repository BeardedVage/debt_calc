<?php

/* /var/www/calc/themes/krisawzm-blank-bootstrap/partials/summary.htm */
class __TwigTemplate_53162c8257a26e20a93718f16f0a6a0ba685532c9382ea221ed20f73e4b38b4a extends Twig_Template
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
        // line 1
        if (($context["debt"] ?? null)) {
            // line 2
            echo "<div>
    <div class=\"alert alert-warning\" role=\"alert\">Общий долг равен = ";
            // line 3
            echo twig_escape_filter($this->env, ($context["debt"] ?? null), "html", null, true);
            echo " \$</div>
</div>
";
        } else {
            // line 6
            echo "<div>
    <div class=\"alert alert-success\" role=\"alert\">Долг равен нулю</div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/calc/themes/krisawzm-blank-bootstrap/partials/summary.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 6,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if debt %}
<div>
    <div class=\"alert alert-warning\" role=\"alert\">Общий долг равен = {{ debt }} \$</div>
</div>
{% else %}
<div>
    <div class=\"alert alert-success\" role=\"alert\">Долг равен нулю</div>
</div>
{% endif %}", "/var/www/calc/themes/krisawzm-blank-bootstrap/partials/summary.htm", "");
    }
}
