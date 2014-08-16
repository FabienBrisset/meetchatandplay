<?php

/* meetchatandplayHomeHomeBundle::layout_meet.html.twig */
class __TwigTemplate_1a2e20ed4e16148d7f91aa5cf9238dfff56c760f0059dc3aa4bf8b6aa13fcc61 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout_meet.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'body_content' => array($this, 'block_body_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout_meet.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "  ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Home
";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "\t";
        $this->displayBlock('body_content', $context, $blocks);
    }

    public function block_body_content($context, array $blocks = array())
    {
        // line 9
        echo "\t";
    }

    public function getTemplateName()
    {
        return "meetchatandplayHomeHomeBundle::layout_meet.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 9,  43 => 8,  40 => 7,  33 => 4,  30 => 3,  42 => 8,  39 => 7,  32 => 4,  29 => 3,);
    }
}
