<?php

/* /var/www/calc/themes/krisawzm-blank-bootstrap/partials/settings.htm */
class __TwigTemplate_dd1c3ffdc27eea315d6bd6fe7a25d6ac64498d1dd2a26454d60c5817f6af5a8d extends Twig_Template
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
  <li><a href=\"/payments\">Выплаты</a></li>
  <li class=\"active\"><a href=\"/settings\">Настройки</a></li>
</ul>
<div class=\"panel container\">
<form class=\"mb-3\" name=\"debt\" data-request=\"MainComponent::onNewDebt\" onsubmit=\"setTimeout(function () { window.location.reload(); }, 2)\">
    <h4>Если у вас есть изначальный долг (не считая текущий месяц) - введите данный долг в поле:</h4>
    <div class=\"row mb-3\">
        <div class=\"col-lg-6\">
            <div class=\"input-group\">
                <input name=\"debt\" type=\"text\" class=\"form-control\" placeholder=\"Введите сумму долга\">
                <span class=\"input-group-btn\">
                    <button class=\"btn btn-default\" type=\"submit\">Добавить долг</button>
                </span>
            </div>
        </div>
    </div>
</form>
<form name=\"salary\" data-request=\"MainComponent::onUpdateSalary\" onsubmit=\"setTimeout(function () { window.location.reload(); }, 2)\">
    <h4>Если хотите изменить вашу ЗП, введите новое ЗП в поле:</h4>
    <div class=\"row\">
        <div class=\"col-lg-6\">
            <div class=\"input-group\">
                <input name=\"salary\" type=\"text\" class=\"form-control\" placeholder=\"Введите вашу ЗП\" value=";
        // line 25
        echo twig_escape_filter($this->env, ($context["surname"] ?? null), "html", null, true);
        echo ">
                <span class=\"input-group-btn\">
                    <button class=\"btn btn-default\" type=\"submit\">Обновить зарплату</button>
                </span>
            </div>
        </div>
    </div>
    <p></p>
</form>
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/calc/themes/krisawzm-blank-bootstrap/partials/settings.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 25,  19 => 1,);
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
  <li><a href=\"/payments\">Выплаты</a></li>
  <li class=\"active\"><a href=\"/settings\">Настройки</a></li>
</ul>
<div class=\"panel container\">
<form class=\"mb-3\" name=\"debt\" data-request=\"MainComponent::onNewDebt\" onsubmit=\"setTimeout(function () { window.location.reload(); }, 2)\">
    <h4>Если у вас есть изначальный долг (не считая текущий месяц) - введите данный долг в поле:</h4>
    <div class=\"row mb-3\">
        <div class=\"col-lg-6\">
            <div class=\"input-group\">
                <input name=\"debt\" type=\"text\" class=\"form-control\" placeholder=\"Введите сумму долга\">
                <span class=\"input-group-btn\">
                    <button class=\"btn btn-default\" type=\"submit\">Добавить долг</button>
                </span>
            </div>
        </div>
    </div>
</form>
<form name=\"salary\" data-request=\"MainComponent::onUpdateSalary\" onsubmit=\"setTimeout(function () { window.location.reload(); }, 2)\">
    <h4>Если хотите изменить вашу ЗП, введите новое ЗП в поле:</h4>
    <div class=\"row\">
        <div class=\"col-lg-6\">
            <div class=\"input-group\">
                <input name=\"salary\" type=\"text\" class=\"form-control\" placeholder=\"Введите вашу ЗП\" value={{ surname }}>
                <span class=\"input-group-btn\">
                    <button class=\"btn btn-default\" type=\"submit\">Обновить зарплату</button>
                </span>
            </div>
        </div>
    </div>
    <p></p>
</form>
</div>", "/var/www/calc/themes/krisawzm-blank-bootstrap/partials/settings.htm", "");
    }
}
