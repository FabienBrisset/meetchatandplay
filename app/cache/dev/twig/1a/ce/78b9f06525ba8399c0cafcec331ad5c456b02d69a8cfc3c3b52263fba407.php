<?php

/* meetchatandplayHomeHomeBundle:Home:index_meet.html.twig */
class __TwigTemplate_1ace78b9f06525ba8399c0cafcec331ad5c456b02d69a8cfc3c3b52263fba407 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("meetchatandplayHomeHomeBundle::layout_meet.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body_content' => array($this, 'block_body_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "meetchatandplayHomeHomeBundle::layout_meet.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_body_content($context, array $blocks = array())
    {
        // line 8
        echo "\t<center>
\t\t<h3><b><u>Dernières actualités</u></b></h3>
\t</center><br>
\t<table border = \"1\" width = \"963px\" height = \"70px\" style = \"margin-left: 15px;\">
\t\t<tr>
\t\t\t<td>
\t\t\t\t<center>
\t\t\t\t\tLancement du site !
\t\t\t\t\t<b>Bienvenue !</b>
\t\t\t\t</center>
\t\t\t</td>
\t\t</tr>
\t</table>
";
    }

    public function getTemplateName()
    {
        return "meetchatandplayHomeHomeBundle:Home:index_meet.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 8,  39 => 7,  32 => 4,  29 => 3,);
    }
}
