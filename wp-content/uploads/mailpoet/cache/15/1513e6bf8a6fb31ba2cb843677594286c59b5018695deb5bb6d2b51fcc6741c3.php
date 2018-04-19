<?php

/* newsletter/templates/blocks/social/blockIcon.hbs */
class __TwigTemplate_93819d329e2ed5ee1b45b049fa14be2fac8f878935a95ab8802ebd4d22c8364f extends Twig_Template
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
        echo "<a href=\"{{ link }}\" onClick=\"return false;\"><img src=\"{{#ifCond image '!=' ''}}{{ image }}{{ else }}{{ imageMissingSrc }}{{/ifCond}}\" onerror=\"if (this.src != '{{ imageMissingSrc }}') this.src = '{{ imageMissingSrc }}';\" alt=\"{{ text }}\" style=\"width: {{ width }}; height: {{ height }};\"/></a>
";
    }

    public function getTemplateName()
    {
        return "newsletter/templates/blocks/social/blockIcon.hbs";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "newsletter/templates/blocks/social/blockIcon.hbs", "/home/docsduno/www/wp-content/plugins/mailpoet/views/newsletter/templates/blocks/social/blockIcon.hbs");
    }
}
