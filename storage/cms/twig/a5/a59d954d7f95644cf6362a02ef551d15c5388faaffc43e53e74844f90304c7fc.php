<?php

/* /var/www/calc/themes/krisawzm-blank-bootstrap/pages/home.htm */
class __TwigTemplate_3079838841d3a998412fb5ce2dd2db331b5fb6f5568f6ee88afc86f84d0c09b0 extends Twig_Template
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
        echo "<div class=\"container\">
 ";
        // line 2
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("calc"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 3
        echo " ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("summary"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 4
        echo " ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("table"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 5
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/calc/themes/krisawzm-blank-bootstrap/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 5,  31 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"container\">
 {% partial \"calc\" %}
 {% partial \"summary\" %}
 {% partial \"table\" %}
</div>", "/var/www/calc/themes/krisawzm-blank-bootstrap/pages/home.htm", "");
    }
}
