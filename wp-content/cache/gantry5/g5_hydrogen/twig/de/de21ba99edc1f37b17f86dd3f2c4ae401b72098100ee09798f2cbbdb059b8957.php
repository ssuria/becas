<?php

/* @nucleus/layout/section.html.twig */
class __TwigTemplate_102d3d40db2cb579ea8973962bb820888fe57bd8e13787176aeb852170a07149 extends Twig_Template
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
        $context["tag_type"] = (($this->getAttribute(($context["segment"] ?? null), "subtype", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["segment"] ?? null), "subtype", array()), "section")) : ("section"));
        // line 2
        $context["attr_id"] = (($this->getAttribute($this->getAttribute(($context["segment"] ?? null), "attributes", array()), "id", array())) ? ($this->getAttribute($this->getAttribute(($context["segment"] ?? null), "attributes", array()), "id", array())) : (("g-" . $this->getAttribute(($context["segment"] ?? null), "id", array()))));
        // line 3
        $context["attr_class"] = $this->getAttribute($this->getAttribute(($context["segment"] ?? null), "attributes", array()), "class", array());
        // line 4
        $context["attr_extra"] = "";
        // line 5
        $context["boxed"] = $this->getAttribute($this->getAttribute(($context["segment"] ?? null), "attributes", array()), "boxed", array());
        // line 6
        if ( !(null === ($context["boxed"] ?? null))) {
            // line 7
            echo "    ";
            $context["boxed"] = (((twig_trim_filter(($context["boxed"] ?? null)) == "")) ? ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "config", array()), "page", array()), "body", array()), "layout", array()), "sections", array())) : (($context["boxed"] ?? null)));
        }
        // line 9
        echo "
";
        // line 10
        if ($this->getAttribute($this->getAttribute(($context["segment"] ?? null), "attributes", array()), "extra", array())) {
            // line 11
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["segment"] ?? null), "attributes", array()), "extra", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["attributes"]) {
                // line 12
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["attributes"]);
                foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                    // line 13
                    echo "        ";
                    $context["attr_extra"] = (((((($context["attr_extra"] ?? null) . " ") . twig_escape_filter($this->env, $context["key"])) . "=\"") . twig_escape_filter($this->env, $context["value"], "html_attr")) . "\"");
                    // line 14
                    echo "        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 15
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attributes'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 17
        echo "
";
        // line 18
        ob_start();
        // line 19
        echo "    ";
        if ($this->getAttribute(($context["segment"] ?? null), "children", array())) {
            // line 20
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["segments"] ?? null));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["segment"]) {
                // line 21
                echo "            ";
                $this->loadTemplate((("@nucleus/layout/" . $this->getAttribute($context["segment"], "type", array())) . ".html.twig"), "@nucleus/layout/section.html.twig", 21)->display(array_merge($context, array("segments" => $this->getAttribute($context["segment"], "children", array()))));
                // line 22
                echo "        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['segment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "    ";
        }
        $context["html"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 26
        if (($this->getAttribute($this->getAttribute(($context["segment"] ?? null), "attributes", array()), "sticky", array()) || twig_trim_filter(($context["html"] ?? null)))) {
            // line 27
            echo "    ";
            if (( !(null === ($context["boxed"] ?? null)) && ((($context["boxed"] ?? null) == 0) || (($context["boxed"] ?? null) == 2)))) {
                // line 28
                echo "        ";
                ob_start();
                // line 29
                echo "        <div class=\"g-container\">";
                echo ($context["html"] ?? null);
                echo "</div>
        ";
                $context["html"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 31
                echo "    ";
            }
            // line 32
            echo "
    ";
            // line 33
            ob_start();
            // line 34
            echo "    ";
            if ((($context["boxed"] ?? null) == 2)) {
                $context["attr_class"] = (($context["attr_class"] ?? null) . " g-flushed");
            }
            // line 35
            echo "    ";
            $context["attr_class"] = ((($context["attr_class"] ?? null)) ? (((" class=\"" . twig_trim_filter(($context["attr_class"] ?? null))) . "\"")) : (""));
            // line 36
            echo "<";
            echo ($context["tag_type"] ?? null);
            echo " id=\"";
            echo ($context["attr_id"] ?? null);
            echo "\"";
            echo ($context["attr_class"] ?? null);
            echo ($context["attr_extra"] ?? null);
            echo ">
        ";
            // line 37
            echo ($context["html"] ?? null);
            echo "
    </";
            // line 38
            echo ($context["tag_type"] ?? null);
            echo ">";
            $context["html"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 40
            echo "
    ";
            // line 41
            if ((($context["boxed"] ?? null) == 1)) {
                // line 42
                echo "    <div class=\"g-container\">";
                echo ($context["html"] ?? null);
                echo "</div>
    ";
            } else {
                // line 44
                echo "    ";
                echo ($context["html"] ?? null);
                echo "
    ";
            }
        }
    }

    public function getTemplateName()
    {
        return "@nucleus/layout/section.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 44,  166 => 42,  164 => 41,  161 => 40,  157 => 38,  153 => 37,  143 => 36,  140 => 35,  135 => 34,  133 => 33,  130 => 32,  127 => 31,  121 => 29,  118 => 28,  115 => 27,  113 => 26,  109 => 23,  95 => 22,  92 => 21,  74 => 20,  71 => 19,  69 => 18,  66 => 17,  59 => 15,  53 => 14,  50 => 13,  45 => 12,  40 => 11,  38 => 10,  35 => 9,  31 => 7,  29 => 6,  27 => 5,  25 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@nucleus/layout/section.html.twig", "/var/www/html/wordpress/wp-content/plugins/gantry5/engines/nucleus/templates/layout/section.html.twig");
    }
}
