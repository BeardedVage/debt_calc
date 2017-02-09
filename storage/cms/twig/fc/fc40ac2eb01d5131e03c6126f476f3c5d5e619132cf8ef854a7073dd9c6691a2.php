<?php

/* /var/www/calc/themes/krisawzm-blank-bootstrap/partials/table_payments.htm */
class __TwigTemplate_0f82b595598639244f954a0c8b1439764ce097694e88cd5d400c5f51a0904de3 extends Twig_Template
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
        echo "<ul class=\"nav nav-tabs\">
  <li><a href=\"/\">Долги</a></li>
  <li class=\"active\"><a href=\"/payments\">Выплаты</a></li>
  <li><a href=\"/settings\">Настройки</a></li>
</ul>
<div class=\"panel panel-default\">
  <!-- Default panel contents -->
  <div class=\"panel-body\">
    <h3>Выплаты по датам</h3>
  </div>

  <!-- Table -->
  <table class=\"table\">
  <tr>
    <th>Дата</th>
    <th>Платёж</th>
  </tr>
      ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["months"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["month"]) {
            // line 19
            echo "      <tr>
          <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["month"], "added_at", array()), "html", null, true);
            echo "</td>
          <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["month"], "sum", array()), "html", null, true);
            echo "</td>
      </tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['month'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "  </table>
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/calc/themes/krisawzm-blank-bootstrap/partials/table_payments.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 24,  49 => 21,  45 => 20,  42 => 19,  38 => 18,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<ul class=\"nav nav-tabs\">
  <li><a href=\"/\">Долги</a></li>
  <li class=\"active\"><a href=\"/payments\">Выплаты</a></li>
  <li><a href=\"/settings\">Настройки</a></li>
</ul>
<div class=\"panel panel-default\">
  <!-- Default panel contents -->
  <div class=\"panel-body\">
    <h3>Выплаты по датам</h3>
  </div>

  <!-- Table -->
  <table class=\"table\">
  <tr>
    <th>Дата</th>
    <th>Платёж</th>
  </tr>
      {% for month in months %}
      <tr>
          <td>{{ month.added_at }}</td>
          <td>{{ month.sum }}</td>
      </tr>
      {% endfor %}
  </table>
</div>", "/var/www/calc/themes/krisawzm-blank-bootstrap/partials/table_payments.htm", "");
    }
}
