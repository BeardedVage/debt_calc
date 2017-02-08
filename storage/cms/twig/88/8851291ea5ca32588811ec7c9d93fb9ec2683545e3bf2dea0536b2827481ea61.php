<?php

/* /var/www/calc/themes/krisawzm-blank-bootstrap/partials/table.htm */
class __TwigTemplate_d1340b9a62c953148ba580352fcaedd14cdaec9e6403dd9824d3c03f1938473b extends Twig_Template
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
        echo "<div class=\"panel panel-default\">
  <!-- Default panel contents -->
  <div class=\"panel-body\">
    <p>Долги по ЗП по месяцам</p>
  </div>

  <!-- Table -->
  <table class=\"table\">
  <tr>
    <th>Месяц</th>
    <th>Остались должны</th>
  </tr>
      ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["months"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["month"]) {
            // line 14
            echo "      <tr>
          <td>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["month"], "month", array()), "html", null, true);
            echo "</td>
          <td>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["month"], "debt", array()), "html", null, true);
            echo "</td>
      </tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['month'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "  </table>
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/calc/themes/krisawzm-blank-bootstrap/partials/table.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 19,  44 => 16,  40 => 15,  37 => 14,  33 => 13,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"panel panel-default\">
  <!-- Default panel contents -->
  <div class=\"panel-body\">
    <p>Долги по ЗП по месяцам</p>
  </div>

  <!-- Table -->
  <table class=\"table\">
  <tr>
    <th>Месяц</th>
    <th>Остались должны</th>
  </tr>
      {% for month in months %}
      <tr>
          <td>{{ month.month }}</td>
          <td>{{ month.debt }}</td>
      </tr>
      {% endfor %}
  </table>
</div>", "/var/www/calc/themes/krisawzm-blank-bootstrap/partials/table.htm", "");
    }
}
