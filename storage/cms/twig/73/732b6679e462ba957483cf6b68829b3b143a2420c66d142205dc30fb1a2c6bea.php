<?php

/* /var/www/calc/themes/krisawzm-blank-bootstrap/layouts/default.htm */
class __TwigTemplate_a381faf1dd215eb69b4c42c63e8720ccd0c865e4cb8c1cbd437ae2935ee38158 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <title>";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "title", array()), "html", null, true);
        echo "</title>
        ";
        // line 6
        echo $this->env->getExtension('CMS')->assetsFunction('css');
        echo $this->env->getExtension('CMS')->displayBlock('styles');
        // line 7
        echo "        <link href=\"";
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter(array(0 => "assets/less/app.less"));
        // line 9
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 10
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter(array(0 => "assets/css/main.css"));
        echo "\" rel=\"stylesheet\">
    </head>
    <body>
        ";
        // line 13
        echo $this->env->getExtension('CMS')->pageFunction();
        // line 14
        echo "
        <script src=\"";
        // line 15
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter(array(0 => "assets/js/jquery.js", 1 => "assets/vendor/bootstrap/js/transition.js", 2 => "assets/vendor/bootstrap/js/alert.js", 3 => "assets/vendor/bootstrap/js/button.js", 4 => "assets/vendor/bootstrap/js/carousel.js", 5 => "assets/vendor/bootstrap/js/collapse.js", 6 => "assets/vendor/bootstrap/js/dropdown.js", 7 => "assets/vendor/bootstrap/js/modal.js", 8 => "assets/vendor/bootstrap/js/tooltip.js", 9 => "assets/vendor/bootstrap/js/popover.js", 10 => "assets/vendor/bootstrap/js/scrollspy.js", 11 => "assets/vendor/bootstrap/js/tab.js", 12 => "assets/vendor/bootstrap/js/affix.js", 13 => "@framework", 14 => "@framework.extras", 15 => "assets/js/app.js"));
        // line 34
        echo "\"></script>

        ";
        // line 36
        echo $this->env->getExtension('CMS')->assetsFunction('js');
        echo $this->env->getExtension('CMS')->displayBlock('scripts');
        // line 37
        echo "    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "/var/www/calc/themes/krisawzm-blank-bootstrap/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 37,  55 => 36,  51 => 34,  49 => 15,  46 => 14,  44 => 13,  38 => 10,  35 => 9,  32 => 7,  29 => 6,  25 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <title>{{ this.page.title }}</title>
        {% styles %}
        <link href=\"{{ [
            'assets/less/app.less'
        ]|theme }}\" rel=\"stylesheet\">
        <link href=\"{{ ['assets/css/main.css']|theme }}\" rel=\"stylesheet\">
    </head>
    <body>
        {% page %}

        <script src=\"{{ [
            'assets/js/jquery.js',

            'assets/vendor/bootstrap/js/transition.js',
            'assets/vendor/bootstrap/js/alert.js',
            'assets/vendor/bootstrap/js/button.js',
            'assets/vendor/bootstrap/js/carousel.js',
            'assets/vendor/bootstrap/js/collapse.js',
            'assets/vendor/bootstrap/js/dropdown.js',
            'assets/vendor/bootstrap/js/modal.js',
            'assets/vendor/bootstrap/js/tooltip.js',
            'assets/vendor/bootstrap/js/popover.js',
            'assets/vendor/bootstrap/js/scrollspy.js',
            'assets/vendor/bootstrap/js/tab.js',
            'assets/vendor/bootstrap/js/affix.js',

            '@framework',
            '@framework.extras',

            'assets/js/app.js']|theme }}\"></script>

        {% scripts %}
    </body>
</html>", "/var/www/calc/themes/krisawzm-blank-bootstrap/layouts/default.htm", "");
    }
}
