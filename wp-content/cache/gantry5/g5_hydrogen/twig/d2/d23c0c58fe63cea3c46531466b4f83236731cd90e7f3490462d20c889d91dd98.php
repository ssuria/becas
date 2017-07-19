<?php

/* @particles/sample.html.twig */
class __TwigTemplate_a5fb847768aed7fd91d1f261bf789bf291768d65fcd663fd122abbd6499bdf69 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/sample.html.twig", 1);
        $this->blocks = array(
            'particle' => array($this, 'block_particle'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@nucleus/partials/particle.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_particle($context, array $blocks = array())
    {
        // line 4
        echo "\t<div class=\"sample-content\">
\t\t<div class=\"g-grid\">
\t\t\t<div class=\"g-block\">
\t\t\t\t<div class=\"g-content\">
\t\t\t\t\t";
        // line 8
        if ($this->getAttribute(($context["particle"] ?? null), "image", array())) {
            echo "<img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute(($context["particle"] ?? null), "image", array())), "html", null, true);
            echo "\" class=\"logo-large\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "headline", array()));
            echo "\" />";
        }
        // line 9
        echo "\t\t\t\t\t";
        if ($this->getAttribute(($context["particle"] ?? null), "headline", array())) {
            echo "<h1>";
            echo $this->getAttribute(($context["particle"] ?? null), "headline", array());
            echo "</h1>";
        }
        // line 10
        echo "\t\t\t\t\t";
        if ($this->getAttribute(($context["particle"] ?? null), "description", array())) {
            echo "<div class=\"sample-description\">";
            echo $this->getAttribute(($context["particle"] ?? null), "description", array());
            echo "</div>";
        }
        // line 11
        echo "\t\t\t\t\t";
        if ($this->getAttribute(($context["particle"] ?? null), "linktext", array())) {
            echo "<p><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "link", array()));
            echo "\" class=\"button\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "linktext", array()));
            echo "</a></p>";
        }
        // line 12
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"g-grid\">
\t\t\t";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["particle"] ?? null), "samples", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["sample"]) {
            // line 17
            echo "\t\t\t\t<div ";
            if ($this->getAttribute($context["sample"], "id", array())) {
                echo "id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["sample"], "id", array()));
                echo "\"";
            }
            // line 18
            echo "\t\t\t\t\t class=\"g-block ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["sample"], "class", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["sample"], "variations", array()), "html", null, true);
            echo "\">
\t\t\t\t\t<div class=\"g-content\">
\t\t\t\t\t\t<i class=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["sample"], "icon", array()), "html", null, true);
            echo " sample-icons\"></i>
\t\t\t\t\t\t<h4>";
            // line 21
            echo $this->getAttribute($context["sample"], "title", array());
            echo "</h4>
\t\t\t\t\t\t";
            // line 22
            echo $this->getAttribute($context["sample"], "subtitle", array());
            echo "
\t\t\t\t\t\t";
            // line 23
            echo $this->getAttribute($context["sample"], "description", array());
            echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sample'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "\t\t</div>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "@particles/sample.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 27,  105 => 23,  101 => 22,  97 => 21,  93 => 20,  85 => 18,  78 => 17,  74 => 16,  68 => 12,  59 => 11,  52 => 10,  45 => 9,  37 => 8,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@particles/sample.html.twig", "/var/www/html/wordpress/wp-content/themes/g5_hydrogen/particles/sample.html.twig");
    }
}
