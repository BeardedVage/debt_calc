<?php

/* /var/www/calc/themes/krisawzm-blank-bootstrap/partials/calc.htm */
class __TwigTemplate_9d58f73f5b7985dd7a6f361b37d9d54a66ff9e05ebe5010415a4ce43ee1dda4b extends Twig_Template
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
        echo "<ul class=\"nav nav-pills\">
    <li class=\"pull-right\">Hi, ";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "name", array()), "html", null, true);
        echo "</li>
</ul>
<form name=\"salary\" data-request=\"MainComponent::onNewPayment\" onsubmit=\"setTimeout(function () { window.location.reload(); }, 2)\">
    <div class=\"row\">
        <div class=\"col-lg-6\">
            <div class=\"input-group\">
                <input name=\"payment\" type=\"text\" class=\"form-control\" placeholder=\"Введите оплату\">
                <span class=\"input-group-btn\">
                    <button class=\"btn btn-default\" type=\"submit\">Добавить оплату!</button>
                </span>
            </div>
        </div>
        <a class=\"btn pull-right\" data-request=\"onLogout\" data-request-data=\"redirect: '/'\">Sign out</a>
    </div>
</form>";
    }

    public function getTemplateName()
    {
        return "/var/www/calc/themes/krisawzm-blank-bootstrap/partials/calc.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<ul class=\"nav nav-pills\">
    <li class=\"pull-right\">Hi, {{ user.name }}</li>
</ul>
<form name=\"salary\" data-request=\"MainComponent::onNewPayment\" onsubmit=\"setTimeout(function () { window.location.reload(); }, 2)\">
    <div class=\"row\">
        <div class=\"col-lg-6\">
            <div class=\"input-group\">
                <input name=\"payment\" type=\"text\" class=\"form-control\" placeholder=\"Введите оплату\">
                <span class=\"input-group-btn\">
                    <button class=\"btn btn-default\" type=\"submit\">Добавить оплату!</button>
                </span>
            </div>
        </div>
        <a class=\"btn pull-right\" data-request=\"onLogout\" data-request-data=\"redirect: '/'\">Sign out</a>
    </div>
</form>", "/var/www/calc/themes/krisawzm-blank-bootstrap/partials/calc.htm", "");
    }
}
