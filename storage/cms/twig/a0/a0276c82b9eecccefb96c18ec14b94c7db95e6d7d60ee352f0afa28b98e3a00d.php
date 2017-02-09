<?php

/* /var/www/calc/themes/krisawzm-blank-bootstrap/pages/auth.htm */
class __TwigTemplate_041d63b4e1122703a6eedc0c645aa05aa32b61f602db527947b81e186c6577c0 extends Twig_Template
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
        if (($context["user"] ?? null)) {
            // line 2
            echo "<div class=\"container\">
    ";
            // line 3
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('CMS')->partialFunction("calc"            , $context['__cms_partial_params']            );
            unset($context['__cms_partial_params']);
            // line 4
            echo "    ";
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('CMS')->partialFunction("summary"            , $context['__cms_partial_params']            );
            unset($context['__cms_partial_params']);
            // line 5
            echo "    ";
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('CMS')->partialFunction("table"            , $context['__cms_partial_params']            );
            unset($context['__cms_partial_params']);
            // line 6
            echo "    
</div>
";
        } else {
            // line 9
            echo "<div class=\"container\">
    ";
            // line 10
            $context['__cms_component_params'] = [];
            echo $this->env->getExtension('CMS')->componentFunction("account"            , $context['__cms_component_params']            );
            unset($context['__cms_component_params']);
            // line 11
            echo "</div>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/calc/themes/krisawzm-blank-bootstrap/pages/auth.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 11,  46 => 10,  43 => 9,  38 => 6,  33 => 5,  28 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if user %}
<div class=\"container\">
    {% partial \"calc\" %}
    {% partial \"summary\" %}
    {% partial \"table\" %}
    
</div>
{% else %}
<div class=\"container\">
    {% component 'account' %}
</div>
{% endif %}", "/var/www/calc/themes/krisawzm-blank-bootstrap/pages/auth.htm", "");
    }
}
